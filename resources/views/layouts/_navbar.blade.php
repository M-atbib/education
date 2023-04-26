
    <div class="container-sm">
        <div class="navbar_pc">
            <div class="logo">
            <a href="{{ route("index") }}"><img src="{{ asset('assets/image/logo.png') }}" alt="logo" ></a> 
            </div>
            <div class="menu">
                <ul>
                    <a href="{{ route("formations.index") }}"><li>{{__("pages/visitor/home.Formations")}}</li></a>
                    <a href="{{ route("enseignantes.index") }}"><li>{{__("pages/visitor/home.Enseignantes")}}</li></a>
                    {{-- {{ dd(Auth::user()) }} --}}
                    @if(Auth::check())
                        <a href="{{ route("logout") }}"><li>Logout</li></a>
                        @if (Auth::user()->type_user == 2)
                            <a href=""><li>Mes formations</li></a>
                            <a href="" id="heart"><li><i class="fa-regular fa-heart"></i> <span><save-component></save-component></span></li></a>
                            @if (Auth::user()->avatar)
                                <a href="{{ route("teacher.dashboard") }}"><li><img src="{{ asset('uploads/teatcher') }}/{{ Auth::user()->avatar }}" alt="" width="50"></li></a>
                            @else
                                <a href="{{ route("teacher.dashboard") }}"><li><img src="{{ asset('uploads/teatcher/avatar.png') }}" alt="" width="50"></li></a>
                            @endif
                        @elseif (Auth::user()->type_user == 1)
                            <a href=""><li>Apprentissage</li></a>
                            <a href="" id="heart"><li><i class="fa-regular fa-heart"></i> <span><save-component></save-component></span></li></a>
                            @if (Auth::user()->avatar)
                                <a href="{{ route("student.index") }}"><li><img src="{{ asset('uploads/student') }}/{{ Auth::user()->avatar }}" alt="" width="50"></li></a>
                            @else
                                <a href="{{ route("student.index") }}"><li><img src="{{ asset('uploads/student/avatar.png') }}" alt="" width="50"></li></a>
                            @endif
                        @else
                            <a href="{{ route("admin.dashboard") }}"><li>Welcom admin</li></a>
                            @if (Auth::user()->avatar)
                                <a href="{{ route("admin.dashboard") }}"><li><img src="{{ asset('uploads/teatcher') }}/{{ Auth::user()->avatar }}" alt="" width="50"></li></a>
                            @else
                                <a href="{{ route("admin.dashboard") }}"><li><img src="{{ asset('uploads/teatcher/avatar.png') }}" alt="" width="50"></li></a>
                            @endif
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="login"><li>{{__("pages/visitor/home.connexion")}}</li></a>
                        <a href="{{ route('register') }}" class="sign_up"><li>{{__("pages/visitor/home.S_inscrire")}}</li></a>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>

