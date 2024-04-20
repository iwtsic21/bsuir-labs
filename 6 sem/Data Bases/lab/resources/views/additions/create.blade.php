@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('addition.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="fine" class="form-label">Fine</label>
    <input name="fine" type="text" class="form-control" id="fine" placeholder="">
  </div>
  <div class="mb-3">
    <label for="discount" class="form-label">Discount</label>
    <input name="discount" type="text" class="form-control" id="discount" placeholder="">
  </div>
  <div class="mb-3">
    <label for="lease_extension" class="form-label">Lease extension</label>
    <input name="lease_extension" type="text" class="form-control" id="lease_extension" placeholder="">
  </div>
  <div class="mb-3">
    <label for="order_id" class="form-label">Order id</label>
    <input name="order_id" type="text" class="form-control" id="order_id" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
@endsection()