@extends('layouts.app')

@section('content')

<div class="container">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/slider/RazerBarracudaPro.jpg') }}" class="d-block w-100 " alt="...">
        </div>
            <div class="carousel-item">
                <img src="{{ url('assets/slider/FantechSlider.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/slider/RexusThundervoxHX9.jpg') }}" class="d-block w-100 " alt="...">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- Choose Brand --}}
<section class ="pilih-merek mt-4">
    <h3 style="text-align:center"><strong>Choose a Brand</strong></h3>
    <div class="row mt-4">
        @foreach ($mereks as $merek)
        <div class="col">
            <div class="card shadow">
                <div class="card-body ">
                    <img src="{{ url('assets/merek') }}/{{ $merek->gambar}}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- Best Products  --}}
<section class ="best-product mt-5 mb-5">
    <h3 style="text-align:center"><strong>Our Best Products</strong></h3>
    <div class="row mt-4">
        @foreach ($products as $product)
        <div class="col-md-3">
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
                            <a href="#"class="btn btn-dark btn-block">Product Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
</div>
@endsection
