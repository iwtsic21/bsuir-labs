@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name and Surname</th>
        <th scope="col">Birth Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($passport as $item)
      <tr>
        <th scope="row"><a href="{{route('passport.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->name_sur}}</td>
        <td>{{$item->birth_date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('passport.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()