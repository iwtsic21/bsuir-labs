@extends('layouts.main')
@section('content')
<div>
  {{-- @foreach ($client as $item)
      <div><a href="{{route('client.show', $item->id)}}">{{$item->client_name}}. {{$item->phone_number}}</a></div>
  @endforeach --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Email</th>
        <th scope="col">Client Name</th>
        <th scope="col">Client number</th>
      </tr>
    </thead>
    <tbody>
      @foreach($client as $item)
      <tr>
        <th scope="row"><a href="{{route('client.show', $item->id)}}">{{$item->id}}</a></th>
        <td>{{$item->email}}</td>
        <td>{{$item->client_name}}</td>
        <td>{{$item->phone_number}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{route('client.create')}}" class="btn btn-success">Add</a>
  </div>
</div>

@endsection()