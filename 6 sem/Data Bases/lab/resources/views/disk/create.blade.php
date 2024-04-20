@extends('layouts.main')
@section('content')
<div>
  <form action="{{route('disk.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="disk_name" class="form-label">Name</label>
    <input name="disk_name" type="text" class="form-control" id="disk_name" placeholder="">
  </div>
  <div class="mb-3">
    <label for="disk_cost" class="form-label">Disk cost</label>
    <input name="disk_cost" type="text" class="form-control" id="disk_cost" placeholder="">
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input name="category" type="text" class="form-control" id="Category" placeholder="">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input name="description" type="text" class="form-control" id="description" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</div>
@endsection()