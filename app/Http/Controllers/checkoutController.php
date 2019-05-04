<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function login_check(){

    return view('pages.login');
    } 
    public function checkout(){

    return view('pages.checkout');
    } 
}
