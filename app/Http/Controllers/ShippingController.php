<?php

namespace App\Http\Controllers;

use App\Shipping;
use Illuminate\Http\Request;
use Session;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function confirm_shipping(Request $request)
    {
        $this->validate($request,[
            'shipping_email' => 'required',
            'shipping_first_name' => 'required',
            'shipping_last_name' => 'required',
            'shipping_address' => 'required',
            'shipping_mobile_number' => 'required',
            'shipping_city' => 'required'
        ]);

        $shipping = new Shipping;
        $shipping->shipping_email = $request->shipping_email;
        $shipping->shipping_first_name = $request->shipping_first_name;
        $shipping->shipping_last_name = $request->shipping_last_name;
        $shipping->shipping_address = $request->shipping_address;
        $shipping->shipping_mobile_number = $request->shipping_mobile_number;
        $shipping->shipping_city = $request->shipping_city;

        $shipping->save();
        $shipping_id=$shipping->id;
        Session::put('shipping_id',$shipping_id);
        return redirect(route('payment'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function payment(Shipping $shipping)
    {
        return view('pages.payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipping $shipping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipping $shipping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipping $shipping)
    {
        //
    }
}
