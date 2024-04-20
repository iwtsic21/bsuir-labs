@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('delivery.update', $delivery->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="delivery_date" class="form-label">Delivery date</label>
      <input name="delivery_date" type="text" class="form-control" id="delivery_date" placeholder="" value="{{$delivery->delivery_date}}">
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input name="address" type="text" class="form-control" id="address" placeholder="" value="{{$delivery->address}}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input name="price" type="text" class="form-control" id="price" placeholder="" value="{{$delivery->price}}">
    </div>
    <div class="mb-3">
      <label for="order_id" class="form-label">Order id</label>
      <input name="order_id" type="text" class="form-control" id="order_id" placeholder=""  value="{{$delivery->order_id}}">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()