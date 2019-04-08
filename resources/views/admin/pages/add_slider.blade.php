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
            <a href="#">Add Slider</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>

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
                    <button type="button" class="close" data-dismiss="alert"                  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif

            <div class="box-content">
            <form class="form-horizontal" action="{{route('add.slider')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Slider Name </label>
                      <div class="controls">
                        <input type="text" class="span6 typeahead" name="slider_name">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Slider Description </label>
                      <div class="controls">
                        <input type="text" class="span6 typeahead" name="slider_description">
                      </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Slider Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="slider_image" id="fileInput" type="file">
                        </div>
                    </div>


                    <div class="control-group hidden-phone">
                         <label class="control-label" for="">Publication status</label>
                        <div class="controls">
                            <label class="checkbox inline">
                                <input type ="checkbox" name="publication_status" value="1">Check for publish
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Add Slider</button>
                      <button type="reset" class="btn">Cancel</button>
                    </div>
                  </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div><!--/row-->








@endsection
