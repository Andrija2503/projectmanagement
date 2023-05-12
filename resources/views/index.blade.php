
@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb d-flex justify-content-between">
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
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Project</th>
        <th scope="col">Owner</th>
        <th scope="col">Start Date</th>
        <th scope="col">Finish Date</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
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
        <td>akcija</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection