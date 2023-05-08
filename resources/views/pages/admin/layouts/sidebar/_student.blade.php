<ul>
    <a class="@if (Route::currentRouteName() == 'apprentissage.index') active @endif" href="{{ route('apprentissage.index') }}">
        <i class="fa-solid fa-graduation-cap"></i>
        Apprentissage
    </a>
    <a href="">
        <i class="fa-solid fa-comments"></i>
        Group chat
    </a>
    <a href="#">
        <i class="fa-solid fa-comment"></i>
        Chat prof
    </a>
    <a href="#">
        <i class="fa-solid fa-credit-card"></i>
        Paiments
    </a>
    <a href="#">
        <i class="fa-solid fa-certificate"></i>
        Attestation
    </a>
    <a class="@if (Route::currentRouteName() == 'emploi.index') active @endif" href="{{ route('emploi.index') }}">
        <i class="fa-solid fa-calendar-check"></i>
        Emploi du temps
    </a>
</ul>