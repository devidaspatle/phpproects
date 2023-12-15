<?php
namespace App\Http\Controllers;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Prescription;


class PrescriptionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescriptions = Prescription::all();
        
        return view('prescriptions.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('prescriptions.create', compact('prescriptions'));
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
 			'breakfast' => ['required', 'string', 'max:255'],
            'lunch' => ['required', 'string', 'max:255'],
            'dinner' => ['required', 'string', 'max:255'],
            'instruction' => ['required', 'string', 'max:255'],
            'noofb' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'patient_id' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'], 
      ]); 
      $prescriptions = new Prescription([
        'patient_id' => $request->get('patient_id'),
        'user_id' => $request->get('user_id'),
        'breakfast' => $request->get('breakfast'),
        'lunch' => $request->get('lunch'),
        'dinner' => $request->get('dinner'),
        'instruction' => $request->get('instruction'),
        'noofb' => $request->get('noofb'),
        'price' => $request->get('price'),
        'supplements_id' => $request->get('supplements_id'),
        'is_active'=> 1
      ]);
       
       $prescriptions->save();
      return redirect('prescriptions')->with('success', 'Centres has been added');
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
       
        $prescriptions = Prescription::find($id);

        return view('prescriptions.edit', compact('prescriptions'));
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
        'breakfast'=>'required',
      ]);
	    $prescription->patient_id = $request->get('patient_id');
		$prescription->user_id = $request->get('user_id');
		$prescription->breakfast = $request->get('breakfast');
		$prescription->lunch = $request->get('lunch');
		$prescription->dinner = $request->get('dinner');
		$prescription->instruction = $request->get('instruction');
		$prescription->noofb = $request->get('noofb');
		$prescription->price = $request->get('price');
		$prescription->supplements_id = $request->get('supplements_id');  
        $prescription->is_active = $request->get('is_active');
        $prescription->save();

      return redirect('/prescriptions')->with('success', 'Prescription has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prescriptions = Prescription::find($id);
        $prescriptions->delete();

        return redirect('/prescriptions')->with('success', 'Prescriptions has been deleted Successfully');
    }
}
