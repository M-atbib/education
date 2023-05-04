<div class="sidebar">
     @if (Auth::user()->type_user == 1)
     @include('pages.admin.layouts.sidebar._student')
     @elseif (Auth::user()->type_user == 2)
     @include('pages.admin.layouts.sidebar._teacher')
     @else
     @include('pages.admin.layouts.sidebar._superadmin')
     @endif
</div>