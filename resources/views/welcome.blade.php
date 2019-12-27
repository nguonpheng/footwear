@extends('layouts.master')

@section('slider')
    @include('includes.slider')
@endsection

@section('content')
    <div class="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img" style="background-image: url({{asset('assets/images/men.jpg')}});"></a>
                        <div class="desc">
                            <h2><a href="#">Shop Men's Collection</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="featured">
                        <a href="#" class="featured-img" style="background-image: url({{asset('assets/images/women.jpg')}});"></a>
                        <div class="desc">
                            <h2><a href="#">Shop Women's Collection</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                    <h2>Best Sellers</h2>
                </div>
            </div>
            <div class="row row-pb-md">
                @foreach ($products as $product)
                    <div class="col-lg-3 mb-4 text-center">
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
                <div class="col-md-12 text-center">
                    <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('partner')
    @include('includes.partner')
@endsection
