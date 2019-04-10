<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add_cart(Request $request, $product_id){

        $Products =Product::where('product_id',$product_id)->first();

        return view('pages.add_to_cart',compact('$Products'));
    }
}
