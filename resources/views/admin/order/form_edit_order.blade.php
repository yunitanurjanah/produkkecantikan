@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="col-md-8">Edit Form</h2>
                    <form method="post" id="sample_form" class="form-horizontal" action="{{ url('/updateOrder')}}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" class="form-control" value="{{ $order->id }}" />
                            
                            <label class="control-label col-md-4" >Order Code : </label>
                            <div class="col-md-12">
                            <input type="text" name="no_order" id="no_order" class="form-control" value="{{ $order->no_order }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Produk : </label>
                            <div class="col-md-12">
                            <input type="text" name="produk" id="produk" class="form-control" value="{{ $order->id_produk }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Harga : </label>
                            <div class="col-md-12">
                            <input type="text" name="harga" id="harga" class="form-control" value="{{ $order->id_produk }}" />
                            </div>
                        </div>
                            <br />
                            <div class="form-group" align="center">
                                <input type="hidden" name="action" id="action" value="Add" />
                                <input type="hidden" name="hidden_id" id="hidden_id" />
                                <input type="submit" name="action_button" id="action_button" class="btn btn-success" value="Save" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection