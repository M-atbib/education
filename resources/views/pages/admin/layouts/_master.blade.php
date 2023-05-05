 
@include('pages.admin.includes._header')
@include('pages.admin.layouts._upnavbar')
<div class="app" id="app">      
     @include('pages.admin.layouts._navbar')
     @include('pages.admin.layouts._navbarmobile')   
     <div class="content_block">
          @include('pages.admin.layouts._sidebar')   
          <div class="main">
               @section('content')

               @show
               @include('layouts._footer')
          </div>
     </div>
</div>

@include('pages.admin.includes._footer')


@section('javascript')
<script language="javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const dropdown = document.getElementById('dropdown');
        const content = document.getElementById('content');
        const close = document.getElementById('close');

        dropdown.addEventListener('click', () => {
            content.style.display = 'block';
        })

        close.addEventListener('click', () => {
            content.style.display = "none";
        })
    })
</script>
@endsection