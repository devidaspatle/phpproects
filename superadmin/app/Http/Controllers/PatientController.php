<?php
namespace App\Http\Controllers;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Patient;
use App\Centre;

class PatientController extends Controller
{
    /* * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        $centres = Centre::all();
        return view('patients.index', compact('patients','centres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $centres = Centre::all(['id', 'centre_name']);
        return view('patients.create', compact('centres'));
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
            'centre_id' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:15'],
           
      ]);
      $patients = new Patient([
        'patient_id' => $request->get('patient_id'),
        'user_id' => $request->get('user_id'),
        'centre_id'=> $request->get('centre_id'),
        'password'=> $request->get('password'),
        'patient_name'=> $request->get('patient_name'),
        'mobile_number' => $request->get('mobile_number'),
        'email'=> $request->get('email'),
        'weight' => $request->get('weight'),
        'height'=> $request->get('height'),
        'bmi'=> $request->get('bmi'),
        'blood_group'=> $request->get('blood_group'),
        'allergy' => $request->get('allergy'),
        'appropriate' => $request->get('appropriate'),
        'date_of_birth' => $request->get('date_of_birth'),
        'gender' => $request->get('gender'),
        'marital_status' => $request->get('marital_status'),
        'district' => $request->get('district'),
        'consaltancy'=> $request->get('consaltancy'),
        'mode_payment'=> $request->get('mode_payment'),
        'city'=> $request->get('city'),
        'state' => $request->get('state'),
        'country' => $request->get('country'),
        'pincode'=> $request->get('pincode'),
        'address'=> $request->get('address'),
        'is_active'=> 1
      ]);
       
       $patients->save();
      return redirect('/patients')->with('success', 'Patients has been added');
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
       
        $patients = Patient::find($id);
        $centres = Centre::all(['id', 'centre_name']);
        return view('patients.edit', compact('patient','centres')); 
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
        'patient_name'=>'required',
        'mobile_number'=> 'integer',
      ]);
        $patient = Patient::find($id);
		$patient->user_id = $request->get('user_id');
		$patient->centre_id = $request->get('centre_id');
		$patient->password = $request->get('password');
		$patient->patient_name = $request->get('patient_name');
		$patient->mobile_number = $request->get('mobile_number');
		$patient->email = $request->get('email');
		$patient->weight = $request->get('weight');
		$patient->height = $request->get('height');
		$patient->bmi = $request->get('bmi');
		$patient->blood_group = $request->get('blood_group');
		$patient->allergy = $request->get('allergy');
		$patient->appropriate = $request->get('appropriate');
		$patient->date_of_birth = $request->get('date_of_birth');
		$patient->gender = $request->get('gender');
		$patient->marital_status = $request->get('marital_status');
		$patient->district = $request->get('district');
		$patient->consaltancy = $request->get('consaltancy');
		$patient->mode_payment = $request->get('mode_payment');
		$patient->city = $request->get('city');
		$patient->state = $request->get('state');
		$patient->country = $request->get('country');
		$patient->pincode = $request->get('pincode');
		$patient->address = $request->get('address');
        $patient->save();

      return redirect('/patients')->with('success', 'Patient has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $patients->delete();

        return redirect('/patients')->with('success', 'Patient has been deleted Successfully');
    }
}
