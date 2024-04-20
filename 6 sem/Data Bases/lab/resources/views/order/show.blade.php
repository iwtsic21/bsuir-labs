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
          <tr>
            <th scope="row"><a href="{{route('order.show', $order->id)}}">{{$order->id}}</a></th>
            <td>{{$order->order_date}}</td>
            <td>{{$order->total_price}}</td>
            <td>{{$order->return_date}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <a href="{{route('order.edit', $order->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('order.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('order.delete', $order->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
</div>
@endsection()