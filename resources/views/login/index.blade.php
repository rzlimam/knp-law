<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>



<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<!-- Custom styles for this template -->
<link href="/css/login.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
        
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-sigin mt-5">
                <img class="mb-2" src="/images/knp-logo.jpeg" alt="" width="100">
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="POST">
                @csrf
                <div class="form-floating mb-4 mt-4">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" autofocus required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form></small>
            </main>
        </div>
    </div>
</div>      
</body>
</html>
