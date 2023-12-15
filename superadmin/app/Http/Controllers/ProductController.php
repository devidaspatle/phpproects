<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     request()->validate([
 
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
 
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 		$categorys = Category::all(['id', 'category']);
 		$subcategorys = Subcategory::all(['id', 'subcategory']);
        return view('products.create', compact('categorys','subcategorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'categoryid'=>'integer',
        'subcategoryid'=> 'integer',
        'product_name' => 'required',
        'description' => 'required',
        'image' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);
       
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'product/'; // upload path
            $profileImage = time() . $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $dataimage[] = $profileImage;
            }
        }

        $product = new Product([
        'type_menu' => $request->get('type_menu'),
        'categoryid' => $request->get('categoryid'),
        'subcategoryid'=> $request->get('subcategoryid'),
        'product_name'=> $request->get('product_name'),
        'description'=> $request->get('description'),
        'status'=> 1
      ]);
       
       $product->image=json_encode($dataimage);
       $product->save();
      return redirect('/products')->with('success', 'Product has been added');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    	$categorys = Category::all(['id', 'category']);
 		$subcategorys = Subcategory::all(['id', 'subcategory']);

        $product = Product::find($id);

        return view('products.edit', compact('product','categorys','subcategorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    public function update(Request $request, $id)
    {
        $request->validate([
        'categoryid'=>'integer',
        'subcategoryid'=> 'integer',
        'product_name' => 'required',
        'description' => 'required'
      ]);
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'product/'; // upload path
            $profileImage = $files->getClientOriginalName();
            $files->move($destinationPath, $profileImage);
            $dataimage[] = $profileImage;
            }
        }
      $product = Product::find($id);
      $product->type_menu = $request->get('type_menu');
      $product->categoryid = $request->get('categoryid');
      $product->subcategoryid = $request->get('subcategoryid');
      $product->product_name = $request->get('product_name');
      $product->description = $request->get('description');
      $product->save();

      return redirect('/products')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product has been deleted Successfully');
    }


    public function importExportView(){
        return view('import_export');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function importFile(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['title' => $value->title, 'body' => $value->body];
                }
                if(!empty($arr)){
                    DB::table('products')->insert($arr);
                    dd('Insert Recorded successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');      
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function exportFile($type){
        $products = Product::get()->toArray();

        return \Excel::create('hdtuto_demo', function($excel) use ($products) {
            $excel->sheet('sheet name', function($sheet) use ($products)
            {
                $sheet->fromArray($products);
            });
        })->download($type);
    } 

    
}
