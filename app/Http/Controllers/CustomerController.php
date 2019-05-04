<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
USE Session;
use DB;
use App\http\Requests;

session_start();


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request,[
            'customer_email' => 'required',
            'password' => 'required'
        ]);
       $customer_email = $request->customer_email;
       $password = md5($request->password);
        $result=DB::table('customers')
                    ->where('customer_email',$customer_email)
                    ->where('password',$password)
                    ->first();
        if($result){
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_id',$result->id);
            return redirect(route('home'))->with('successMsg', 'Login successfully');
        }else{
            return redirect(route('login_check'))->with('dangerMsg', 'email or Password Invalid');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customer_registration(Request $request)
    {
        $this->validate($request,[
            'customer_name' => 'required',
            'customer_email' => 'required',
            'mobile_number' => 'required',
            'password' => 'required'
        ]);

        $customer = new Customer;
        $customer->customer_name = $request->customer_name;
        $customer->customer_email = $request->customer_email;
        $customer->mobile_number = $request->mobile_number;
        $customer->password = md5($request->password);

        $customer->save();
        $customer_id=$customer->id;

        Session::put('admin_name',$request->customer_name);
        Session::put('customer_id',$customer_id);
        return redirect(route('checkout'))->with('successMsg', 'Registration successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        session::flush();
        return redirect(route('home'))->with('successMsg', 'Logout successfully');
    }
}
