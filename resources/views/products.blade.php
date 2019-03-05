@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <a class="btn btn-outline btn-default" href="{{ route('products.create') }}" data-toggle="tooltip"> Add Product</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total Value</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($products as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->valueNumber()}}</td>
                                <td><a class="btn btn-outline btn-default" href="{{ route('products.edit',array($item->id)) }}" data-toggle="tooltip"> Edit Product</a></td>
                                
                            </tr>
                           @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
