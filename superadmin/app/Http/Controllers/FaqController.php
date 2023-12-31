<?php

namespace App\Http\Controllers;
use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
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
        'title'=>'required',
        'description'=>'required',
      ]);
        
      $faqs = new Faq([
        'title' => $request->get('title'),
        'description' => $request->get('description'),
        'status'=> 1
      ]);
      $faqs->save();
      return redirect('/faqs')->with('success', 'Frequently Asked Questions has been added');
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
       $faqs = Faq::find($id);

        return view('faqs.edit', compact('faqs'));
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
        'title'=>'required',
        'description'=>'required',
      ]);
     
      $faq = Faq::find($id);
      $faq->title = $request->get('title');
      $faq->description = $request->get('description');
      $faq->status = 1;
      $faq->save();

      return redirect('/faqs')->with('success', 'Frequently Asked Questions has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/faqs')->with('success', 'Frequently Asked Questions has been deleted Successfully');
    }
}
