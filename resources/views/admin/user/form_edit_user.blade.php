@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h2 class="col-md-8">Edit Form</h2>
                <form method="post" id="sample_form" class="form-horizontal" action="{{ url('/updateUser')}}">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $user->id }}" />
                        
                        <label class="control-label col-md-4" >Name : </label>
                        <div class="col-md-12">
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $user->name }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Email : </label>
                        <div class="col-md-12">
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" />
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