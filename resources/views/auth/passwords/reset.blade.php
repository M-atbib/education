
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
            background: url("/assets/image/reset1.png") no-repeat center center scroll !important;
        }
    </style>
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
            <a href="{{ route('index') }}">
          <img src="{{ asset('assets/image/logo2.png') }}" alt="logo"></a>
        </div>
        
        <div class="login">
          <div class="container">
            <h1>{{__("passwords.reset")}} <br> {{__("passwords.acount")}}</h1>
        
            <div class="login-form">
               
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <input id="email" type="email" placeholder="{{__("auth.Password")}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; ">
                                    {{ $message }}
                                </span>
                            @enderror

                    <input id="password" type="password" placeholder="{{__("auth.Password")}}" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; "> 
                                    {{ $message }}
                                </span>
                            @enderror

                    <input id="password-confirm" type="password" placeholder="{{ __('auth.passwor_confi') }}" class="form-control" name="password_confirmation"  autocomplete="new-password">

                    <div class="action">
                        <button type="submit">reset password</button> 
                       
                     
                    </div>
                </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>