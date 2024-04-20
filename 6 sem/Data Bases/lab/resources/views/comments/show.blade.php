@extends('layouts.main')
@section('content')
<div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Rating</th>
            <th scope="col">Adding Date</th>
            <th scope="col">Review</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="{{route('comment.show', $comments->id)}}">{{$comments->id}}</a></th>
            <td>{{$comments->rating}}</td>
            <td>{{$comments->adding_date}}</td>
            <td>{{$comments->review}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <a href="{{route('comment.edit', $comments->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('comment.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('comment.delete', $comments->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()