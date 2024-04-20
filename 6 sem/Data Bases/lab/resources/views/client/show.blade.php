@extends('layouts.main')
@section('content')
<div>
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
          <tr>
            <th scope="row">{{$client->id}}</a></th>
            <td>{{$client->email}}</td>
            <td>{{$client->client_name}}</td>
            <td>{{$client->phone_number}}</td>
          </tr>
        </tbody>
      </table>
      <div class="container">
        <a href="{{route('client.edit', $client->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('client.index')}}" class="btn btn-warning">Back</a>
        <form action="{{route('client.delete', $client->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()