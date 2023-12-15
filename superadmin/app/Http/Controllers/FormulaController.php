<?php
namespace App\Http\Controllers;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Formula;

class FormulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulas = Formula::all();
        
        return view('formulas.index', compact('formulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('formulas.create', compact('formulas'));
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
 			'formulas_name' => ['required', 'string', 'max:255'],
            'formulas_rate' => ['required', 'string', 'max:255'],
           
      ]);
      $formulas = new Formula([
        'formulas_id' => $request->get('formulas_id'),
        'formulas_name' => $request->get('formulas_name'),
        'formulas_rate' => $request->get('formulas_rate'),
        'is_active'=> 1
      ]);
       
       $formulas->save();
      return redirect('/formulas')->with('success', 'Centres has been added');
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
       
        $formula = Formula::find($id);

        return view('formulas.edit', compact('formula'));
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
        'formulas_name'=>'required',
      ]);
        $formula = Formula::find($id);
        $formula->formulas_name = $request->get('formulas_name');
        $formula->formulas_rate = $request->get('formulas_rate');
        $formula->is_active = 1;
        $formula->save();

      return redirect('/formulas')->with('success', 'Formula has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulas = Formula::find($id);
        $formulas->delete();

        return redirect('/formulas')->with('success', 'Formulas has been deleted Successfully');
    }
}
