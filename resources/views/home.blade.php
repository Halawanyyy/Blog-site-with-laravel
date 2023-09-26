<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/login">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">Add New Post</a>
          </li>
      </ul>
      <div class="container">
        <div class="row">
          @foreach ($posts as $post)
            <div class="card col" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->body}}</p>
                <a href="{{route('post_details',['post_id'=>$post->id])}}" class="btn btn-primary">Show more</a>
              </div>
            </div>
            <div class="w-100"></div>
          @endforeach
        </div>
      </div>
      
      
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>