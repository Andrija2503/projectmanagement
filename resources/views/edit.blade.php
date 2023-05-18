
@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb d-flex justify-content-between mb-5 mt-1">
        <div class="pull-left">
            <h2>Project Application</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('Item.index') }}">
                Back
            </a>
        </div>
    </div>
</div>



<form action="{{route('Item.update', $item->id)}}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="form-control m-3 py-3">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="{{$item->title}}" value="{{$item->title}}">
            </div>
            <div class="form-group mt-1">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="{{$item->description}}" value="{{$item->description}}">
            </div>
            <div class="form-group mt-1">
                <strong>Owner:</strong>
                <input type="text" name="owner" class="form-control" placeholder="{{$item->owner}}" value="{{$item->owner}}">
            </div>
            <div class="form-group mt-1">
                <strong>Status:</strong>
                <select name="status" id="" class="form-control">
                    @if (($item->status) == 'active')
                        <option value="active" selected>active</option>
                        <option value="disabled">disabled</option>
                    @else
                    <option value="active">active</option>
                    <option value="disabled" selected>disabled</option>
                    @endif
                    
                </select>
            </div>
            <div class="form-group mt-1 d-flex">
                <div class="me-3">
                    <strong>Start:</strong><br>
                    <input type="date" name="start_date" value="{{$item->start_date}}">
                </div>
                <div>
                    <strong>Finish:</strong><br>
                    <input type="date" name="finish_date" value="{{$item->finish_date}}">
                </div>
            </div>
        </div>
        
            <button type="submit" class="btn btn-primary form-control m-3">
                Submit
            </button>
        
    </div>
</form>
@if ($errors->any())

    <div class="alert alert-danger">
        <strong>Problems!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif
    
@endsection