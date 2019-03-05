@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    {!!Form::model($product,['route'=>['products.update',$product->id], 'method'=>'PUT', 'id' => 'submit_product']) !!}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Product Name</span>
                        </div>
                        <input type="text" name="product_name" class="form-control" value="{{$product->name}}">
                        
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Quantity</span>
                        </div>
                        <input type="text" name="quantity" class="form-control"value="{{$product->quantity}}">
                        
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Price</span>
                        </div>
                        <input type="text" name="price"class="form-control" value="{{$product->price}}">
                       
                    </div>
                    {!! Form::button('<i class="fa fa-plus"></i> Edit Product', array('class' => 'btn btn-block btn-primary', 'type' => 'submit')) !!}
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
