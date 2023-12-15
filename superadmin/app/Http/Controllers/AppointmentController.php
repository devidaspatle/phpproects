<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        $appointments = \DB::table('appointments')->paginate(20);
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('appointments.create', compact('appointments'));
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
            'name' =>  ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'patient_date' => ['required', 'string', 'max:255'],
           
      ]);
      $centres = new Appointment([
        'centre_id' => $request->get('centre_id'),
        'patient_id' => $request->get('patient_id'),
        'name'=> $request->get('name'),
        'gender'=> $request->get('gender'),
        'age'=> $request->get('age'),
        'mobile_number'=> $request->get('mobile_number'),
        'patient_date'=> $request->get('patient_date'),
        'comments' => $request->get('comments'),
       
      ]);
       
       $appointments->save();
      return redirect('/appointments')->with('success', 'Appointment has been added');
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
       
        $appointment = Appointment::find($id);

        return view('appointments.edit', compact('appointment'));
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
        'centre_name'=>'required',
        'mobile_number'=> 'required',
      ]);
        $centre = Appointment::find($id);
        $centre->centre_name = $request->get('centre_name');
        $centre->office_time = $request->get('office_time');
        $centre->office_open = $request->get('office_open');
        $centre->visit_days = $request->get('visit_days');
        $centre->contact_person = $request->get('contact_person');
        $centre->mobile_number = $request->get('mobile_number');
        $centre->city = $request->get('city');
        $centre->state = $request->get('state');
        $centre->pincode = $request->get('pincode');
        $centre->address = $request->get('address');
        $centre->username = $request->get('username');
        $centre->password = $request->get('password');
        $centre->is_active = 1;
        $centre->save();

      return redirect('appointments')->with('success', 'Appointment has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointments = Appointment::find($id);
        $appointments->delete();

        return redirect('appointments')->with('success', 'Appointment has been deleted Successfully');
    }
}
