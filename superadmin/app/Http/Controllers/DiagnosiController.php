<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Diagnosi;

class DiagnosiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosis = Diagnosi::all();
        
        return view('diagnosis.index', compact('diagnosis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('diagnosis.create', compact('diagnosis'));
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

            'diagnosis_name' => ['required', 'string', 'max:255'],
           
      ]);
      $diagnosis = new Diagnosi([
        'diagnosis_name' => $request->get('diagnosis_name'),
      ]);
       
       $diagnosis->save();
      return redirect('/diagnosis')->with('success', 'Centres has been added');
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
       
        $diagnosis = Diagnosi::find($id);

        return view('diagnosis.edit', compact('diagnosis'));
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
        'diagnosis_name'=>'required',
       
      ]);
      
        $diagnosi = Diagnosi::find($id);
       
        $diagnosi->diagnosis_name = $request->get('diagnosis_name');
        $diagnosi->save();

      return redirect('/diagnosis')->with('success', 'Diagnosi has been updated');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnosis = Diagnosi::find($id);
        $diagnosis->delete();

        return redirect('/diagnosis')->with('success', 'Diagnosis has been deleted Successfully');
    }
}
