@extends('pages.admin.layouts._master')


@section('title','Group Chat')

@section('javascript')
<script language="javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const chat = document.getElementById('chat');
        const course = document.querySelectorAll('.groupchat_courses_list_course');
        const coursesList = document.getElementById('courses-list');
        const contact = document.getElementById('contact');

        const windowWidth = window.innerWidth;

        course.forEach((course) => {
            course.addEventListener('click', () => {
                chat.style.display = 'flex';
                coursesList.style.display = 'none';
            });
        })

        contact.addEventListener('click', () => {
            chat.style.display = 'none';
            coursesList.style.display = 'block';
        })
    })
</script>
@endsection

@section('content')
<div class="groupchat container-sm">
    <div class="groupchat_chat" id="chat">
        <div class="groupchat_chat_head" id="contact">
            <div class="groupchat_chat_head_left">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <h2>Pratique de l'oral</h2>
            </div>
            <div class="line"></div>
            <p>Class 08</p>
        </div>

        <div class="groupchat_chat_body">
            <!--<div class="groupchat_chat_body_msgs">
                <div class="groupchat_chat_body_msgs_rightmsg">
                    <small>08:99AM</small>
                    <p>mal din dinmak makatselli alo alo alo reseaus walo</p>
                </div>

                <div class="groupchat_chat_body_msgs_leftmsg">
                    <p>Aloo salamo 3alyakom</p>
                    <small>09:99AM</small>
                </div>
                <div class="groupchat_chat_body_msgs_rightmsg">
                    <small>08:99AM</small>
                    <p>mal din dinmak makatselli alo alo alo reseaus walo</p>
                </div>

                <div class="groupchat_chat_body_msgs_leftmsg">
                    <p>Aloo salamo 3alyakom</p>
                    <small>09:99AM</small>
                </div>
                <div class="groupchat_chat_body_msgs_rightmsg">
                    <small>08:99AM</small>
                    <p>mal din dinmak makatselli alo alo alo reseaus walo</p>
                </div>

                <div class="groupchat_chat_body_msgs_leftmsg">
                    <p>Aloo salamo 3alyakom</p>
                    <small>09:99AM</small>
                </div>
                <div class="groupchat_chat_body_msgs_rightmsg">
                    <small>08:99AM</small>
                    <p>mal din dinmak makatselli alo alo alo reseaus walo</p>
                </div>

                <div class="groupchat_chat_body_msgs_leftmsg">
                    <p>Aloo salamo 3alyakom</p>
                    <small>09:99AM</small>
                </div>
                <div class="groupchat_chat_body_msgs_rightmsg">
                    <small>08:99AM</small>
                    <p>mal din dinmak makatselli alo alo alo reseaus walo</p>
                </div>

                <div class="groupchat_chat_body_msgs_leftmsg">
                    <p>Aloo salamo 3alyakom</p>
                    <small>09:99AM</small>
                </div>
            </div>-->

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

    <div class="groupchat_courses" id="courses-list">
        <h2>Formation</h2>
        <input type="text" name="search" id="search" placeholder="Search..">

        <div class="groupchat_courses_list">
            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>

            <div class="line"></div>

            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
            <div class="line"></div>

            <div class="groupchat_courses_list_course" id="course">
                <img src="http://127.0.0.1:8000/uploads/student/img.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Pratique de l'oral</h3>
                    <p>Progress: 2/22 classes</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection