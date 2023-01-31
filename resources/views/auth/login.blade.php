<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{app_url('files/login/favicon.ico')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/favicon')}}icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{app_url('files/login/animate.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{app_url('files/login/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{app_url('files/login/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{app_url('files/login/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{app_url('files/login/main.css')}}">
    <meta name="robots" content="noindex, follow">
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="POST"
                    action="{{ route('login-admin') }}">
                    <!-- <span class="login100-form-title p-b-53">
                        Sign In With
                    </span> -->
                    @csrf
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Username
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input id="username" type="text" class="input100 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                        <!-- <a href="#" class="txt2 bo1 m-l-5">
                            Forgot?
                        </a> -->
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @if(Session::has('message'))
                    <span class="txt1" style="color: red;"> {{ Session::get('message') }} </span>
                    @enderror
                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <script src="{{app_url('files/login/jquery-3.2.1.min.js')}}"></script>
    <script src="{{app_url('files/login/animsition.min.js')}}"></script>
    <script src="{{app_url('files/login/popper.js')}}"></script>
    <script src="{{app_url('files/login/bootstrap.min.js')}}"></script>
    <script src="{{app_url('files/login/select2.min.js')}}"></script>
    <script src="{{app_url('files/login/moment.min.js')}}"></script>
    <script src="{{app_url('files/login/daterangepicker.js')}}"></script>
    <script src="{{app_url('files/login/countdowntime.js')}}"></script>
    <script src="{{app_url('files/login/main.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
</body>

</html>