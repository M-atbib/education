
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__("auth.signup")}}</title>
    <link rel="icon" href="{{ asset('assets/image/logo1.png') }}">
    <link href="{{ asset('assets/auth/css.css?v=0') }}" rel="stylesheet">
</head>
<body>
    <div class="parent clearfix">
        <div class="bg-illustrationsignup">
            <a href="{{ route('index') }}">
          <img src="{{ asset('assets/image/logo.png') }}" alt="logo"></a>
        </div>
        
        <div class="login">
          <div class="container">
            <h1 style="margin-bottom: -65px">{{ __('auth.create_acount') }}</h1>
        
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    
                    <input id="name" type="text" placeholder="{{ __('auth.full_name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; ">
                        {{ $message }}
                    </span>
                    @enderror

                   <input id="email" type="email" placeholder="{{__("auth.E-mail")}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; ">
                        {{ $message }}
                        </span>
                    
                    @enderror
                    

                   <input id="password" type="password" placeholder="{{__("auth.Password")}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                            @error('password')
                            <span class="invalid-feedback" role="alert" style="color: red;  font-size: 15px; ">
                                    {{ $message }}
                            </span>
                            @enderror
                   
                   
                    <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('auth.passwor_confi') }}" name="password_confirmation" required autocomplete="new-password">
                    <div class="action">
                        <button type="submit"> {{ __('auth.Register') }}</button> 
                       
                        <div class="signup">
                            <a href="{{ route('login') }}">{{ __('auth.login') }} ?</a>
                        </div>
                    </div>
                    
    
              </form>
            </div>
        
          </div>
          </div>
      </div>
</body>
</html>



