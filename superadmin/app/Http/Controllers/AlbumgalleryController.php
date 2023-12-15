<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Albumgallery;

class AlbumgalleryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $albumgallerys = Albumgallery::all();
       
        return view('albumgalleries.index', compact('albumgallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('albumgalleries.create');
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
        'title'=>'required',
      ]);
      $file = $request->file('file');

      $file_name = time() . $file->getClientOriginalName();                      

      $file_path = '../../albumgallerys/';

      $file->move($file_path, $file_name);
    
      $albumgalleries = new Albumgallery([
        'title' => $request->get('title'),
        'image' => $file_name,
        'is_active'=> 1
      ]);
      $albumgalleries->save();
      return redirect('/albumgalleries')->with('success', 'Albumgallery has been added');
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
        $albumgalleries = Albumgallery::find($id);

        return view('albumgalleries.edit', compact('albumgalleries'));
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
      $file_path = '../albumgallerys/';
      $file->move($file_path, $file_name);
      $albumgallery = Albumgallery::find($id);
      $albumgallery->title = $request->get('title');
      $albumgallery->image = $file_name;
      $albumgallery->save();

      return redirect('/albumgalleries')->with('success', 'Albumgallery has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $albumgallery = Albumgallery::find($id);
        $albumgallery->delete();
        return redirect('/albumgalleries')->with('success', 'Albumgallery has been deleted Successfully');
    }

    public function status(Request $request, $id)
    {
      $albumgallery->is_active = $request->get('is_active');
      $albumgallery->save();

      return redirect('/albumgalleries')->with('success', 'Albumgallery has been updated');
    }

    
}