@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-gambar-product">
            <div class="card-body">
                <img src="{{ url('assets/product') }}/{{ $product->gambar}}" class="img-fluid" alt="..."
                    class="img-fluid" width="550">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-8">
                <h2><strong>{{ $product->nama }}</strong></h2>
            </div>
        </div>
        <h4>Rp. {{ number_format($product->harga) }}
            @if($product->is_ready == 1)
            <span class="badge text-bg-success"><i class="fa-regular fa-circle-check"></i> Ready Stock</span>
            @else
            <span class="badge text-bg-danger"><i class="fa-regular fa-circle-xmark"></i> Habis</span>
            @endif
        </h4>
        <div class="row">
            <div class="col">
                <form wire:submit.prevent="masukkanKeranjang">
                <table class="table" style="border-top: hidden">
                    <tr>
                        <td>Merk</td>
                        <td>:</td>
                        <td>
                            <img src="{{ url('assets/merek') }}/{{ $product->merek->gambar}}" class="img-fluid"
                                alt="..." class="img-fluid" width="150">
                        </td>
                    </tr>
                    <tr>
                        <td>Catalog</td>
                        <td>:</td>
                        <td>{{ $product->category->nama }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>
                            <input id="jumlah_pesanan" type="number"
                                class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan"
                                value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>

                            @error('jumlah_pesanan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" class="btn btn-dark btn-block" @if($product->is_ready !== 1) disabled @endif>
                                <i class="fa-solid fa-basket-shopping"></i> Masukkan Keranjang</button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection