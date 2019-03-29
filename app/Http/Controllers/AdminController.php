<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;
use DB;
use App\http\Requests;

USE Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->validate($request,[
            'admin_email' => 'required',
            'admin_password' => 'required'
        ]);
       $admin_email = $request->admin_email;
       $admin_password = md5($request->admin_password);
        $result=DB::table('admins')
                    ->where('admin_email',$admin_email)
                    ->where('admin_password',$admin_password)
                    ->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return redirect(route('admin.home'))->with('successMsg', 'Login successfully');;
        }else{
            return redirect(route('admin.login'))->with('Msg', 'email or Password Invalid');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        session::flush();
        return redirect(route('admin.login'))->with('successMsg', 'Logout successfully');;
    }
}
