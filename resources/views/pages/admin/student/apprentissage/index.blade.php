@extends('pages.admin.layouts._master')


@section('title','Apprentissage')


@section('content')
<div class="apprentissage_main container-sm">
   <div class="apprentissage_main-course">
      <a class="apprentissage_main-course_link" href="{{ route('apprentissage.detail') }}">
         <div class="apprentissage_main-course_link-title">
            <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
            <div>
               <h3>Pratique de l'oral</h3>
               <p>Progress: 2/22 classes</p>
            </div>
         </div>
         <i class="fa-solid fa-angle-right"></i>
      </a>
   </div>

   <div class="apprentissage_main-course">
      <a class="apprentissage_main-course_link" href="{{ route('apprentissage.detail') }}">
         <div class="apprentissage_main-course_link-title">
            <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
            <div>
               <h3>Pratique de l'oral</h3>
               <p>Progress: 2/22 classes</p>
            </div>
         </div>
         <i class="fa-solid fa-angle-right"></i>
      </a>
   </div>

   <div class="apprentissage_main-course">
      <a class="apprentissage_main-course_link" href="{{ route('apprentissage.detail') }}">
         <div class="apprentissage_main-course_link-title">
            <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
            <div>
               <h3>Pratique de l'oral</h3>
               <p>Progress: 2/22 classes</p>
            </div>
         </div>
         <i class="fa-solid fa-angle-right"></i>
      </a>
   </div>

</div>
@endsection

<div class="progress">
   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
   </div>
</div>