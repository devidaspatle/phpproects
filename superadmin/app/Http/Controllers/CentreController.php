<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Centre;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centres = Centre::all();
        
        return view('centres.index', compact('centres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('centres.create', compact('centres'));
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
            'centre_name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
           
      ]);
      $centres = new Centre([
        'user_id' => $request->get('user_id'),
        'centre_name' => $request->get('centre_name'),
        'office_time'=> $request->get('office_time'),
        'office_open'=> $request->get('office_open'),
        'visit_days'=> $request->get('visit_days'),
        'contact_person' => $request->get('contact_person'),
        'mobile_number'=> $request->get('mobile_number'),
        'city'=> $request->get('city'),
        'state' => $request->get('state'),
        'pincode'=> $request->get('pincode'),
        'address'=> $request->get('address'),
        'username'=> $request->get('username'),
        'password'=> $request->get('password'),
        'is_active'=> 1
      ]);
       
       $centres->save();
      return redirect('/centres')->with('success', 'Centres has been added');
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
       
        $centre = Centre::find($id);

        return view('centres.edit', compact('centre'));
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
        $centre = Centre::find($id);
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

      return redirect('centres')->with('success', 'Centre has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centres = Centre::find($id);
        $centres->delete();

        return redirect('centres')->with('success', 'Centre has been deleted Successfully');
    }
}
