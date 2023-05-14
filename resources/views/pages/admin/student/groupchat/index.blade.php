@extends('pages.admin.layouts._master')


@section('title','Group Chat')

@section('javascript')
<script language="javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const chatClass = document.querySelector('.groupchat_chat');
        const courseClass = document.querySelectorAll('.groupchat_courses_list_course');
        const coursesListClass = document.querySelector('.groupchat_courses');
        const contactClass = document.querySelector('.groupchat_chat_head');

        let windowWidth = window.innerWidth;
        if (windowWidth < 900) {
            chatClass.setAttribute('id', 'chat');
            coursesListClass.setAttribute('id', 'course-list');
            contactClass.setAttribute('id', 'contact');
            courseClass.forEach((course) => {
                course.classList.add("course");
            })

            chatId = document.getElementById('chat');
            coursesListId = document.getElementById('course-list');
            contactId = document.getElementById('contact');
            courseId = document.querySelectorAll('.course');

            courseId.forEach((course) => {
                course.addEventListener('click', () => {
                    chatId.style.display = 'flex';
                    coursesListId.style.display = 'none';
                });
            })

            contactId.addEventListener('click', () => {
                chatId.style.display = 'none';
                coursesListId.style.display = 'block';
            })

        } else if (windowWidth >= 900) {
            chatClass.removeAttribute('id');
            coursesListClass.removeAttribute('id');
            contactClass.removeAttribute('id');
            courseClass.forEach((course) => {
                course.classList.remove('course');
            })

            console.log(chatClass);
        }

    })
</script>
@endsection

@section('content')
<div class="groupchat container-sm">
    <div class="groupchat_chat">
        <div class="groupchat_chat_head">
            <div class="groupchat_chat_head_left">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <h2>Pratique de l'oral</h2>
            </div>
            <div class="line"></div>
            <p>Class 08</p>
        </div>

        <div class="groupchat_chat_body">
            <div class="card groupchat_chat_body_msgs">
                <div id="sohbet" class="card">

                    <div class="balon1 p-2 m-0 position-relative" data-is="You - 3:20 pm">
                        <a class="float-right"> Hey there! What's up? </a>
                    </div>

                    <div class="balon2 p-2 m-0 position-relative" data-is="Yusuf - 3:22 pm">
                        <a class="float-left"> Checking out iOS7 you know.. </a>
                    </div>

                    <div class="balon1 p-2 m-0 position-relative" data-is="You - 3:23 pm">
                        <a class="float-right"> Check out this bubble! </a>
                    </div>

                    <div class="balon2 p-2 m-0 position-relative" data-is="Yusuf - 3:26 pm">
                        <a class="float-left"> It's pretty cool! </a>
                    </div>

                    <div class="balon1 p-2 m-0 position-relative" data-is="You - 3:28 pm">
                        <a class="float-right"> Yeah it's pure CSS & HTML </a>
                    </div>

                    <div class="balon2 p-2 m-0 position-relative" data-is="Yusuf - 3:33 pm">
                        <a class="float-left"> Wow that's impressive. But what's even more impressive is that this bubble is really high. </a>
                    </div>
                </div>

            </div>

            <div class="groupchat_chat_body_typemsg">
                <input type="text" name="message" id="message" placeholder="Message...">
                <button class="send" type="submit">Send</button>
            </div>
        </div>
    </div>

    <div class="groupchat_courses">
        <h2>Formation</h2>
        <input type="text" name="search" id="search" placeholder="Search..">

        <div class="groupchat_courses_list">
            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>

            <div class="line"></div>

            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>
</div>
@endsection