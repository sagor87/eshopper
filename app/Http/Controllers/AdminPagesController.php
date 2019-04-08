<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE Session;

class AdminPagesController extends Controller
{
    public function login(){

        return view('admin.pages.login');
    }

    public function index(){
        $this->AdminAuthCheck();
        return view('admin.pages.index');
    }

    public function AdminAuthCheck(){

       $admin_id = Session::get('admin_id');

       if($admin_id){
           return;
       }else{
            return redirect(route('admin.login'))->send();
       }
    }


}


