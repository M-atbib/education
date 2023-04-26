@include('includes._header')
@include('layouts._upnavbar')
<div class="app" id="app"> 
    @include('layouts._navbar')
    @include('layouts._navbarmobile')
    @section('content')
   
    @show
</div>
@include('layouts._footer')
@include('includes._footer')