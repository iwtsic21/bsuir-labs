@extends('layouts.main')
@section('content')
<div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Rating</th>
        <th scope="col">Adding date</th>
        <th scope="col">Review</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comment as $item)
      <tr>
        <th scope="row"><a href="{{route('comment.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->rating}}</td>
        <td>{{$item->adding_date}}</td>
        <td>{{$item->review}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('comment.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()