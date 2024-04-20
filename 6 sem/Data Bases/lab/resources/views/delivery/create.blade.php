@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('delivery.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="delivery_date" class="form-label">Delivery date</label>
    <input name="delivery_date" type="text" class="form-control" id="delivery_date" placeholder="">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name="address" type="text" class="form-control" id="address" placeholder="">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input name="price" type="text" class="form-control" id="price" placeholder="">
  </div>
  <div class="mb-3">
    <label for="order_id" class="form-label">Order id</label>
    <input name="order_id" type="text" class="form-control" id="order_id" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
@endsection()