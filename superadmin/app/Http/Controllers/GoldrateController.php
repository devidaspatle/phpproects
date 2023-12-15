<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goldrate;

class GoldrateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goldrates = Goldrate::all();

        return view('goldrates.index', compact('goldrates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goldrates.create');
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
        'gold_rate'=>'required',
        'carat'=>'required'
      ]);
      $goldrate = new Goldrate([
        'gold_rate' => $request->get('gold_rate'),
        'carat' => $request->get('carat'),
        'status'=> 1
      ]);
      $goldrate->save();
      return redirect('/goldrates')->with('success', 'Goldrate has been added');
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
         $goldrate = Goldrate::find($id);

        return view('goldrates.edit', compact('goldrate'));
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
        'gold_rate'=>'required',
        'carat'=>'required'
      ]);

      $goldrate = Goldrate::find($id);
      $goldrate->carat = $request->get('carat');
      $goldrate->gold_rate = $request->get('gold_rate');
      $goldrate->save();
    return redirect('/goldrates')->with('success', 'Gold Rate has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goldrate = Goldrate::find($id);
        $goldrate->delete();

        return redirect('/goldrates')->with('success', 'Goldrate has been deleted Successfully');
    }
}
