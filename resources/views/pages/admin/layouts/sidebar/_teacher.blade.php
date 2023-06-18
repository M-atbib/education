<ul>
    <a href="{{route('mesformations.index')}}" class="@if (Route::currentRouteName() == 'mesformations.index') active @endif">
        <i class="fa-solid fa-graduation-cap"></i>
        Mes formations
    </a>

    <a href="{{ route('discussion.index') }}" class="@if (Route::currentRouteName() == 'discussion.index') active @endif">
        <i class="fa-solid fa-comments"></i>
        Discussion
    </a>

    <a href="{{ route('paiment.index') }}" class="@if (Route::currentRouteName() == 'paiment.index') active @endif">
        <i class="fa-solid fa-credit-card"></i>
        Paiments
    </a>

    <a href="{{ route('emploitemp.index') }}" class="@if (Route::currentRouteName() == 'emploitemp.index') active @endif">
        <i class="fa-solid fa-certificate"></i>
        Emploi de temps
    </a>
</ul>