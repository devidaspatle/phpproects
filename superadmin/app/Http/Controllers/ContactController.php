<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
        'name'=>'required',
        'designation'=> 'required',
        'loan_incharge' => 'required',
        'phoneno' => 'required'
      ]);
      $contacts = new Contact([
        'name' => $request->get('name'),
        'designation'=> $request->get('designation'),
        'loan_incharge'=> $request->get('loan_incharge'),
        'phoneno' => $request->get('phoneno'),
        'status' => 1
        ]);
      $contacts->save();
      return redirect('/contacts')->with('success', 'Contact has been added');
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
        $contact = Contact::find($id);

        return view('contacts.edit', compact('contact'));
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
        'designation'=> 'required',
        'loan_incharge' => 'required',
        'phoneno' => 'required'
      ]);

      $contact = Contact::find($id);
      $contact->name = $request->get('name');
      $contact->designation = $request->get('designation');
      $contact->loan_incharge = $request->get('loan_incharge');
      $contact->phoneno = $request->get('phoneno');
      $contact->save();

      return redirect('/contacts')->with('success', 'Contact has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contact has been deleted Successfully');
    }
}
