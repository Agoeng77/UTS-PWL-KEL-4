@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
        </div>
    </div>
    <h2>{{ $title }}</h2>
    <section class ="best-product mt-5 mb-5">
        <h3 style="text-align:center"><strong>All Variations</strong></h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url('assets/product') }}/{{ $product->gambar}}" class="img-fluid" alt="...">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{$product->nama }}</strong></h5>
                                <h5>RP. {{number_format($product->harga)}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                            <a href="{{ route('products.detail', $product->id) }}"class="btn btn-dark btn-block"><i class="fa-regular fa-eye"></i>Product Details</a>                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
