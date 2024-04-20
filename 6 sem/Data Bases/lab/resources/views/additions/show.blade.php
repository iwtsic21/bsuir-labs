@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Fine</th>
        <th scope="col">Lease extension</th>
        <th scope="col">Discount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><a href="{{route('addition.show', $additions->id)}}">{{$additions->id}}</a></th>
        <td>{{$additions->fine}}</td>
        <td>{{$additions->lease_extension}}</td>
        <td>{{$additions->discount}}</td>
      </tr>
    </tbody>
  </table>
      <div>
        <a href="{{route('addition.edit', $additions->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('addition.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('addition.delete', $additions->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()