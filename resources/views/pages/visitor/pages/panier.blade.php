@extends('layouts._master')
@section('title','Panier')
@section('content')
    <div class="container-sm">
        <div class="panier">
            <div class="top_page">
                <h1>{{__("pages/visitor/home.Panier")}}</h1>
            </div>
            <div class="all">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="formations">
                                @foreach ($formations as $formation)
                                    <div class="block-formation">
                                        <nav>
                                            <div class="img">
                                                <img src="{{ asset('uploads/formation') }}/{{ $formation->imageVideo }}" alt="IMA_BG" >
                                            </div>
                                            <div class="info">
                                                <h3>{{ $formation->title }}</h3>
                                                <div class="rating-block">
                                                    @if (!empty($formation->rating()) )
                                                        <span class="numbre_rating">{{$formation->rating()}}</span>
                                                        <input class="rating"  max="5" step="0.5" style="--value:{{$formation->rating()}}" type="range" value="{{$formation->rating()}}" wire:model="rating" name="rating">
                                                        <span class="numbre_rv">({{$formation->rating_numbre()}})</span>
                                                    @else
                                                        <span class="numbre_rating" style="color: #D9D9D9">0</span>
                                                        <input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0" wire:model="rating" name="rating">
                                                        <span class="numbre_rv">(0)</span>
                                                    @endif
                                                    
                                                </div>
                                                <p><i class="fa-regular fa-user"></i> {{ $formation->number_student }} {{__("pages/visitor/formation.student")}}</p>
                                            </div>
                                        </nav>
                                        <div class="action">
                                            <i class="fa-regular fa-heart" style="color: rgb(255, 93, 93);"></i> <i class="fa-regular fa-trash-can"></i>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="payment">
                                <div class="total">
                                    <p>Total</p>
                                    <h3>150 Dhs</h3>
                                </div>
                                <div class="code">
                                    <label for="code">{{__("pages/visitor/home.code_reduction")}}</label>
                                    <input type="text" id="code" class="code">
                                </div>
                                <button>{{__("pages/visitor/home.pay_now")}}</button>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
@stop