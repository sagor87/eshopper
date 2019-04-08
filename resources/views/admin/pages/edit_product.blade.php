@extends('admin.layouts.master')
@section('content')


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Edit Product</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>

            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        @if ($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <strong>Oh Snap! </strong>{{$error}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
        @endif

        <div class="box-content">
            <form class="form-horizontal" action="{{route('update_product' ,$products->product_id)}}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_name" value="{{$products->product_name}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Product Category</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option value="">Select Category</option>
                                @foreach($categorys as $category)

                                <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Brand Name</label>
                        <div class="controls">
                            <select id="selectError3" name="brand_id">
                                <option value="">Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Produch Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" rows="3" >
                                {{$products->product_short_description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" rows="3">
                                {{$products->product_long_description}}
                            </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Price </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_price" value="{{$products->product_price}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file">
                            <input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file">
                            <input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file">
                            <input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file">
                            <input class="input-file uniform_on" name="product_image[]" id="fileInput" type="file">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Size </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_size" value="{{$products->product_size}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Color </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="product_color" value="{{$products->product_color}}">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="">Publication status</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type="checkbox" name="publication_status" value="1">Check for publish
                            </label>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->








@endsection
