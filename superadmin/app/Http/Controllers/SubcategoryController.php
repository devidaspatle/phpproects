<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        $subcategories = \DB::table('subcategories')->paginate(20);
       $categories = Category::all();
               
        return view('subcategorys.index', compact('subcategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all(['id', 'category']);

        return view('subcategorys.create', compact('categorys'));
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
        'categoryid'=>'required',
        'subcategory'=>'required',
        'type_menu'=>'required',
        'file'=>'required'
      ]);
        $file = $request->file('file');
        $file_name = time() . $file->getClientOriginalName();                      
        $file_path = 'subcategory/';
        $file->move($file_path, $file_name);

      $subcategorys = new Subcategory([
        'type_menu' => $request->get('type_menu'),
        'categoryid' => $request->get('categoryid'),
        'subcategory'=> $request->get('subcategory'),
        'image'=> $file_name,
        'status'=> 1
      ]);
      $subcategorys->save();
      return redirect('/subcategorys')->with('success', 'Subcategory has been added');
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
        $subcategorys = Subcategory::find($id);

        return view('subcategorys.edit', compact('subcategorys','categorys'));
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
        'categoryid'=>'required',
        'subcategory'=>'required'

      ]);
      $file = $request->file('file');
        $file_name = time() . $file->getClientOriginalName();                      
        $file_path = 'subcategory/';
        $file->move($file_path, $file_name);
      $subcategory = Subcategory::find($id);
      
      $subcategory->type_menu = $request->get('type_menu');
      $subcategory->categoryid = $request->get('categoryid');
      $subcategory->subcategory = $request->get('subcategory');
      $subcategory->image = $file_name;
      $subcategory->save();

      return redirect('/subcategorys')->with('success', 'Subcategory has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return redirect('/subcategorys')->with('success', 'Store has been deleted Successfully');
    }

    public function category($id)
    {
        $categorys = Category::where('id',$id)->get();
        $category_name = $categorys->category;
         return $category_name;
    }

}
