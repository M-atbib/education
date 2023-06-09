<div class="sidebar">
     <div class="sidebar_container">
          <div class="sidebar_container-dropdown">
               <i class="fa-solid fa-caret-down"></i>
               <p>Sidebar</p>
          </div>

          <div class="sidebar_container-content">
               <i class="fa-regular fa-circle-xmark"></i>
               @if (Auth::user()->type_user == 1)
               @include('pages.admin.layouts.sidebar._student')
               @elseif (Auth::user()->type_user == 2)
               @include('pages.admin.layouts.sidebar._teacher')
               @else
               @include('pages.admin.layouts.sidebar._superadmin')
               @endif
          </div>
     </div>
</div>