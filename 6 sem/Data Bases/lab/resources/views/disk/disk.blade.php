@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Disk Name</th>
        <th scope="col">Disk Cost</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($disk as $item)
      <tr>
        <th scope="row"><a href="{{route('disk.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->disk_name}}</td>
        <td>{{$item->disk_cost}}</td>
        <td>{{$item->category}}</td>
        <td>{{$item->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('disk.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()