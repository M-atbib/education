
@extends('layouts._master')
@section('title')
detail
@endsection
@section('content')
    <div class="container-sm">
      <div class="formation-detail">
        <div class="top-page">
          <p>{{__("pages/visitor/formation.home")}} -> {{__("pages/visitor/formation.Tous_cours")}} -> <span>{{ $formation->title }}</span></p>
        </div>
        <div class="detail">
          <div class="header">
            <h3>{{ $formation->title }}</h3>
            <div>
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
          <div class="col-12">
            <div class="row">
              <div class="col-lg-8">
                <div class="all-informaion">
                  <div class="menu">
                    <ul>
                      <li onclick="description()" class="description_menu">Desciption</li>
                      <li onclick="course()" class="course_menu">{{__("pages/visitor/formation.content")}}</li>
                      <li onclick="Teacher()" class="teacher_menu">{{__("pages/visitor/home.Enseignant")}}</li>
                      <li onclick="Reviews()" class="reviews_menu">{{__("pages/visitor/formation.Reviews")}}</li>
                    </ul>
                  </div>
                  <div class="all_description">
                    <h3 class="description_h3">Description</h3>
                    <div class="description">
                      {{ $formation->description }} 
                    </div>
                    <div class="info_desc">
                     
                      <ul>
                        <li>{{__("pages/visitor/formation.chat_teacher")}}</li>
                        <li>{{__("pages/visitor/formation.chat_mates")}}</li>
                        <li>{{__("pages/visitor/formation.classes_zoom")}}</li>
                        <li>{{__("pages/visitor/formation.download")}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="course">
                    @foreach ($formation->plan() as $plan)
                    <div class="lesson">
                      <p>{{__("pages/visitor/formation.lesson")}} {{ $plan->arrangement_plan }} : {{ $plan->title }}</p>
                      <p>{{ str_replace('.', 'h', number_format($formation->course_duration, 2))}}m</p>
                    </div>
                    @endforeach
                  </div>
                  <div class="teacher">
                    <nav>
                      <div class="image">
                        <img src="{{ asset('uploads/teatcher') }}/{{ $formation->teacher()->avatar }}" alt="IMA_BG" width="100" height="100"> 
                        <p>{{ $formation->teacher()->function }}</p>
                        @if (!empty($formation->teacher()->rating()) )
                          <div class="rating">
                            <span>({{$formation->teacher()->rating_numbre()}})</span><input class="rating"  max="5" step="0.5" style="--value:{{ $formation->teacher()->rating() }}" type="range" value="{{ $formation->teacher()->rating() }}"
                            wire:model="rating" name="rating">
                          </div>
                          @else
                          <div class="rating"> display: flex;<input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0"
                            wire:model="rating" name="rating">
                          </div>
                          @endif
                      </div>
                      <div class="info">
                        <p class="name">{{ $formation->teacher()->name }}</p>
                        <p class="description_teacher">{{ $formation->teacher()->description }} </p>
                      </div>
                    </nav>
                  </div>
                  <div class="reviews">
                    <h3>{{__("pages/visitor/formation.Reviews")}} ({{ $formation->rating_numbre() }})</h3>
                    <div class="all_rating">
                      @foreach ($formation->info_rating() as $rating)
                    <div class="block">
                      <div class="image">
                        <img src="{{ asset('uploads/teatcher') }}/{{ $rating->user_info()->avatar }}" alt="IMA_BG" width="100" height="100"> 
                        <nav>
                          <p class="name">{{ $rating->user_info()->name }}</p>
                          <p class="time">{{$rating->created_at->diffForHumans()}}</p>
                          <div class="rating">
                            <input class="rating"  max="5" step="0.5" style="--value:{{  $rating->rating }}" type="range" value="{{ $rating->rating }}"
                            wire:model="rating" name="rating">
                          </div>
                        </nav>
                      </div>
                      <div class="content">
                        {{ $rating->content }}
                      </div>
                    </div>
                    @endforeach
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="information">
                  <div class="video" id="image" onclick="startvideo()">
                    <img src="{{ asset('uploads/formation') }}/{{ $formation->imageVideo }}" alt="IMA_BG" >
                    <i class="fa-solid fa-circle-play" onclick="startvideo()"></i>
                  </div>
                  <div class="video-play" id="videoPlay">
                       {!! html_entity_decode($formation->video_link) !!}
                        <i class="fa-regular fa-circle-xmark" class="close" onclick="stopvideo()"></i>
                  </div>
                  <div class="price"> 
                    <h3>{{ $formation->price }} Dh</h3>
                    @livewire('save',['formation_id'=> $formation->id])
                  </div>
                  <div class="includes">
                    <p>{{__("pages/visitor/formation.This_includes")}}</p>
                      <ul>
                        <li><i class="fa-solid fa-user"></i> {{ $formation->number_student }} {{__("pages/visitor/formation.student")}}</li>
                        <li><i class="fa-solid fa-comment-dots"></i> {{__("pages/visitor/formation.Chat_pv_teacher")}}</li>
                        <li><i class="fa-solid fa-users"></i> {{__("pages/visitor/formation.chat_pv_mates")}}</li>
                        <li><i class="fa-solid fa-ranking-star"></i> {{__("pages/visitor/formation.Certificate")}}</li>
                        <li><i class="fa-sharp fa-solid fa-clock"></i> {{ calctime($formation->number_class,$formation->course_duration) }}  / {{ $formation->number_month }} {{__("pages/visitor/formation.month")}}  </li>
                        <li><i class="fa-solid fa-cloud-arrow-down"></i> {{__("pages/visitor/formation.Downloadable_resources")}}</li>
                      </ul>
                  </div>
                  {{-- <nav class="pay_info"> --}}
                    {{-- <div class="price">
                      <h3>{{ $formation->price }} Dh</h3>
                    </div> --}}
                    <div class="action">
                      <div class="btn1">
                        <a href="#">{{__("pages/visitor/formation.start")}}</a>
                        {{-- <a href="{{ route('panier.index') }}">{{__("pages/visitor/formation.add_cart")}}</a> --}}
                      </div>
                    
                    </div>
                  {{-- </nav> --}}
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="formation-teacher">
          <p style="margin-top: 20px">{{__("pages/visitor/formation.select_for_you")}} : </span></p>
          <div class="all-formation">
              <div class="main-scroll">
                  <nav>
                      <div><button class="icon" onclick="scrollr()"><i class="fa-solid fa-left-long"></i></button></div>
                      <div><button class="icon" onclick="scrolll()"><i class="fa-solid fa-right-long"></i></button></div>
                  </nav>
                  <div class="cover">
                      <div class="scroll">
                          @foreach ($formation->foryou($formation->id_category,$formation->id) as $formation)
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
@stop



@section('javascript')
<script>
function stopvideo(){

var videos = document.querySelectorAll('iframe, video');
Array.prototype.forEach.call(videos, function (video) {
if (video.tagName.toLowerCase() === 'video') {
  video.pause();
} else {
  var src = video.src;
  video.src = src;
}
});

var videoplay = document.getElementById("videoPlay");
var image = document.getElementById("image");

videoplay.style.display="none";
image.style.display="block";



}

function startvideo(){
var videoplay = document.getElementById("videoPlay");
var image = document.getElementById("image");

videoplay.style.display="block";
image.style.display="none";
}


  var desc = document.querySelector('.all_description')
  var courses = document.querySelector('.course')
  var teachers = document.querySelector('.teacher')
  var reviewss = document.querySelector('.reviews')

  var desc_menu = document.querySelector('.description_menu')
  var courses_menu = document.querySelector('.course_menu')
  var teachers_menu = document.querySelector('.teacher_menu')
  var reviewss_menu = document.querySelector('.reviews_menu')
  teachers.style.display = "none";
  courses.style.display = "none";
  reviewss.style.display = "none";
  desc.style.display = "block";
  desc_menu.style.color = "#EF4565";
function description(){
  teachers.style.display = "none";
  courses.style.display = "none";
  reviewss.style.display = "none";
  desc.style.display = "block";

  desc_menu.style.color = "#EF4565";
  courses_menu.style.color = "#094067";
  teachers_menu.style.color = "#094067";
  reviewss_menu.style.color = "#094067";
}
function course(){
  teachers.style.display = "none";
  courses.style.display = "block";
  reviewss.style.display = "none";
  desc.style.display = "none";
  
  desc_menu.style.color = "#094067";
  courses_menu.style.color = "#EF4565";
  teachers_menu.style.color = "#094067";
  reviewss_menu.style.color = "#094067";
}

function Teacher(){
  teachers.style.display = "block";
  courses.style.display = "none";
  reviewss.style.display = "none";
  desc.style.display = "none";
  
  desc_menu.style.color = "#094067";
  courses_menu.style.color = "#094067";
  teachers_menu.style.color = "#EF4565";
  reviewss_menu.style.color = "#094067";
}
function Reviews(){
  teachers.style.display = "none";
  courses.style.display = "none";
  reviewss.style.display = "block";
  desc.style.display = "none";

  desc_menu.style.color = "#094067";
  courses_menu.style.color = "#094067";
  teachers_menu.style.color = "#094067";
  reviewss_menu.style.color = "#EF4565";
}
</script>
@endsection