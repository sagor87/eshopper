<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;
use DB;
Use File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.add_slider');
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
        $this->validate($request, [
            'slider_name'=> 'required',
            'slider_image'=> 'nullable|image',
            'slider_description'=> 'required'

            ]);


            $slider = new Slider;
            $slider->slider_name=$request->slider_name;
            $slider->slider_description=$request->slider_description;
            $slider->publication_status=$request->publication_status;

            if (count($request->slider_image) > 0) {
                    $image = $request->file('slider_image');
                    $img=str_random(20);
                    $ext = strtolower($image->getClientOriginalExtension());
                    $image_name=$img.time().'.'.$ext;
                    $location = public_path('image/slider/'.$image_name);
                    Image::make($image)->save($location);

                    $slider->slider_image=$image_name;
            }

            $slider->save();
            return redirect(route('all.slider'))->with('successMsg', 'Slider successfully Added');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function all_slider(slider $slider)
    {
        $sliders=Slider::orderBy('id','desc')->get();


        return view('admin.pages.all_slider',compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }



    public function delete_slider($id){

        $slider=Slider::find($id);

        if (!is_null($slider)) {

            if (File::exists('image/slider/'.$slider->slider_image)) {
                File::delete('image/slider/'.$slider->slider_image);
            }

            $slider->delete();
        }

        return redirect(route('all.slider'))->with('successMsg', 'Slider successfully Deleted');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }


    public function inactive_slider($id)
    {
        DB::table('sliders')
        ->where('id',$id)
        ->update(['publication_status'=>0]);

        return redirect(route('all.slider'))->with('successMsg', 'Slider successfully Inactive');

    }
    public function active_slider($id)
    {
        DB::table('sliders')
        ->where('id',$id)
        ->update(['publication_status'=>1]);

        return redirect(route('all.slider'))->with('successMsg', 'slider successfully active');

    }
}
