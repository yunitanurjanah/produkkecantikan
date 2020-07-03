@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success btn-sm" href="{{url('/addProduk')}}" role="button">Tambah</a>
                    <br></br>
                    <div class="table-responsive">
                        <table id="produk_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="25%">Code</th>
                                    <th width="25%">Name</th>
                                    <th width="25%">Price</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($produk as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->nama_produk }}</td>
                                    <td>{{ $p->harga_produk }}</td>
                                    <td>
                                        <a href="/editProduk/{{ $p->id }}">Edit</a>
                                        |
                                        <a href="/deleteProduk/{{ $p->id }}">Hapus</a></td>
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