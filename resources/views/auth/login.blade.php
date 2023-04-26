
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("auth.login")}}</title>
    <link rel="icon" href="{{ asset('assets/image/logo1.png') }}">
    <link href="{{ asset('assets/auth/css.css?v=0') }}" rel="stylesheet">
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustration">
           <a href="{{ route('index') }}">
          <img src="{{ asset('assets/image/logo.png') }}" alt="logo"></a>
        </div>
        
        <div class="login">
          <div class="container">
            <h1>{{__("auth.Login")}} <br> {{__("auth.your_account")}}</h1>
        
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    
                    <input id="email" type="email" placeholder="{{ __('auth.E-mail') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    <input type="password" placeholder="{{__("auth.Password")}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <div class="remember-form">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="remember" for="remember">{{__("auth.Remember")}}</label>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="forget-pass">
                            <a href="{{ route('password.request') }}">{{__("auth.Forgot")}} ?</a>
                        </div>
                    @endif
                   
                   
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;  font-size: 18px; text-align: center; margin-bottom: 15px;" >
                            {{__("auth.filed_user")}}
                        </span>
                    @enderror
                    <div class="action">
                        <button type="submit">{{__("auth.login")}}</button> 
                       
                        <div class="signup">
                            <a href="{{ route('register') }}">{{__("auth.signup")}} ?</a>
                        </div>
                    </div>
                    
    
              </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>