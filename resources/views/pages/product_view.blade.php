@include('partials.header')
@include('partials.sidebar')


<div class="col-sm-9 padding-right">
    <div class="product-details">
        <!--product-details-->
        @foreach($products as $product)
        <div class="col-sm-5">
            <div class="view-product">

                @php $i = 1; @endphp
                @foreach($product->images as $image)
                @if ($i > 0)
                <img src="{{asset('image/'.$image->image)}}" alt="" />
                @endif
                @php $i--; @endphp
                @endforeach
                <h3>ZOOM</h3>
            </div>

            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">



                    @php $i = 1; @endphp
                    @foreach($product->images as $image)

                    @if($i==1) <div class="item active"> @endif
                        @if($i==4||$i==7) <div class="item"> @endif


                            <a href=""><img src="{{asset('image/'.$image->image)}}" alt=""
                                    style="height:80px; weight:80px;"></a>

                                    @php $i++; @endphp

                            @if($i==1)
                        </div>
                        @endif
                        @if($i==4|| $i==7)
                    </div>
                    @endif


                    @endforeach


                </div>

            </div>

            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="{{asset('images/product-details/new.jpg')}}" class="newarrival" alt="" />
        <h2><b>Product Name:</b> {{$product->product_name}}</h2>
            <p><b>Color:</b> {{$product->product_color}}</p>
            <img src="images/product-details/rating.png" alt="" />
            <span>
                <span>{{$product->product_price}} TK</span>
                <form action="{{route('add.cart',$product->product_id)}}" method="post">
                    {{ csrf_field() }}
                    <label>Quantity:</label>
                    <input type="text" name="qty" value="1" />
                <input type="hidden" name="product_id" value="{{$product->product_id}}">
                  <button type="submit" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button>
            </form>
            </span>
            <p><b>Availability:</b> In Stock</p>
            <p><b>Condition:</b> New</p>
            <p><b>Brand:</b> {{$product->brand->brand_name}}</p>
            <p><b>Category:</b> {{$product->category->category_name}}</p>
            <p><b>Size:</b> {{$product->product_size}}</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
</div>
<!--/product-details-->
@endforeach

<div class="category-tab shop-details-tab">
    <!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li><a href="#details" data-toggle="tab">Details</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
            <li><a href="#tag" data-toggle="tab">Tag</a></li>
            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade" id="details">
            <div class="col-sm-3">
            <h3>{{$product->product_short_description}}</h3>
            <p>{{$product->product_long_description}}</p>

            </div>
        </div>

        <div class="tab-pane fade" id="companyprofile">
            <div class="col-sm-3">
                    <h3>{{$product->brand->brand_name}}</h3>
                    <p>{{$product->brand->brand_description}}</p>
            </div>

        </div>

        <div class="tab-pane fade" id="tag">
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/home/gallery1.jpg" alt="" />
                            <h2>$56</h2>
                            <p>Easy Polo Black Edition</p>
                            <button type="button" class="btn btn-default add-to-cart"><i
                                    class="fa fa-shopping-cart"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active in" id="reviews">
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p><b>Write Your Review</b></p>

                <form action="#">
                    <span>
                        <input type="text" placeholder="Your Name" />
                        <input type="email" placeholder="Email Address" />
                    </span>
                    <textarea name=""></textarea>
                    <b>Rating: </b> <img src="{{asset('images/product-details/rating.png')}}" alt="" />
                    <button type="button" class="btn btn-default pull-right">
                        Submit
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
<!--/category-tab-->


@include('partials.recommended_items')
</div>
</div>
</div>
</section>
@include('partials.footer')
