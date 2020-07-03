@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h2 class="col-md-8">Edit Form</h2>
                <form method="post" id="sample_form" class="form-horizontal" action="{{ url('/updateProduk')}}">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $produk->id }}" />
                        
                        <label class="control-label col-md-4" >Name : </label>
                        <div class="col-md-12">
                        <input type="text" name="name" id="name" class="form-control" value="{{ $produk->nama_produk }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Price : </label>
                        <div class="col-md-12">
                        <input type="text" name="price" id="price" class="form-control" value="{{ $produk->harga_produk }}" />
                        </div>
                    </div>
                            <br />
                            <div class="form-group" align="center">
                            <input type="hidden" name="action" id="action" value="Add" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Save" />
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection