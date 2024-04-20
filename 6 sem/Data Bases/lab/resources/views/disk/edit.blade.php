@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('disk.update', $disk->id)}}" method="post">
    @csrf
    @method('patch')
  <div class="mb-3">
    <label for="disk_name" class="form-label">Name</label>
    <input name="disk_name" type="text" class="form-control" id="disk_name" placeholder="" value="{{$disk->disk_name}}">
  </div>
  <div class="mb-3">
    <label for="disk_cost" class="form-label">Disk cost</label>
    <input name="disk_cost" type="text" class="form-control" id="disk_cost" placeholder="" value="{{$disk->disk_cost}}">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input name="category" type="text" class="form-control" id="Category" placeholder="" value="{{$disk->category}}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input name="description" type="text" class="form-control" id="description" placeholder="" value="{{$disk->description}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
@endsection()