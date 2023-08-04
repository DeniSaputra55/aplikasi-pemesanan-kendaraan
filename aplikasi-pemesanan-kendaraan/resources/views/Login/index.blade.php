<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            width: 600px;
            height: 400px;
            max-width: 100%;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 30px;
        }

        .card h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-floating label {
            color: #495057;
        }

        .form-floating input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
            text-align: center;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 4px;
        }
        .login-icon {
            font-size: 4rem;
            color: #007bff;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="card">
        <center><i class="fas fa-user-lock login-icon"></i></center>
            <h1>Please Login</h1>
            @if (session()->has('gagal'))
            <div class="alert alert-danger">
                <strong>{{ session('gagal') }}</strong>
            </div>
            @endif
            <form action="/login" method="POST">
                @method('POST')
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn-login" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
