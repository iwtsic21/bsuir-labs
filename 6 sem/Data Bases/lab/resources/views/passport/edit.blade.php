@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('passport.update', $passport->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="name_sur" class="form-label">Name Surname</label>
      <input name="name_sur" type="text" class="form-control" id="name_sur" placeholder="" value="{{$passport->name_sur}}">
    </div>
    <div class="mb-3">
      <label for="birth_date" class="form-label">Birth date</label>
      <input name="birth_date" type="text" class="form-control" id="birth_date" placeholder="" value="{{$passport->birth_date}}">
    </div>
    <div class="mb-3">
      <label for="order_id" class="form-label">Order id</label>
      <input name="order_id" type="text" class="form-control" id="order_id" placeholder=""  value="{{$passport->order_id}}">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()