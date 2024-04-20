@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Fine</th>
        <th scope="col">Lease extension</th>
        <th scope="col">Discount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($addition as $item)
      <tr>
        <th scope="row"><a href="{{route('addition.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->fine}}</td>
        <td>{{$item->lease_extension}}</td>
        <td>{{$item->discount}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('addition.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()