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
                                    <th width="25%">Nama</th>
                                    <th width="25%">Email</th>
                                    <th width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $p)
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>
                                        <a href="/editUser/{{ $p->id }}">Edit</a>
                                        |
                                        <a href="/deleteUser/{{ $p->id }}">Hapus</a></td>
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