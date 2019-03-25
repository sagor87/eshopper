<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function login(){

        return view('admin.pages.login');
    }
    public function index(){

        return view('admin.pages.index');
    }
}
