@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('comment.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="rating" class="form-label">Rating</label>
    <input name="rating" type="text" class="form-control" id="rating" placeholder="">
  </div>
  <div class="mb-3">
    <label for="adding_date" class="form-label">Adding date</label>
    <input name="adding_date" type="text" class="form-control" id="adding_date" placeholder="">
  </div>
  <div class="mb-3">
    <label for="review" class="form-label">Review</label>
    <input name="review" type="text" class="form-control" id="review" placeholder="">
  </div>
  <div class="mb-3">
    <label for="client_id" class="form-label">Client id</label>
    <input name="client_id" type="text" class="form-control" id="client_id" placeholder="">
  </div>
  <div class="mb-3">
    <label for="disk_id" class="form-label">Disk id</label>
    <input name="disk_id" type="text" class="form-control" id="disk_id" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
@endsection()