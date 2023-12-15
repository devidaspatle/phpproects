<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Changepassword;

class ChangepasswordController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('changepasswords.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('changepasswords.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
        $changepassword = Changepassword::find($id);

        return view('changepasswords.edit', compact('newsletter'));
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
        'name'=>'required',
        'email'=> 'required'
      ]);

      $newsletter = Newsletter::find($id);
      $newsletter->name = $request->get('name');
      $newsletter->email = $request->get('email');
      $newsletter->save();

      return redirect('/newsletters')->with('success', 'Newsletters has been updated');
    }
 
}