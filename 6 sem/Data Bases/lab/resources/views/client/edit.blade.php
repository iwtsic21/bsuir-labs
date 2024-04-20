@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('client.update', $client->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input name="email" type="text" class="form-control" id="email" placeholder="" value="{{$client->email}}">
    </div>
    <div class="mb-3">
      <label for="phone_number" class="form-label">Phone number</label>
      <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="" value="{{$client->phone_number}}">
    </div>
    <div class="mb-3">
      <label for="client_name" class="form-label">Client name</label>
      <input name="client_name" type="text" class="form-control" id="client_name" placeholder="" value="{{$client->client_name}}">
    </div>
    <div class="mb-3">
      <label for="order_id" class="form-label">Order id</label>
      <input name="order_id" type="text" class="form-control" id="order_id" placeholder="" value="{{$client->order_id}}">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()