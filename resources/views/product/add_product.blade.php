@extends('layouts.master')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           
            <ol class="breadcrumb" align="center">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">add Product</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- right column -->
            <div class="col-md-12" style="margin-left: -28%;">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="row" style="width: 127%;">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">ADD Product</h3>
                        </div>
                        <form class="form-horizontal" action="{{ route('productStore') }}" method="post" enctype="multipart/form-data" data-parsley-validat >
                            <div class="box-body">
                                {{ csrf_field() }}
                               
                             <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                                    <label for="product_name" class="col-sm-4 control-label">Product Name</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                               placeholder="Enter Product Name">
                                        @if ($errors->has('product_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                            <div class="form-group{{ $errors->has('procuct_type') ? ' has-error' : '' }}">
                            <label for="procuct_type" class="col-sm-4 control-label">Procuct Type</label>
                                    <div class="col-sm-6">
                                    Male  <input type="radio"  id="procuct_type" value="Male" name="procuct_type" checked="">
                                       Female <input type="radio"  id="procuct_type" value="Female" name="procuct_type">
                                    
                                    @if ($errors->has('procuct_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('procuct_type') }}</strong>
                                         </span>
                                    @endif
                                    </div>
                            </div>


                                 <div class="form-group{{ $errors->has('procuct_size') ? ' has-error' : '' }}">
                            <label for="procuct_size " class="col-sm-4 control-label">Product Size</label>
                            <div class="col-sm-6"> 
                                       <select  multiple data-live-search="true" name="procuct_size[]" class="form-control selectpicker" value="" >
                                        <option value="10">10 Pt</option>
                                        <option value="20">20 Pt</option>
                                        <option value="30">30 Pt</option>
                                        <option value="40">40 Pt</option>
                                       </select>
                                        @if ($errors->has('procuct_size'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('procuct_size') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                    <label for="quantity" class="col-sm-4 control-label">Quantity</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" id="quantity" name="quantity"
                                               placeholder="Enter Product Quantity">
                                        @if ($errors->has('quantity'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                

                            <div class="form-group{{ $errors->has('procuct_color') ? ' has-error' : '' }}">
                            <label for="procuct_color" class="col-sm-4 control-label">Procuct Color</label>
                                    <div class="col-sm-6">
                                    Red  <input type="radio"  id="procuct_color" value="Red" name="procuct_color" checked="">
                                       Blue <input type="radio"  id="procuct_color" value="Blue" name="procuct_color">
                                     Green <input type="radio"  id="procuct_color" value="Green" name="procuct_color">
                                    @if ($errors->has('procuct_color'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('procuct_color') }}</strong>
                                         </span>
                                    @endif
                                    </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    </script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 230px !important;
        }
    </style>
 
 <!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>

@endsection