<div class="navbar_master_mobile">
    <div class="navbar_mobile">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-solid fa-bars"></i>
            </div>
            @auth
              @if (Auth::user()->type_user == 1)
                  <a id="heart"><i class="fa-regular fa-heart"></i> <span><save-component></save-component></span></a>
              @elseif (Auth::user()->type_user == 2)
                  <a id="heart"><i class="fa-regular fa-heart"></i> <span><save-component></save-component></span></a>
              @endif
            @endauth
            <div class="logo">
                <img src="{{ asset('assets/image/logo.png') }}" alt="logo" >
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              @if(Auth::check())
              <div class="user">
                @if (Auth::user()->type_user == 2)
                  <nav>
                    @if (Auth::user()->avatar)
                      <a href="{{ route("teacher.dashboard") }}"><img src="{{ asset('uploads/teatcher') }}/{{ Auth::user()->avatar }}" alt="" width="50"></a>
                    @else
                        <a href="{{ route("teacher.dashboard") }}"><img src="{{ asset('uploads/teatcher/avatar.png') }}" alt="" width="50"></a>
                    @endif
                  </nav>
                  <nav>
                    <a href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                    <a href="{{ route('login') }}">{{ Auth::user()->function }}</a>
                  </nav>
                @elseif (Auth::user()->type_user == 1)
                <nav>
                  @if (Auth::user()->avatar)
                    <a href="{{ route("student.index") }}"><img src="{{ asset('uploads/student') }}/{{ Auth::user()->avatar }}" alt="" width="50"></a>
                  @else
                      <a href="{{ route("student.index") }}"><img src="{{ asset('uploads/student/avatar.png') }}" alt="" width="50"></a>
                  @endif
                </nav>
                <nav>
                  <a href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                  <a href="{{ route('login') }}">{{ Auth::user()->function }}</a>
                </nav>
                @else
                <nav>
                  @if (Auth::user()->avatar)
                    <a href="{{ route("teacher.dashboard") }}"><img src="{{ asset('uploads/teatcher') }}/{{ Auth::user()->avatar }}" alt="" width="50"></a>
                  @else
                      <a href="{{ route("teacher.dashboard") }}"><img src="{{ asset('uploads/teatcher/avatar.png') }}" alt="" width="50"></a>
                  @endif
                </nav>
                <nav>
                  <a href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                  <a href="{{ route('login') }}">{{ Auth::user()->function }}</a>
                </nav>
                @endif
              </div>

              @else
                <div class="loginmobile">
                  <a href="{{ route('login') }}">{{__("pages/visitor/home.connexion")}}</a>
                  <a href="{{ route('register') }}">{{__("pages/visitor/home.S_inscrire")}}</a>
                </div>
              @endif
             
              <div class="solution">
                @auth
                  @if (Auth::user()->type_user == 1)
                    <a href="">Mes formations</a>
                  @elseif (Auth::user()->type_user == 2)
                    <a href="">Apprentissage</a>
                  @endif
                @endauth
                <a href="{{ route("formations.index") }}">{{__("pages/visitor/home.Formations")}}</a>
                <a href="{{ route("enseignantes.index") }}">{{__("pages/visitor/home.Enseignantes")}}</a>
                <a href=""{{__("pages/visitor/home.Devenir_formateur")}}></a>
              </div>
              <div class="suuport">
                <h2>{{__("pages/visitor/home.Support")}}</h2>
                <a href="#">{{__("pages/visitor/home.aide")}}</a>
                <a href="#">{{__("pages/visitor/home.contacter")}}</a>
                <a href="#">{{__("pages/visitor/home.FAQ")}}</a>
                <a href="mailto:support@H&EAcadeym">support@H&EAcadeym</a>
              </div>
            </div>
          </nav>
    </div>
   
</div>