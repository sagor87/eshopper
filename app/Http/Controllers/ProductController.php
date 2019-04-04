<?php namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\ProductImage;
use Image;
use DB;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categorys=Category::get()->where('publication_status', 1);
        $brands=Brand::get()->where('publication_status', 1);

        return view('admin.pages.add_product', compact('categorys', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
        'product_name'=> 'required',
        'category_id'=> 'required',
        'brand_id'=> 'required',
        'product_short_description'=> 'required',
        'product_long_description'=> 'required',
        'product_price'=> 'required|numeric',
        //'product_image'=> 'required',
        'product_size'=> 'required',
        'product_color'=> 'required'

        ]);

        $product=new Product;
        $product->product_name=$request->product_name;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->product_short_description=$request->product_short_description;
        $product->product_long_description=$request->product_long_description;
        $product->product_price=$request->product_price;
        //$product->product_image=$request->product_image;
        $product->product_size=$request->product_size;
        $product->product_color=$request->product_color;
        $product->publication_status=$request->publication_status;
        $product->save();

        if (count($request->product_image) > 0) {
            foreach ($request->product_image as $image) {
                //insert that image
                //$image = $request->file('product_image');
                 $img=str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                //$image_name = time() . '.'. $image->getClientOriginalExtension();
                $image_name=$img.time().'.'.$ext;
                $location = public_path('image/' .$image_name);
                Image::make($image)->save($location);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $image_name;
                $product_image->save();
            }
        }

        return redirect(route('all.product'))->with('successMsg', 'Product successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function all_product(Product $product) {

        $products=Product::get();
        //$phone = User::find(1)->phone;
        return view('admin.pages.all_product')->with('products', $products);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product) {
        //
    }


    public function delete_product($product_id){

        DB::table('products')
        ->where('product_id',$product_id)
        ->delete();

        return redirect(route('all.product'))->with('successMsg', 'Product successfully Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product) {
        //
    }


    public function inactive_product($product_id)
    {
        DB::table('products')
        ->where('product_id',$product_id)
        ->update(['publication_status'=>0]);

        return redirect(route('all.product'))->with('successMsg', 'Product successfully Inactive');

    }
    public function active_product($product_id)
    {
        DB::table('products')
        ->where('product_id',$product_id)
        ->update(['publication_status'=>1]);

        return redirect(route('all.product'))->with('successMsg', 'Product successfully active');

    }
}
