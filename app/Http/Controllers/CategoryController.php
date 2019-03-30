<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.add_category');

    }
    public function all_category()
    {
        $categorys = Category::get();
        return view('admin.pages.all_category',compact('categorys'));

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
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;


        $category->save();

        return redirect(route('all.category'))->with('successMsg', 'Category successfully Added');
    }

    public function inactive_category($category_id)
    {
        DB::table('categories')
        ->where('category_id',$category_id)
        ->update(['publication_status'=>0]);

        return redirect(route('all.category'))->with('successMsg', 'Category successfully Inactive');

    }
    public function active_category($category_id)
    {
        DB::table('categories')
        ->where('category_id',$category_id)
        ->update(['publication_status'=>1]);

        return redirect(route('all.category'))->with('successMsg', 'Category successfully active');

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
    public function edit_category($category_id)
    {
     $categorys= DB::table('categories')
        ->where('category_id',$category_id)
        ->first();

        return view('admin.pages.edit_category',compact('categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update_category(Request $request, Category $category_id)
    {
        $this->validate($request,[
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $category = array();
        $category['category_name'] = $request->category_name;
        $category['category_description'] = $request->category_description;

        DB::table('categories')
        ->where('category_id',$category_id)
        ->update($category);

        return redirect(route('all.category'))->with('successMsg', 'Category successfully update');
    }

    public function delete_category($category_id){

        DB::table('categories')
        ->where('category_id',$category_id)
        ->delete();
        return redirect(route('all.category'))->with('successMsg', 'Category successfully Deleted');
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
