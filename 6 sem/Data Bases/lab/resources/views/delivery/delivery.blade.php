@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Address</th>
        <th scope="col">Price</th>
        <th scope="col">Delivery Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($delivery as $item)
      <tr>
        <th scope="row"><a href="{{route('delivery.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->address}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->delivery_date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('delivery.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()