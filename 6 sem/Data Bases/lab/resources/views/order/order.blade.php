@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Order Date</th>
        <th scope="col">Total Price</th>
        <th scope="col">Return Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($order as $item)
      <tr>
        <th scope="row"><a href="{{route('order.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->order_date}}</td>
        <td>{{$item->total_price}}</td>
        <td>{{$item->return_date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('order.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()