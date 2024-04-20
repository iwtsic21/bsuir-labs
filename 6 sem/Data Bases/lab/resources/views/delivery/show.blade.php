@extends('layouts.main')
@section('content')
<div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Address</th>
            <th scope="col">Price</th>
            <th scope="col">Delivery Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="{{route('delivery.show', $delivery->id)}}">{{$delivery->id}}</a></th>
            <td>{{$delivery->address}}</td>
            <td>{{$delivery->price}}</td>
            <td>{{$delivery->delivery_date}}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <a href="{{route('delivery.edit', $delivery->id)}}" class="btn btn-warning">Edit</a>
      </div>
      <div>
        <a href="{{route('delivery.index')}}" class="btn btn-warning">Back</a>
      </div>
      <div>
        <form action="{{route('delivery.delete', $delivery->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete" class="btn btn-danger">
        </form>
      </div>
      
</div>
@endsection()