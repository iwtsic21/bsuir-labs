@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('order.update', $order->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="order_date" class="form-label">Order date</label>
      <input name="order_date" type="text" class="form-control" id="order_date" placeholder="" value="{{$order->order_date}}">
    </div>
    <div class="mb-3">
      <label for="total_price" class="form-label">Total price</label>
      <input name="total_price" type="text" class="form-control" id="total_price" placeholder="" value="{{$order->total_price}}">
    </div>
    <div class="mb-3">
      <label for="return_date" class="form-label">Return date</label>
      <input name="return_date" type="text" class="form-control" id="return_date" placeholder="" value="{{$order->return_date}}">
    </div>
    <div class="mb-3">
      <label for="disk_id" class="form-label">Disk id</label>
      <input name="disk_id" type="text" class="form-control" id="disk_id" placeholder=""  value="{{$order->disk_id}}">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()