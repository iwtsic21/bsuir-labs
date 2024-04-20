@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('passport.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name_sur" class="form-label">Name Surname</label>
    <input name="name_sur" type="text" class="form-control" id="name_sur" placeholder="">
  </div>
  <div class="mb-3">
    <label for="birth_date" class="form-label">Birth date</label>
    <input name="birth_date" type="text" class="form-control" id="birth_date" placeholder="">
  </div>
  <div class="mb-3">
    <label for="order_id" class="form-label">Order id</label>
    <input name="order_id" type="text" class="form-control" id="order_id" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
@endsection()