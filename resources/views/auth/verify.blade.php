
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("auth.login")}}</title>
    <link rel="icon" href="{{ asset('assets/image/logo1.png') }}">
    <link href="{{ asset('assets/auth/css.css?v=0') }}" rel="stylesheet">
    <style>
        .bg-illustration{
            background: url("/assets/image/verify.png") no-repeat center center scroll !important;
        }
    </style>
</head>
<body>
    <div class="parent clearfix" >
        <div class="bg-illustration">
            <a href="{{ route('index') }}">
          <img src="{{ asset('assets/image/logo.png') }}" alt="logo"></a>
        </div>
        
        <div class="login">
          <div class="container">
            <h1>{{ __('auth.verify') }}</h1>
        
            <div class="login-form" >
                @if (session('resent'))
                    <div class="alert alert-success" role="alert" style="color: rgb(17 209 0);  font-size: 20px; margin-bottom: 15px; text-align: center;">
                     <strong>   {{ __('auth.message_sent') }} </strong><br>
                     <img src="{{ asset('assets/image/sent.gif') }}" style="margin-top: 20px" alt="logo" width="400" height="300" >
                    </div>
                
                @else
                    <nav style="text-align: center; font-size: 20px">

                        {{ __('auth.checked') }}
                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" style="margin: 10px auto; width: 100%; margin-top: 100px" class="btn btn-link p-0 m-0 align-baseline">{{ __('auth.click_ici') }}</button>.
                    </form>
                    </nav>
                @endif
                
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>