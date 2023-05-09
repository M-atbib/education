@extends('pages.admin.layouts._master')


@section('title','Apprentissage')

@section('javascript')
<script language="javascript">
   document.addEventListener("DOMContentLoaded", () => {
      const containers = document.querySelectorAll('.apprentissage_detail-chapters_container');

      containers.forEach((container) => {
         const title = container.querySelector('.apprentissage_detail-chapters_container-head');
         const item = container.querySelector('.apprentissage_detail-chapters_container-items');

         title.addEventListener('click', () => {
            if (item.style.display !== "block") {
               item.style.display = "block";
            } else {
               item.style.display = "none";
            }
         })
      })
   })
</script>
@endsection

@section('content')
<div class="apprentissage_detail container-sm">
   <div class="apprentissage_detail-description">
      <div class="apprentissage_detail-description_upsection">
         <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
         <div class="apprentissage_detail-description_upsection-title">
            <h2>Pratique de l'oral</h2>
            <p>Progress: 2/22 classes</p>
         </div>

         <p>
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
         </p>
      </div>

      <div class="progress apprentissage_detail-decription_progress" style="height:3px">
         <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
         </div>
      </div>
   </div>

   <div class="apprentissage_detail-chapters">
      <div class="apprentissage_detail-chapters_container">
         <div class="apprentissage_detail-chapters_container-head" id="title">
            <div class="title">
               <i class="fa-solid fa-chevron-down"></i>
               <h3>01-Introduction to gender</h3>
            </div>
            <p>01h87</p>
         </div>
         <ul class="apprentissage_detail-chapters_container-items" id="items">
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
         </ul>
      </div>

      <div class="apprentissage_detail-chapters_container">
         <div class="apprentissage_detail-chapters_container-head" id="title">
            <div class="title">
               <i class="fa-solid fa-chevron-down"></i>
               <h3>01-Introduction to gender</h3>
            </div>
            <p>01h87</p>
         </div>
         <ul class="apprentissage_detail-chapters_container-items" id="items">
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
         </ul>
      </div>

      <div class="apprentissage_detail-chapters_container">
         <div class="apprentissage_detail-chapters_container-head" id="title">
            <div class="title">
               <i class="fa-solid fa-chevron-down"></i>
               <h3>01-Introduction to gender</h3>
            </div>
            <p>01h87</p>
         </div>
         <ul class="apprentissage_detail-chapters_container-items" id="items">
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
            <li>
               <i class="fa-solid fa-circle-plus"></i>
               <p>polycopie01.pdf</p>
            </li>
         </ul>
      </div>


   </div>

</div>
@endsection