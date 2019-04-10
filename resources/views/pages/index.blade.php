@extends('layouts.master')
@section('content')

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                    @foreach($products as $product)
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
                                        @php $i = 1; @endphp
                                        @foreach($product->images as $image)
                                            @if ($i > 0)
                                        <img src="image/{{$image->image}}" alt="" />
                                            @endif
                                            @php $i--; @endphp
                                        @endforeach
                                            <h2>{{$product->product_price}} TK</h2>
											<p>{{$product->product_name}}</p>
											<a href="{{route('product.view',$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>{{$product->product_price}} TK</h2>
												<a href="{{route('product.view',$product->product_id)}}"><p>{{$product->product_name}}</p></a>
												<a href="{{route('product.view',$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>{{$product->brand->brand_name}}</a></li>
                                    <li><a href="{{route('product.view',$product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
									</ul>
								</div>
							</div>
                        </div>
                    @endforeach


					 </div><!--features_items-->

                    @php $brands = App\Brand::orderBy('Brand_id','desc')->where('publication_status',1)->paginate(5);  @endphp

                    <div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
                                @php $i=1; @endphp
                            @foreach($brands as $brand)
                            <li class="{{$i==1? 'active':''}}"><a href="{{route('product_by_brand', $brand->brand_id)}}#{{$brand->brand_id}}" data-toggle="tab">{{$brand->brand_name}}</a></li>
                            @php $i++; @endphp
                            @endforeach
							</ul>
                        </div>


         @php $allproducts=$products->random(4); @endphp

                        <div class="tab-content">

                            @php $i=1; @endphp
                            @foreach($allproducts as $product)
							<div class="tab-pane fade {{$i==1?'active in':''}}" id="{{$product->product_id}}" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                                                    @php $j = 1; @endphp
                                                    @foreach($product->images as $image)
                                                        @if ($j > 0)
                                                    <img src="image/{{$image->image}}" alt="" />
                                                        @endif
                                                        @php $j--; @endphp
                                                    @endforeach
												<h2>{{$product->product_price}}</h2>
												<p>{{$product->product_name}}</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>

										</div>
									</div>
								</div>


                            </div>
                            @endforeach

						</div>
                    </div><!--/category-tab-->



                    @include('partials.recommended_items')

				</div>
			</div>
		</div>
	</section>

@endsection
