<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albumgallery;
use App\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $photos = Photo::all();
       
        return view('photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 		 $albumgallerys = Albumgallery::all();
        return view('photos.create', compact('albumgallerys'));
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
        'album_id'=>'required',
        'title'=>'required',
        'file'=>'required'
      ]);
      $file = $request->file('file');

      $file_name = time() . $file->getClientOriginalName();                      

      $file_path = '../../photos/';

      $file->move($file_path, $file_name);
    
      $photos = new Photo([
      	'album_id' => $request->get('album_id'),
        'title' => $request->get('title'),
        'image' => $file_name,
        'is_active'=> 1
      ]);
      $photos->save();
      return redirect('/photos')->with('success', 'Photo has been added');
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
        $photos = Photo::find($id);

        return view('photos.edit', compact('photos'));
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
        'title'=>'required',
      ]);
      $file = $request->file('file');
      $file_name = time() . $file->getClientOriginalName();                      
      $file_path = '../../photos/';
      $file->move($file_path, $file_name);
      $photo = Photo::find($id);
      $photo->album_id = $request->get('album_id');
      $photo->title = $request->get('title');
      $photo->image = $file_name;
      $photo->save();

      return redirect('/photos')->with('success', 'Photo has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect('/photos')->with('success', 'Photo has been deleted Successfully');
    }

    public function status(Request $request, $id)
    {
      $photo->is_active = $request->get('is_active');
      $photo->save();

      return redirect('/photos')->with('success', 'Photo has been updated');
    }

    
}