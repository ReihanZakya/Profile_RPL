<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('assets/login/images/logo smk.jpg') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/login/css/main.css') }}">

    <meta name="robots" content="noindex, follow">
</head>

<div id="login-button">
  <img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png">
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
  @csrf

    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input type="email" name="email" required placeholder="Enter a valid email address">
    </div>
    <div class="wrap-input100 validate-input" data-validate="Password is required">
    <input type="password" name="password" required placeholder="Enter a valid password">
    
    </div>
    <!-- <a href="#">Log in</a> -->
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>
    <button type="submit" class="btn btn-light btn-lg" style="margin-left: 130px; margin-top: 50px;">Login</button>
</form>
@if ($message = Session::get('peringatan'))
	<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button> 
	<strong>{{ $message }}</strong>
	</div>
    @endif
</div>

 

    <script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('assets/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{ asset('assets/login/js/main.js') }}"></script>
    {{-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6901ed5cc8fd3586","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'>
    </script> --}}
</body>

</html>
