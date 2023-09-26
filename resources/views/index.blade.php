<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="/">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      </ul>
    <h1 class="text-light">Register</h1>
    
    <form action="{{url('/register')}}" method="post" class="form-group">
        @csrf
        <div class="card text-dark bg-secondary mb-3 ">
            <div class="form-group card-body">
                <label for="Name">Name</label>
                <input type="text" name="name" class="form-control  @error ('name')is-invalide @enderror "/>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group card-body">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control @error ('email')is-invalide @enderror"/>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group card-body">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error ('password')is-invalide @enderror" maxlength="12"/>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group card-body">
                <label for="address">address</label>
                <input type="text" name="address" class="form-control @error ('address')is-invalide @enderror"/>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group card-body">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control ">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="form-group card-body">
                <button type="submit" class="btn btn-outline-dark text-light font-weight-bold">Login</button>
                
            </div>
        </div>
        
    </form>
    
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>