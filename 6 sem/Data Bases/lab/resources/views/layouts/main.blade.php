<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css"/>
    <title>lab6</title>
</head>
    <body>
      <script src="/bootstrap/js/bootstrap.js"></script>
        <div class="container">
          <div class="row">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="{{route('main.index')}}">Main</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('disk.index')}}">Disk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('order.index')}}">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('delivery.index')}}">Delivery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('comment.index')}}">Comments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('client.index')}}">Client</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('passport.index')}}">Passport</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('addition.index')}}">Additions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('lab4.index')}}">Lab4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('lab5.index')}}">Lab5</a>
              </li>
            </ul>
            <figure class="text-center">
              <blockquote class="blockquote">
                <p>Laboratory work №6 (VD rental)</p>
              </blockquote>
              <figcaption class="blockquote-footer">
                Created by: <cite title="Source Title">Umarov Timur</cite>
              </figcaption>
            </figure>
        </div>
        @yield('content')
    </body>
</html>