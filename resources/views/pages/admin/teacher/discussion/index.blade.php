@extends('pages.admin.layouts._master')


@section('title','Discussion')

@section('javascript')
<script language="javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const chat = document.querySelector(".groupchat_chat");
        const contacts = document.querySelectorAll(".groupchat_courses_list_course");
        const head = document.querySelector(".groupchat_chat_head");
        const smallDevice = window.matchMedia("(max-width: 900px)");

        smallDevice.addEventListener("change", handleDeviceChange);
        handleDeviceChange(smallDevice);

        function handleDeviceChange(e) {
            if (e.matches) chat.classList.add("groupchat_chat--mobile");
            else chat.classList.remove("groupchat_chat--mobile");
        }

        contacts.forEach((contact) => {
            contact.addEventListener("click", () => {
                chat.classList.add("groupchat_chat--show");
            });
        })

        head.addEventListener("click", () => {
            chat.classList.remove("groupchat_chat--show");
        });

    })
</script>
@endsection

@section('content')
<div class="groupchat container-sm">
    <div class="groupchat_chat">
        <div class="groupchat_chat_head">
            <div class="groupchat_chat_head_left">
                <i class="fa-solid fa-angle-left"></i>
                <img src="http://127.0.0.1:8000/uploads/student/man.png" alt="course" />
                <h2>Weld nass</h2>
            </div>
            <div class="line"></div>
            <p>C1 Pratique de l'oral</p>
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
        <h2>Profs</h2>
        <input type="text" name="search" id="search" placeholder="Search..">

        <div class="groupchat_courses_list">
            <div class="groupchat_courses_list_course active">
                <img src="http://127.0.0.1:8000/uploads/student/man.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Weld nass</h3>
                    <div class="last-msg">
                        <p>ach bat inaka?</p>
                        <p>11:79 pm</p>
                    </div>
                </div>
            </div>

            <div class="line"></div>

            <div class="groupchat_courses_list_course">
                <img src="http://127.0.0.1:8000/uploads/student/man.png" alt="course" />
                <div class="groupchat_courses_course_title">
                    <h3>Weld nass</h3>
                    <div class="last-msg">
                        <p>ach bat inaka?</p>
                        <p>11:79 pm</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection