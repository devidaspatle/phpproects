<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Albumgallery;
use App\Photogallery;

class PhotogalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photogallerys = Photogallery::all();
       // $photogallerys = \DB::table('photogalleries')->paginate(20);
        $albumgallerys = Albumgallery::all();
               
        return view('photogallerys.index', compact('photogallerys','albumgallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albumgallerys = Albumgallery::all(['id', 'title']);

        return view('photogallerys.create', compact('albumgallerys'));
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
        $file_path = '../../photogallerys/';
        $file->move($file_path, $file_name);

      $photogallerys = new Photogallery([
        'album_id' => $request->get('album_id'),
        'title'=> $request->get('title'),
        'image'=> $file_name,
        'status'=> 1
      ]);
      $photogallerys->save();
      return redirect('/photogallerys')->with('success', 'Photo Gallery has been added');
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
    	$albumgallerys = Albumgallery::all(['id', 'title']);
        $photogallerys = Photogallery::find($id);

        return view('photogallerys.edit', compact('photogallerys','categorys'));
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
        'album_id'=>'required',
        'title'=>'required'
      ]);
      $file = $request->file('file');
        $file_name = time() . $file->getClientOriginalName();                      
        $file_path = '../../photogallerys/';
        $file->move($file_path, $file_name);
      $photogallery = Photogallery::find($id);
      $photogallery->album_id = $request->get('album_id');
      $photogallery->title = $request->get('title');
      $photogallery->images = $file_name;
      $photogallery->save();

      return redirect('/photogallerys')->with('success', 'Photo Gallery has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photogallery = Photogallery::find($id);
        $photogallery->delete();
        return redirect('/photogallerys')->with('success', 'Store has been deleted Successfully');
    }

    public function albumgallery($id)
    {
        $albumgallerys = Albumgallery::where('id',$id)->get();
        $title = $albumgallerys->title;
         return $title;
    }

}
