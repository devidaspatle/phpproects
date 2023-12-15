<?php
namespace App\Http\Controllers;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Investigation;
use App\Diagnosi;


class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations = Investigation::all();
        $diagnosis = Diagnosi::all();
        return view('investigations.index', compact('investigations','diagnosis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $diagnosis = Diagnosi::all(['id', 'diagnosis_name']);
     
        return view('investigations.create', compact('investigations','diagnosis'));
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
 			'investigations_name' => ['required', 'string', 'max:255'],
            'diagnosis_id' => ['required', 'string', 'max:15'],
           
      ]);
      $investigations = new Investigation([
        'investigations_name' => $request->get('investigations_name'),
        'investigations_unit' => $request->get('investigations_unit'),
        'diagnosis_id' => $request->get('diagnosis_id'),
        'is_active'=> 1
      ]);
       
       $investigations->save();
      return redirect('/investigations')->with('success', 'Centres has been added');
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
       
        $investigation = Investigation::find($id);

        return view('investigations.edit', compact('investigation'));
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
        'investigations_name'=>'required',
      ]);
        $investigation = Investigation::find($id);
        $investigation->investigations_name = $request->get('investigations_name');
        $investigation->investigations_unit = $request->get('investigations_unit');
        $investigation->diagnosis_id = $request->get('diagnosis_id');
        $investigation->is_active = $request->get('is_active');
        $investigation->save();

      return redirect('/investigations')->with('success', 'Investigation has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investigations = Investigation::find($id);
        $investigations->delete();

        return redirect('/investigations')->with('success', 'Investigations has been deleted Successfully');
    }
}
