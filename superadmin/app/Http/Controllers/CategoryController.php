<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $albumgallerys = Category::all();
       $albumgallerys = \DB::table('categories')->paginate(20);
        return view('albumgallerys.index', compact('albumgallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('albumgallerys.create');
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
        'category'=>'required',
        'type_menu'=>'required',
        
      ]);
    $file = $request->file('file');

    $file_name = time() . $file->getClientOriginalName();                      

    $file_path = 'category/';

    $file->move($file_path, $file_name);
    
      $category = new Category([
        'type_menu' => $request->get('type_menu'),
        'category' => $request->get('category'),
        'image' => $file_name,
        'status'=> 1
      ]);
      $category->save();
      return redirect('/albumgallerys')->with('success', 'Category has been added');
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
        $category = Category::find($id);

        return view('albumgallerys.edit', compact('category'));
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
        'category'=>'required',
        'type_menu'=>'required',
      ]);
      $file = $request->file('file');
      $file_name = time() . $file->getClientOriginalName();                      
      $file_path = 'category/';
      $file->move($file_path, $file_name);
      $category = Category::find($id);
      $category->type_menu = $request->get('type_menu');
      $category->category = $request->get('category');
      $category->status = $request->get('status');
      $category->image = $file_name;
      $category->save();

      return redirect('/albumgallerys')->with('success', 'Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/albumgallerys')->with('success', 'Category has been deleted Successfully');
    }

    public function status(Request $request, $id)
    {
      $category->status = $request->get('status');
      $category->save();

      return redirect('/albumgallerys')->with('success', 'Category has been updated');
    }

    
}
