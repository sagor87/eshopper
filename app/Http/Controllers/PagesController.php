<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use App\Slider;





class PagesController extends Controller
{
    public function index(){

        //$categorys = Category::get()->where('publication_status',1);
        //$brands = Brand::get()->where('publication_status',1);

        $products = Product::orderBy('product_id','desc')->where('publication_status',1)->paginate(9);
        //$sliders = Slider::get()->where('publication_status',1);


        return view('pages.index',compact('products'));

    }

    public function show_product_by_category($category_id){


        $products = Product::where('category_id', $category_id)->where('publication_status',1)->paginate(6);



        return view('pages.category_by_product',compact('products'));
    }


    public function show_product_by_brand($brand_id){


        $products = Product::where('brand_id', $brand_id)->where('publication_status',1)->paginate(6);

        return view('pages.brand_by_product',compact('products'));

    }


    public function product_view($product_id){


        $products = Product::get()->where('product_id', $product_id);

        return view('pages.product_view',compact('products','$product_id'));

    }
}
