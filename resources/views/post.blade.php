<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="/login">Logout</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/post">Add New Post</a>
          </li>
      </ul>
      <form action="{{ url('/post/create') }}" method="post">
        @csrf
        <div class="card text-dark bg-secondary mb-3 ">
            <div class="form-group card-body">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control @error ('title')is-invalide @enderror">
                @error('title')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
           
            <div class="form-group card-body">
                <label for="content">Content</label>
                <input type="text" name="content" class="form-control @error ('content')is-invalide @enderror">
                @error('content')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            
            <input type="hidden" value="{{$_SESSION['user_id']}}" name="user_id">
            <div class="form-group card-body">
                <button type="submit" class="btn btn-outline-dark text-light font-weight-bold">Add</button>
            </div>
        </div>
      </form>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>