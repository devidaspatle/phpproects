<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $testimonials = Testimonial::all();
       $testimonials = \DB::table('testimonials')->paginate(20);
        return view('testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('testimonials.create');
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
        'name'=>'required',
        'title'=>'required',
        'description'=>'required',
      ]);
        $file = $request->file('file');

        $file_name = time() . $file->getClientOriginalName();                      

        $file_path = '../../testimonials/';

        $file->move($file_path, $file_name);
        
      $testimonials = new Testimonial([
        'name' => $request->get('name'),
        'title' => $request->get('title'),
        'description' => $request->get('description'),
        'image' => $file_name,
        'status'=> 1
      ]);
      $testimonials->save();
      return redirect('/testimonials')->with('success', 'Testimonials has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);

        return view('testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name'=>'required',
        'title'=>'required',
        'description'=>'required',
      ]);
      $file = $request->file('file');
      $file_name = time() . $file->getClientOriginalName();                      
      $file_path = '../../testimonials/';
      $file->move($file_path, $file_name);
      $testimonial = Testimonial::find($id);
      $testimonial->name = $request->get('name');
      $testimonial->title = $request->get('title');
      $testimonial->description = $request->get('description');
      $testimonial->status = 1;
      $testimonial->image = $file_name;
      $testimonial->save();

      return redirect('/testimonials')->with('success', 'Testimonial has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect('/testimonials')->with('success', 'Testimonial has been deleted Successfully');
    }
}
