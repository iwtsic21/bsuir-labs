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
          <tr>
            <th scope="row"><a href="{{route('passport.show', $passport->id)}}">{{$passport->id}}</a></th>
            <td>{{$passport->name_sur}}</td>
            <td>{{$passport->birth_date}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <a href="{{route('passport.edit', $passport->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('passport.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('passport.delete', $passport->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()