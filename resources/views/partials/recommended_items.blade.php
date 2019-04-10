@php $products =App\Product::orderBy('product_id','desc')->get()->where('publication_status',1);
    $allproducts=$products->random(15);
    $allproduct=$products->random(6); @endphp


    <div class="recommended_items">
        <!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                    @php $j = 1; @endphp

                @foreach($allproducts as $product)

                @if($j==1)
                <div class="item active">
                    @endif

                    @if($j==4||$j==7||$j==10||$j==13)
                    <div class="item">
                        @endif
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        @php $i = 1; @endphp
                                        @foreach($product->images as $image)
                                        @if ($i > 0)
                                        <img src="{{asset('image/'.$image->image)}}" alt="" style="height:150px; weight:150px;"/>
                                        @endif
                                        @php $i--; @endphp
                                        @endforeach
                                        <h2>{{$product->product_price}}</h2>
                                        <p>{{$product->product_name}}</p>
                                        <a href="{{route('product.view',$product->product_id)}}" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        @php $j++; @endphp
                        @if($j==1||$j==4||$j==7||$j==10||$j==13)
                    </div>
                    @endif

                    @endforeach

                </div>


                </div>

                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/recommended_items-->
