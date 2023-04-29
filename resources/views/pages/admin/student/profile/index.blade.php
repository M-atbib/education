@extends('pages.admin.layouts._master')


@section('title','Home student')

@section('javascript')
<script language="javascript">
   const profilTitle = document.getElementById("title_profile");
   const passwordTitle = document.getElementById("title_password");
   const profilEdit = document.getElementById("edit-profile");
   const passwordEdit = document.getElementById("edit-password");

   profilTitle.classList.add("active_title");

   function handleChange(value){
      if(value == "password"){
         console.log("hillo");
         passwordTitle.classList.add("active_title");
         profilEdit.classList.add("hide");
         passwordEdit.classList.add("open");
         profilTitle.classList.remove("active_title");
         console.log(passwordTitle, profilEdit, passwordEdit, profilTitle)
         
      }else if(value == "profil"){
         console.log("hi");
         profilEdit.classList.add("active");
         passwordTitle.classList.remove("active_title");
         passwordEdit.classList.remove("open");
      }
   }
</script>
@endsection

@section('content')
<div class="profile">
   <div class="profile_titles">
      <h3 id="title_profile" onclick="handleChange('profil')">Profil</h3>
      <h3 id="title_password" onclick="handleChange('password')">Password</h3>
   </div>
   <div class="profile_main">
      <div class="profile_main-pic">
      <div class="profile_main-pic_img">
         <img src="http://127.0.0.1:8000/uploads/student/zouhir.png" alt="profile"/>
         <i class="fa-solid fa-pen-to-square"></i>
      </div>
      <p>Student</p>
   </div>
   
   <div class="profile_main-edit">
      <div class="profile_main-edit_profil" id="edit-profile">
         <input type="text" placeholder="Full name"/>
         <input type="text" placeholder="City"/>
         <input type="number" placeholder="Telephone"/>
         <input type="email" placeholder="Email"/>
         <input type="address" placeholder="Address"/>
         <button type="submit">Update</button>
      </div>

      <div class="profile_main-edit_password" id="edit-password">
         <input type="password" placeholder="Old Password"/>
         <input type="password" placeholder="New Password"/>
         <button>Update</button>
      </div>
   </div>
   </div>
</div>
@endsection

