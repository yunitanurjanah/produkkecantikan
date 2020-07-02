@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="row">
                    @foreach($produk as $p)
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <img src="{{asset('product.10098.154043510141535.jpg')}}">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-12">
                                    <h4>{{ $p->nama_produk }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <h6>{{ $p->harga_produk }}</h6>
                                </div>
                                <a href="/pilihProduk/{{ $p->id }}" class="btn btn-success col-md-12">Beli</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
