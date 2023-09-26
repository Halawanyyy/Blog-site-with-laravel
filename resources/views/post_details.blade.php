<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Details</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/login">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">Add New Post</a>
          </li>
      </ul>
      <div class="container">
        <div class="row">
          <div class="card col" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$post_details->title}}</h5>
              <p class="card-text">{{$post_details->body}}</p>
            </div>
          </div>
          <div class="w-100"></div><br>
          
          <div class="card">
            <div class="card-header">
              Add Comment
            </div>
              <form action="{{url('/comment/add')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" maxlength="200" name="comment_body" class="form-control @error ('comment_body') is-invalide @enderror">
                  </div>
                  @error('comment_body')
                   <div class="alert alert-danger">{{$message}}</div>   
                  @enderror
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="w-100"></div>
          </div>
          <br>
          @foreach ($comment_details as $comment)
          <div class="container">
            <div class="row">
              <div class="card col" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$comment->body}}</h5>
                  <p class="card-text">{{$comment->created_at}}</p>
                </div>
              </div>
              <div class="w-100"></div><br>
          @endforeach
           

        </div>
      </div>
    
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>