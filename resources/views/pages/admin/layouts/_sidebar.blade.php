<div class="sidebar">
     <div class="sidebar_container" id="dropdown">
          <div class="sidebar_container-dropdown">
               <i class="fa-solid fa-caret-down"></i>
               <p>Sidebar</p>
          </div>

          <div class="sidebar_container-content" id="content">
               <i class="fa-solid fa-xmark" id="close"></i>
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


<script language="javascript">
     document.addEventListener('DOMContentLoaded', () => {
          const dropdown = document.getElementById('dropdown');
          const content = document.getElementById('content');
          const close = document.getElementById('close');

          console.log(dropdown, content, close);

          dropdown.addEventListener('click', () => {
               content.style.display = 'block';
          })

          close.addEventListener('click', () => {
               content.style.display = "none";
          })
     })
</script>