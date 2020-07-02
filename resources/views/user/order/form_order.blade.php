@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="row">
        		<div class="card col-md-12">
	                <div class="card-body">
	                    <div class="col-md-12">
		        			<h4>Order Information</h4>
		        		</div>
		        		<div class="col-md-12">
		        			<h6>{{ $produk->nama_produk }}</h6>
		        		</div>
		        		<div class="col-md-12">
		        			<h6>Rp. {{ $produk->harga_produk }}</h6>
		        		</div>
		        		<div class="col-md-12">
		        			<h6>Qty 1 pcs</h6>
		        		</div>
		        		<br>
		        		<div class="col-md-12">
		        			<h4>Customer Information</h4>
		        		</div>
		        		<div class="col-md-12">
		        			<form method="post" id="sample_form" class="form-horizontal" action="/addOrder">
		        				@csrf
			                    <div class="form-group">
			                        <label class="control-label col-md-4" >Name : </label>
			                        <div class="col-md-12">
			                        <input type="hidden" name="id_produk" id="id_produk" class="form-control" value="{{ $produk->id}}" />
			                        <input type="text" name="nama_user" id="nama_user" class="form-control" />
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label class="control-label col-md-4">Phone : </label>
			                        <div class="col-md-12">
			                        <input type="text" name="no_hp_user" id="no_hp_user" class="form-control" />
			                        </div>
			                    </div>
			                    <div class="form-group">
			                        <label class="control-label col-md-4">Address : </label>
			                        <div class="col-md-12">
			                        	<textarea class="form-control" name="address_user" id="address_user"></textarea>
			                        </div>
			                    </div>
			                    <br />
			                    <div class="form-group" align="center">
			                        <input type="hidden" name="action" id="action" value="Add" />
			                        <input type="hidden" name="hidden_id" id="hidden_id" />
			                        <input type="submit" name="action_button" id="action_button" class="btn btn-success col-md-12" value="Save" />
			                    </div>
			                </form>
		        		</div>
	                </div>
	            </div>
        	</div>
        </div>
    </div>
</div>
@endsection
