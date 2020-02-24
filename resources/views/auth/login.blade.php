<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- google web font -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="./css/login.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .header {
            font-family: 'Comfortaa' ;
            border-radius: 30px 30px 0 0;
        }

        .form-signin .checkbox {
            float: left;
            font-weight: 200;
        }

        .form-signin button {
            float: right;
        }

        .form-signin .login-btn-area{
            height: 45px;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .form-signin .forgotpassword{
        }

        .form-signin .footer{
            margin-top: 30px;

        }
    </style>

</head>
<body class="text-center">
<form method="POST"  class="form-signin" action="{{ route('login') }}">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal header">- sign in -</h1>

    <!-- email -->
    <label for="email" class="sr-only">email</label>
    <input
        id="email"
        type="email"
        class="form-control @error('email') is-invalid @enderror"
        name="email"
        {{--        value="{{ old('email') }}"
        --}}
        value="yusuke.1975@gmail.com"
        placeholder="email"
        required
        autocomplete="email"
        autofocus
    >

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

<!-- password -->
    <label for="password" class="sr-only">password</label>
    <input
        id="password"
        type="password"
        class="form-control @error('password') is-invalid @enderror"
        value="admin"
        name="password"
        placeholder="password"
        required
        autocomplete="current-password"
    >

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<!-- btn area -->
    <div class="login-btn-area">
        <div class="checkbox mb-3">
            <label>
                <input
                    type="checkbox"
                    name="remember"
                    id="remember" {{ old('remember') ? 'checked' : '' }}
                > remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">
            sign in
        </button>
    </div>

    <div class="forgotpassword">
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    <div class="footer">
        <span class="mt-5 mb-3 text-muted">© 2020 have-enjoy.com</span>
    </div>
</form>
</body>
</html>
