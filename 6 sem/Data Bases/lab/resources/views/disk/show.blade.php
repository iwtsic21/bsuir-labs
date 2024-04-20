@extends('layouts.main')
@section('content')
<div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Disk Name</th>
            <th scope="col">Disk Cost</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="{{route('disk.show', $disk->id)}}">{{$disk->id}}</a></th>
            <td>{{$disk->disk_name}}</td>
            <td>{{$disk->disk_cost}}</td>
            <td>{{$disk->category}}</td>
            <td>{{$disk->description}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <a href="{{route('disk.edit', $disk->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('disk.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('disk.delete', $disk->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()