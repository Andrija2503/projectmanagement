@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between mb-5 mt-1">
        <div class="pull-left">
            <h2>Project Application</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('Item.create') }}">
                Add New Project
            </a>
        </div>
    </div>
</div>

@if ($errors->any())

    <div class="alert alert-danger">
        <strong>Problems!</strong>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<form action="" method="POST">
    @csrf

    <div class="row">
        <div class="form-control m-3 py-3">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Project title...">
            </div>
            <div class="form-group mt-1">
                <strong>Description:</strong>
                <input type="text" name="text" class="form-control" placeholder="Description text text...">
            </div>
            <div class="form-group mt-1">
                <strong>Owner:</strong>
                <input type="text" name="text" class="form-control" placeholder="Owner..">
            </div>
            <div class="form-group mt-1">
                <strong>Status:</strong>
                <select name="status" id="" class="form-control">
                    <option value="active">active</option>
                    <option value="disabled">disabled</option>
                </select>
            </div>
        </div>
        
            <button type="submit" class="btn btn-primary form-control m-3">
                Submit
            </button>
        
    </div>
</form>
    
@endsection