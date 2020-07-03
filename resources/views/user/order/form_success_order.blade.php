@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="row">
        		<div class="card col-md-12">
	                <h4 class="col-md-12">Success!</h4>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">Order no</div>
                            <div class="col-md-6" align="right">{{$data['no_order']}}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">Produk name</div>
                            <div class="col-md-6" align="right">{{$data['nama_produk']}}</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">Qty</div>
                            <div class="col-md-6" align="right">1 Qty</div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">Total</div>
                            <div class="col-md-6" align="right">Rp. {{$data['harga_produk']}}</div>
                        </div>
                    </div>
	            </div>
                
        	</div>
        </div>
    </div>
</div>
@endsection
