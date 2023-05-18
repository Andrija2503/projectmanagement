
@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex justify-content-between mt-2">
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
<table class="table table-striped mt-5">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project</th>
        <th scope="col">Owner</th>
        <th scope="col">Start Date</th>
        <th scope="col">Finish Date</th>
        <th scope="col">Status</th>
        <th scope="col" class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($all_item as $item)
      <tr>
        <th scope="row">{{++$i}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->owner}}</td>
        <td>{{$item->start_date}}</td>
        <td>{{$item->finish_date}}</td>
        <td>{{$item->status}}</td>
        <td>
          
            
              <div class="d-flex justify-content-around">
                <a href="{{route('Item.show', $item->id)}}" class="btn btn-sm btn-primary px-4">Edit</a>
                <form action="{{route('Item.destroy', $item->id)}}" method="POST">
                  @method('delete')
                  @csrf
                <button type="submit" class="btn btn-sm btn-danger px-3">Delete</a>
              </form>
              </div>
          
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  
@endsection


