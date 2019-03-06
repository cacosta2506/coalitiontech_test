@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    {{ Form::open(array('url' => 'products')) }}
                    <div class="input-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Product Name</span>
                        </div>
                        <input type="text" name="product_name" class="form-control">
                        @if ($errors->has('product_name'))
                        <span class="error_div">
                            <strong>{{ $errors->first('product_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Quantity</span>
                        </div>
                        <input type="text" name="quantity" class="form-control">
                        @if ($errors->has('quantity'))
                        <span class="error_div">
                            <strong>{{ $errors->first('quantity') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group{{ $errors->has('price') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Price</span>
                        </div>
                        <input type="text" name="price"class="form-control">
                        @if ($errors->has('price'))
                        <span class="error_div">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                        @endif
                    </div>
                    {!! Form::button('<i class="fa fa-plus"></i> Create Product', array('class' => 'btn btn-block btn-primary', 'type' => 'submit')) !!}
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
