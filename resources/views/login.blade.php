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
          <a class="nav-link " href="/">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/login">Login</a>
        </li>
      </ul>
      @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
      @endif
    <form action="{{url('/login')}}" method="post">
        @csrf

            <div class="card text-dark bg-secondary mb-3">
                <div class="form-group card-body" >
                    <label for="Email">Email</label>
                    <input class="form-control @error ('email')is-invalide @enderror" type="email" name="email"/>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group card-body">
                    <label for="password">Password</label>
                    <input class="form-control @error ('password')is-invalide @enderror" type="password" name="password" maxlength="12"/>
                    @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group card-body">
                    <button name="submit" type="submit" class="btn btn-outline-dark text-light font-weight-bold">Login</button>
                </div>
            </div>
           
    </form>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>