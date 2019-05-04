<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function add_cart(Request $request){
        $qty=$request->qty;
        $product_id=$request->product_id;
        $Products =Product::where('product_id',$product_id)->first();

        $data['qty']=$qty;
        $data['id']=$Products->product_id;
        $data['name']=$Products->product_name;
        $data['price']=$Products->product_price;
        $data['option']['image']=$Products->product_image;
        //$data['description']['description']=$Products->product_short_description;


        Cart::add($data);

        return view('pages.add_to_cart',compact('$Products'));
    }

    public function show_cart(){
        return view('pages.add_to_cart',compact('$Products'));
    }
    public function delete_cart_row($rowId){
        Cart::update($rowId,0);
        return view('pages.add_to_cart');
    }
    public function update_cart_row(Request $request){
        
        $qty=$request->qty;
        $rowId=$request->rowId;
        Cart::update($rowId,$qty);
       
        return view('pages.add_to_cart');
    }
}
