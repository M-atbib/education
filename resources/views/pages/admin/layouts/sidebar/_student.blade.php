<ul>
    <a href="{{ route('apprentissage.index') }}" class="@if (Route::currentRouteName() == 'apprentissage.index' || Route::currentRouteName() == 'apprentissage.detail') active @endif">
        <i class="fa-solid fa-graduation-cap"></i>
        Apprentissage
    </a>
    <a href="{{ route('groupchat.index') }}" class="@if (Route::currentRouteName() == 'groupchat.index') active @endif">
        <i class="fa-solid fa-comments"></i>
        Group chat
    </a>
    <a href="{{ route('profchat.index') }}" class="@if (Route::currentRouteName() == 'profchat.index') active @endif">
        <i class="fa-solid fa-comment"></i>
        Chat prof
    </a>
    <a href="{{ route('paiements.index') }}" class="@if (Route::currentRouteName() == 'paiements.index') active @endif">
        <i class="fa-solid fa-credit-card"></i>
        Paiments
    </a>
    <a href="{{ route('attestation.index') }}" class="@if (Route::currentRouteName() == 'attestation.index') active @endif">
        <i class="fa-solid fa-certificate"></i>
        Attestation
    </a>
    <a href="{{ route('emploi.index') }}" class="@if (Route::currentRouteName() == 'emploi.index') active @endif">
        <i class="fa-solid fa-calendar-check"></i>
        Emploi du temps
    </a>
</ul>