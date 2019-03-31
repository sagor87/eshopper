<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use DB;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.add_brand');

    }

    public function all_brand()
    {
        $brands = Brand::get();
        return view('admin.pages.all_brand',compact('brands'));

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
        $this->validate($request,[
            'brand_name' => 'required',
            'brand_description' => 'required'
        ]);

        $brand = new Brand;
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;


        $brand->save();

        return redirect(route('all.brand'))->with('successMsg', 'Brand successfully Added');
    }

    public function inactive_brand($brand_id)
    {
        DB::table('brands')
        ->where('brand_id',$brand_id)
        ->update(['publication_status'=>0]);

        return redirect(route('all.brand'))->with('successMsg', 'Brand successfully Inactive');

    }
    public function active_brand($brand_id)
    {
        DB::table('brands')
        ->where('brand_id',$brand_id)
        ->update(['publication_status'=>1]);

        return redirect(route('all.brand'))->with('successMsg', 'Brand successfully active');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit_brand($brand_id)
    {

     $brands= DB::table('brands')
        ->where('brand_id',$brand_id)
        ->first();

        return view('admin.pages.edit_brand',compact('brands','$brand_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update_brand(Request $request ,$brand_id)
    {
        $this->validate($request,[
            'brand_name'=>'required',
            'brand_description'=>'required'
        ]);


        $brand = array();
        $brand['brand_name']=$request->brand_name;
        $brand['brand_description']=$request->brand_description;

        DB::table('brands')
        ->where('brand_id',$brand_id)
        ->update($brand);

        return redirect(route('all.brand'))->with('successMsg', 'Brand successfully update');

    }

    public function delete_brand($brand_id){

        DB::table('brands')
        ->where('brand_id',$brand_id)
        ->delete();
        return redirect(route('all.brand'))->with('successMsg', 'Brand successfully Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
