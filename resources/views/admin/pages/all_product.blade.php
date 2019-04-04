@extends('admin.layouts.master')
@section('content')


			<ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">All Category</a></li>
                </ul>

                @if (session('successMsg'))
                <div class="alert alert-success" role="alert">
                        <strong>Well done! </strong>{{session('successMsg')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                @endif

                <div class="row-fluid sortable">
                    <div class="box span12">
                        <div class="box-header" data-original-title>
                            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                              <thead>
                                  <tr>
                                      <th>product ID</th>
                                      <th>product Name</th>
                                      <th>product Description</th>
                                      <th>product Image</th>
                                      <th>product Price</th>
                                      <th>Category Name</th>
                                      <th>Brand Name</th>

                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                            @foreach($products as $product)
                              <tbody>
                                <tr>
                                <td>{{$product->product_id}}</td>
                                <td class="center">{{$product->product_name}}</td>
                                <td class="center">{{$product->product_short_description}}</td>


                                <td><img src="{{URL::to('image/$product->images->image')}}"alt="" style="height=80px; weight=80px;"></td>

                                <td class="center">{{$product->product_price}}</td>

                                <td class="center">{{$product->category->category_name}}</td>

                                <td class="center">{{$product->brand->brand_name}}</td>

                                <td class="center">
                                        @if($product->publication_status==1)
                                            <span class="label label-success">Active</span>
                                        @else
                                            <span class="label label-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="center">

                                    @if($product->publication_status==1)
                                    <a class="btn btn-danger" href="{{route('inactive_product',$product->product_id)}}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-success" href="{{route('active_product',$product->product_id)}}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif

                                        <a class="btn btn-info" href="{{route('edit_product',$product->product_id)}}">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="{{route('delete_product',$product->product_id)}}" id="delete">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>

                              </tbody>
                        @endforeach
                          </table>

                        </div>
                    </div><!--/span-->

                </div><!--/row-->


@endsection
