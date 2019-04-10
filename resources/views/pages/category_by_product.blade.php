@include('partials.header')
@include('partials.sidebar')


<div class="col-sm-9 padding-right">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        @foreach($products as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        @php $i = 1; @endphp
                        @foreach($product->images as $image)
                        @if ($i > 0)
                        <img src="{{asset('image/'.$image->image)}}" alt="" />
                        @endif
                        @php $i--; @endphp
                        @endforeach
                        <h2>{{$product->product_price}} TK</h2>
                        <p>{{$product->product_name}}</p>
                        <a href="{{route('product.view',$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                            cart</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>{{$product->product_price}} TK</h2>
                            <a href="{{route('product.view',$product->product_id)}}"><p>{{$product->product_name}}</p></a>
                            <a href="{{route('product.view',$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                cart</a>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="{{route('product.view',$product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    <!--features_items-->
    {{ $products->links()}}

    @include('partials.recommended_items')



    </div>
</div>
</div>
</section>


@include('partials.footer')
