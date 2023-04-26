
@extends('layouts._master')
@section('title')
{{__("pages/visitor/home.Enseignantes")}}
@endsection
@section('content')
    <div class="container-sm">
       @livewire('teachers')
    </div>  
@stop



