@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="produk_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="25%">No Order</th>
                                    <th width="25%">Product</th>
                                    <th width="25%">Total Price</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $p)
                                <tr>
                                    <td>{{ $p->no_order }}</td>
                                    <td>{{ $p->nama_produk }}</td>
                                    <td>{{ $p->harga_produk }}</td>
                                    <td>
                                        <a href="/editOrder/{{ $p->id }}">Edit</a>
                                        |
                                        <a href="/deleteOrder/{{ $p->id }}">Hapus</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection