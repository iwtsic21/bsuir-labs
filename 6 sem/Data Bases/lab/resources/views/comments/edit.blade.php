@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('comment.update', $comments->id)}}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="rating" class="form-label">Rating</label>
      <input name="rating" type="text" class="form-control" id="rating" placeholder="" value="{{$comments->rating}}">
    </div>
    <div class="mb-3">
      <label for="adding_date" class="form-label">Adding date</label>
      <input name="adding_date" type="text" class="form-control" id="adding_date" placeholder="" value="{{$comments->adding_date}}">
    </div>
    <div class="mb-3">
      <label for="review" class="form-label">Review</label>
      <input name="review" type="text" class="form-control" id="review" placeholder="" value="{{$comments->review}}">
    </div>
    <div class="mb-3">
      <label for="client_id" class="form-label">Client id</label>
      <input name="client_id" type="text" class="form-control" id="client_id" placeholder=""  value="{{$comments->client_id}}">
    </div>
    <div class="mb-3">
      <label for="disk_id" class="form-label">Disk id</label>
      <input name="disk_id" type="text" class="form-control" id="disk_id" placeholder=""  value="{{$comments->disk_id}}">
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()