@extends('layouts._master')
@section('title','Home')
@section('content')
   @include('pages.visitor.sections._silde')
   @include('pages.visitor.sections._formation')
   @include('pages.visitor.sections._certificate')
   @include('pages.visitor.sections._mobileapp')
@stop

@section('stylesheet')
<style>
   .footer{
      background-color: white !important;
   }
</style>
@stop
