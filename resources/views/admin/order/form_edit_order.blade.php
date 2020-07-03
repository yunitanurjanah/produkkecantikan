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
                            <input type="hidden" name="id_produk" id="id_produk" class="form-control" value="{{ $order->id_produk }}" />
                            
                            <label class="control-label col-md-4" >Order Code : </label>
                            <div class="col-md-12">
                            <input type="text" name="no_order" id="no_order" class="form-control" value="{{ $order->no_order }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <label class="control-label col-md-4" >Name : </label>
                            <div class="col-md-12">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $order->nama_user }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <label class="control-label col-md-4" >Phone : </label>
                            <div class="col-md-12">
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $order->no_hp_user }}" />
                            </div>
                        </div>
                        <div class="form-group">
                
                            <label class="control-label col-md-4" >Address : </label>
                            <div class="col-md-12">
                            <textarea name="address" id="address" class="form-control" value="{{ $order->address_user }}"></textarea>
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