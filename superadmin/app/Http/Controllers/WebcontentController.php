<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webcontent;

class WebcontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $webcontents = Webcontent::all();

        return view('webcontents.index', compact('webcontents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webcontents.create');
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
        'description'=> 'required'
      ]);
      $contacts = new Webcontent([
        'title' => $request->get('title'),
        'description'=> $request->get('description'),
        
        ]);
      $contacts->save();
      return redirect('/webcontents')->with('success', 'Website Contact has been added');
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
      
        $webcontent = Webcontent::find($id);

        return view('webcontents.edit', compact('webcontent'));
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
        'description'=> 'required'
      ]);

      $content = Webcontent::find($id);
      $content->title = $request->get('title');
      $content->description = $request->get('description');
      $content->save();
      return redirect('/webcontents')->with('success', 'Website Contact has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Webcontent::find($id);
        $content->delete();
        return redirect('/webcontents')->with('success', 'Website Contact has been deleted Successfully');
    }
}
