
@extends('layouts._master')
@section('title')
{{__("pages/visitor/home.Enseignant")}}
@endsection
@section('content')
    <div class="container-sm">
        <div class="teacher">
            <div class="top_page">
                <h1>{{__("pages/visitor/home.Enseignant")}}</h1>
            </div>
            <div class="detail">
                <div class="prof">
                    <div class="content">
                        <h3>{{ $teacher->name }}</h3>
                        <p>{{ $teacher->function }}</p>
                        @if (!empty($teacher->rating()) )
                        <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:{{ $teacher->rating() }}" type="range" value="{{ $teacher->rating()}}"
                          wire:model="rating" name="rating"><span>({{$teacher->rating_numbre()}})</span>
                        </div>
                        @else
                        <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0"
                          wire:model="rating" name="rating"><span>(0)</span>
                        </div>
                        @endif
                    </div>
                    <div class="img">
                        <img src="{{ asset('uploads/teatcher') }}/{{ $teacher->avatar }}" alt="IMA_BG" width="100" height="100"> 
                    </div>
                </div>
                <div class="description">
                    <h3>Description</h3>
                    <p>{{ $teacher->description }}</p>
                </div>
                <div class="formation-teacher">
                    <p>{{__("pages/visitor/home.Formations_par")}} : <span>{{ $teacher->name }}</span></p>
                    <div class="all-formation">
                        <div class="main-scroll">
                            <nav>
                                <div><button class="icon" onclick="scrollr()"><i class="fa-solid fa-left-long"></i></button></div>
                                <div><button class="icon" onclick="scrolll()"><i class="fa-solid fa-right-long"></i></button></div>
                            </nav>
                            
                            <div class="cover">
                                <div class="scroll">
                                    @foreach ($formations as $formation)
                                    <div class="block">
                                        <div class="image">
                                          <div class="img_bg">
                                            <img src="{{ asset('uploads/formation') }}/{{ $formation->imageVideo }}" alt="IMA_BG" >
                                          </div>
                                          <div class="img_teacher">
                                            <img src="{{ asset('uploads/teatcher') }}/{{ $formation->teacher()->avatar }}" alt="IMA_BG" width="100" height="100">
                                          </div>
                                        </div>
                                        <div class="info">
                                          <div class="time_rating">
                                            <div class="time">
                                              <i class="fa-regular fa-clock"></i> {{ calctime($formation->number_class,$formation->course_duration) }}
                                            </div>
                                          
                                           @if (!empty($formation->rating()) )
                                            <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:{{ $formation->rating() }}" type="range" value="{{ $formation->rating() }}"
                                              wire:model="rating" name="rating"></div>
                                            </div>
                                            @else
                                            <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0"
                                              wire:model="rating" name="rating"></div>
                                            </div>
                                            @endif
                                           
                                          <div class="title">
                                            <h2>{{ $formation->title }}</h2>
                                            <p>{{ substr($formation->description, 0, 100) }} @if (strlen($formation->description) >= 22)
                                              ...
                                          @endif</p>
                                          </div>
                                        </div>
                                        <div >
                                          <a href="{{ route('detail-formation' ,$formation->id) }}" class="btn">{{__("pages/visitor/home.more_info")}}</a>
                                        </div>
                                    </div>  
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@stop


