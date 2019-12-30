@extends('layouts.master')

@section('breadcrumbs')
    @include('includes.breadcrumbs')
@endsection

@section('breadcrumbs-two')
    @include('includes.breadcrumbs-two')
@endsection

@section('content')
    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                    <h2>View All Products</h2>
                </div>
            </div>
            <div class="row row-pb-md">
            @foreach ($products as $product)
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="#" class="prod-img">
                            <img src="{{asset($product->photo)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="#">{{$product->name}}</a></h2>
                            <span class="price">${{$product->price}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="row">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection

@section('partner')
    @include('includes.partner')
@endsection