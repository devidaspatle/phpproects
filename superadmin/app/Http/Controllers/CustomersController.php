<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Validator,Redirect,Response,File;
use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('customers.create', compact('customers'));
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
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:15'],
           
      ]);
      $customers = new Customer([
        'project_id' => $request->get('project_id'),
        'name' => $request->get('name'),
        'mobile'=> $request->get('mobile'),
        'email'=> $request->get('email'),
        'address'=> $request->get('address'),
        'city' => $request->get('city'),
        'state'=> $request->get('state'),
        'pincode'=> $request->get('pincode'),
        'status'=> 1
      ]);
       
       $customers->save();
      return redirect('/customers')->with('success', 'Customer has been added');
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
       
        $customer = Customer::find($id);

        return view('customers.edit', compact('customer'));
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
        'mobile'=> 'integer',
      ]);
       
      $customer = Customer::find($id);
      $customer->name = $request->get('name');
      $customer->mobile = $request->get('mobile');
      $customer->email = $request->get('email');
      $customer->address = $request->get('address');
      $customer->city = $request->get('city');
      $customer->state = $request->get('state');
      $customer->pincode = $request->get('pincode');
      $customer->save();

      return redirect('/customers')->with('success', 'Customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer has been deleted Successfully');
    }
}
