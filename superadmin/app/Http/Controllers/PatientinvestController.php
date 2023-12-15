<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Centre;
use App\Patientinvest;

class PatientinvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        $centres = Centre::all();
        $patientinvests = Patientinvest::all();
        return view('patientinvests.index', compact('patientinvests','patients','centres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centres = Centre::all(['id', 'centre_name']);
        $patients = Patient::all(['id', 'patient_name']);
        return view('patientinvests.create', compact('patientinvests','centres','patients'));
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
            'user_id' => ['required', 'string', 'max:15'],
            'patient_id' => ['required', 'string', 'max:15'],
            'diabetes_value' => ['required', 'string', 'max:255'],
            'diabetes_id' => ['required', 'string', 'max:15'],
           
      ]);
      $patientinvests = new Patientinvest([
        'user_id' => $request->get('centre_id'),
        'patient_id' => $request->get('patient_id'),
        'diabetes_value' => $request->get('investigations_name'),
        'diabetes_id' => $request->get('diagnosis_id'),
        'status'=> 1
      ]);
       
       $patientinvests->save();
      return redirect('/patientinvests')->with('success', 'Patient Investigation has been added');
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
        $patientinvest = Patientinvest::find($id);
        $patients = Patient::find($id);
        $centres = Centre::find($id);
        return view('patientinvests.edit', compact('patientinvest','centres','patients'));
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
        $patientinvest = Patientinvest::find($id);
        $patientinvest->user_id = $request->get('centre_id');
        $patientinvest->patient_id = $request->get('patient_id');
        $patientinvest->diabetes_value = $request->get('investigations_name');
        $patientinvest->diabetes_id = $request->get('diagnosis_id');
        $patientinvest->status = 1;
        $patientinvest->save();

      return redirect('/patientinvests')->with('success', 'Patient Investigation has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patientinvests = Patientinvest::find($id);
        $patientinvests->delete();

        return redirect('/patientinvests')->with('success', 'Patient Investigations has been deleted Successfully');
    }
}
