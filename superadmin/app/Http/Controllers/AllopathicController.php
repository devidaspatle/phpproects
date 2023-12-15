<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Patient;
use App\Centre;
use App\Allopathic;

class AllopathicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allopathics = Allopathic::all();
        $patients = Patient::all();
        $centres = Centre::all();
        return view('allopathics.index', compact('allopathics','centres','patients'));
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
        return view('allopathics.create', compact('allopathics','centres','patients'));
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
            'generic_name' => ['required', 'string', 'max:255'],
            'brand_name' => ['required', 'string', 'max:255'],
            'doses' => ['required', 'string', 'max:255'],
           
      ]);
      $allopathics = new Allopathic([
        'centre_id' => $request->get('centre_id'),
        'patient_id' => $request->get('patient_id'),
        'brand_name'=> $request->get('brand_name'),
        'generic_name'=> $request->get('generic_name'),
        'doses'=> $request->get('doses'),
        'status'=> 1
      ]);
       
       $allopathics->save();
      return redirect('/allopathics')->with('success', 'Centres has been added');
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
       
        $allopathic = Allopathic::find($id);
        $patients = Patient::all();
        $centres = Centre::all();
        return view('allopathics.edit', compact('allopathic','centres','patients'));
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
       
      return redirect('/allopathics')->with('success', 'Allopathic has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allopathics = Allopathic::find($id);
        $allopathics->delete();

        return redirect('/allopathics')->with('success', 'Allopathic has been deleted Successfully');
    }
}
