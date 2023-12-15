<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Store;
use App\Exports\ListExport;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        $stores = \DB::table('stores')->paginate(10);
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
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
        'location_name'=>'required',
        'name'=>'required',
        'email'=>'required',
        'address'=>'required',
        'contact'=>'required',
        'workinghour'=>'required',
        'latitude' => 'required',
        'longitude' => 'required'
      ]);
      $store = new Store([
        'location_name' => $request->get('location_name'),
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'address'=> $request->get('address'),
        'contact' => $request->get('contact'),
        'workinghour'=> $request->get('workinghour'),
        'socialmedia1'=> $request->get('socialmedia1'),
        'socialmedia2'=> $request->get('socialmedia2'),
        'socialmedia3'=> $request->get('socialmedia3'),
        'latitude'=> $request->get('latitude'),
        'longitude'=> $request->get('longitude'),
        'status'=> 1
      ]);
      $store->save();
      return redirect('/stores')->with('success', 'Store has been added');
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
        $store = Store::find($id);

        return view('stores.edit', compact('store'));
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
        'name'=>'required',
        'email'=> 'required',
        'address' => 'required',
        'contact' => 'required',
        'workinghour' => 'required',
        'latitude' => 'required',
        'longitude' => 'required'
      ]);
      $store = Store::find($id);
      $store->name = $request->get('name');
      $store->email = $request->get('email');
      $store->address = $request->get('address');
      $store->contact = $request->get('contact');
      $store->workinghour = $request->get('workinghour');
      $store->latitude = $request->get('latitude');
      $store->longitude = $request->get('longitude');
      $store->socialmedia1 = $request->get('socialmedia1');
      $store->socialmedia2 = $request->get('socialmedia2');
      $store->socialmedia3 = $request->get('socialmedia3');
      $store->save();

      return redirect('/stores')->with('success', 'Store has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();

        return redirect('/stores')->with('success', 'Store has been deleted Successfully');
    }

    public function exportExcel()
      {
        return Excel::download(new ListExport, 'list.xlsx');
      }
      /**
       * Export to csv
       */
    public function exportCSV()
      {
        return Excel::download(new ListExport, 'list.csv');
      }
}
