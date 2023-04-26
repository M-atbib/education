
@extends('layouts._master')
@section('title')
{{__("pages/visitor/home.all_cours")}}
@endsection
@section('content')
    <div class="container-sm">
        @livewire('formations')
    </div>  
@stop