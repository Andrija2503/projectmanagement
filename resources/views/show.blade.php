@extends('layout')

@section('content')
    <div class="row mb-5">
        <div class="col-lg-12 margin-tb d-flex justify-content-between mt-2">
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

    <div class="card col-6 offset-3" >
        
        <div class="card-body">
          <h5 class="card-title">{{$item->title}}</h5>
          <p class="card-text">{{$item->description}}</p>
          @if (($item->status) == 'active')
                <h5 class="position-absolute top-0 end-0 text-bg-primary p-1" >{{$item->status}}</h5>
          
            @else
                <h5 class="position-absolute top-0 end-0 text-bg-danger p-1" >{{$item->status}}</h5>
              
          @endif              
         
          
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <strong>Owner:</strong>  {{$item->owner}}</li>
          <li class="list-group-item"><strong>Start:</strong> {{$item->start_date}}</li>
          <li class="list-group-item"><strong>Finish:</strong> {{$item->finish_date}}</li>
        </ul>
        <div class="card-body">
          <a href="{{route('Item.edit', $item->id)}}" class="card-link btn btn-primary d-grid gap-2 col-6 mx-auto">Change</a>
          
        </div>
      </div>
@endsection