@extends('pages.admin.layouts._master')


@section('title','Home student')

@section('javascript')
<script language="javascript">
   document.addEventListener("DOMContentLoaded", () => {
      const profilTitle = document.getElementById("title_profile");
      const passwordTitle = document.getElementById("title_password");
      const profilEdit = document.getElementById("edit-profile");
      const passwordEdit = document.getElementById("edit-password");

      const profilePic = document.getElementById("profile_pic");
      const icon = document.getElementById('icon');
      const inputFile = document.getElementById('file');

      profilTitle.addEventListener('click', () => {
         passwordTitle.classList.remove("active_title");
         profilTitle.classList.add("active_title");
         passwordEdit.style.display = "none";
         profilEdit.style.display = "flex";
      });

      passwordTitle.addEventListener('click', () => {
         passwordTitle.classList.add("active_title");
         profilTitle.classList.remove("active_title");
         passwordEdit.style.display = "flex";
         profilEdit.style.display = "none";
         
      });

      icon.addEventListener("click", () => {
         file.style.visibility = "visible";
         profilePic.style.opacity="0";
      })
   })
</script>
@endsection

@section('content')
<div class="profile">
      <div class="profile_pic">
         <div class="profile_pic-img" id="profile_pic">
            <img src="http://127.0.0.1:8000/uploads/student/zouhir.png"  alt="profile" />
            <i class="fa-solid fa-pen-to-square" id="icon"></i>
         </div>
         <p>Student</p>
         <input type="file" id="file"/>
      </div>
   
      <div class="profile_edit">
         <div class="profile_edit-titles">
            <h3 class="active_title" id="title_profile">Profil</h3>
            <h3 id="title_password">Password</h3>
         </div>
         <div class="profile_edit-profil" id="edit-profile">
            <input type="text" placeholder="Full name"/>
            <input type="text" placeholder="City"/>
            <input type="number" placeholder="Telephone"/>
            <input type="email" placeholder="Email"/>
            <input type="address" placeholder="Address"/>
            <button type="submit">Update</button>
         </div>

         <div class="profile_edit-password" id="edit-password">
            <input type="password" placeholder="Old Password"/>
            <input type="password" placeholder="New Password"/>
            <button>Update</button>
         </div>
      </div>
   
</div>
@endsection

