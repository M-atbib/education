
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
            background: url("/assets/image/reset.png") no-repeat center center scroll !important;
          
        }
    </style>
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
            <a href="{{ route('index') }}">
          <img src="{{ asset('assets/image/logo.png') }}" alt="logo" style="margin-top: 15px"></a>
        </div>
        
        <div class="login">
          <div class="container">
            <h1>{{__("passwords.reset")}} <br> {{__("passwords.acount")}}</h1>
        
            <div class="login-form">
                @if (session('status'))
                <div class="alert alert-success" role="alert" style="color: rgb(17 209 0);  font-size: 15px; ">
                   <strong>{{__("passwords.status")}}</strong>
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    
                <input id="email" type="email" placeholder="{{__("auth.E-mail")}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; ">
                        {{ $message }}
                    </span>
                @enderror
                    <div class="action">
                        <button type="submit">{{__("passwords.send")}}</button> 
                       
                        <div class="signup">
                            <a href="{{ route('login') }}">{{__("auth.login")}} ?</a>
                        </div>
                    </div>
                    
    
              </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>