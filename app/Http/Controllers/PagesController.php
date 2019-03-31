<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;

class PagesController extends Controller
{
    public function index(){

        $categorys = Category::get()->where('publication_status',1);
        $brands = Brand::get()->where('publication_status',1);

        return view('pages.index',compact('categorys','brands'));

    }
}
