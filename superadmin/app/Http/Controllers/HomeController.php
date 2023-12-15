<?php

namespace App\Http\Controllers;

use Auth;

use Hash;

use App\Newsletter;

use App\Patient;

use App\Formula;

use App\Product;

use App\Appointment;



use Illuminate\Http\Request;

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response



     */

    public function index()

    {

        $newsletters = Newsletter::all();

        $patients = Patient::all();

        $appointments = Appointment::all();

        $count = Newsletter::count();

        $patientcount = Patient::count();

        $FormulaCount = Formula::count();

        $productsCount = Product::count();

        $appointmentCount = Appointment::count();

        return view('home', compact('newsletters','count','patientcount','FormulaCount','productsCount','patients','appointmentCount','appointments'));

    }

    public function showChangePasswordForm(){

        return view('auth.changepassword');

    }

    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {

            // The passwords matches

            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");

        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){

            //Current password and new password are same

            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");

        }

        $validatedData = $request->validate([

            'current-password' => 'required',

            'new-password' => 'required|string|min:6|confirmed',

        ]);

        //Change Password

        $user = Auth::user();

        $user->password = bcrypt($request->get('new-password'));

        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }



     public function showSettingsForm(){

         //$companydetails = Companydetails::all();

     return view('settings');

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function editSetting(Request $request)

    {

         $companydetail = Companydetail::all();



        return view('settings', compact('companydetail'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request)

    {

        $request->validate([

        'name'=>'required',

        'email'=> 'required'

      ]);



      $newsletter = Newsletter::find($id);

      $newsletter->name = $request->get('name');

      $newsletter->email = $request->get('email');

      $newsletter->save();



      return redirect('/settings')->with('success', 'Newsletters has been updated');

    }



}