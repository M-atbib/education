@extends('pages.admin.layouts._master')


@section('title','Mes Formations')

@section('javascript')
<script language="javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const containers = document.querySelectorAll('.formations-class_courses-course');
        const buttonAddTime = document.getElementById('add-time');
        const addTimePopup = document.querySelector('.formations-class_popup');
        const buttonClose = document.querySelector('.fa-xmark');

        containers.forEach((container) => {
            const title = container.querySelector('.title');
            const item = container.querySelector('.items');

            title.addEventListener('click', () => {
                if (item.style.display !== "block") {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            })
        })

        buttonAddTime.addEventListener('click', () => {
            addTimePopup.style.display = "block";
        })

        buttonClose.addEventListener('click', () => {
            addTimePopup.style.display = 'none'
        })
    })
</script>
@endsection

@section('content')
<div class="formations-class container-sm">
    <div class="formations-class_students">
        <div class="title">
            <h1>Class 08</h1>
            <p id="add-time">Add time</p>
        </div>

        <h2>Students</h2>

        <div class="list">
            <div class="list-item">
                <img src="http://127.0.0.1:8000/uploads/teatcher/avatar.png" />
                <p>Weld nass</p>
            </div>

            <div class="list-item">
                <img src="http://127.0.0.1:8000/uploads/teatcher/avatar.png" />
                <p>Weld nass</p>
            </div>

            <div class="list-item">
                <img src="http://127.0.0.1:8000/uploads/teatcher/avatar.png" />
                <p>Weld nass</p>
            </div>

            <div class="list-item">
                <img src="http://127.0.0.1:8000/uploads/teatcher/avatar.png" />
                <p>Weld nass</p>
            </div>
        </div>
    </div>

    <div class="formations-class_popup">
        <i class="fa-solid fa-xmark"></i>

        <div class="body">
            <h1>Scheduling Form</h1>

            <form action="">
                <label for="date">
                    Date:
                    <input id="date" type="date">
                </label>

                <label for="start">
                    Session Start:
                    <input id="start" type="time">
                </label>

                <label for="end">
                    Session End:
                    <input id="end" type="time">
                </label>

                <button type="submit">Confirm Information</button>
            </form>


        </div>
    </div>

    <div class="formations-class_courses">
        <div class="formations-class_courses-course">
            <div class="title">
                <h2>01 - Introduction to gender</h2>
                <label for="file">
                    <i class="fa-solid fa-plus add"></i>
                </label>
                <input type="file" hidden id="file" />
            </div>

            <ul class="items" id="items">
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
            </ul>
        </div>

        <div class="formations-class_courses-course">
            <div class="title">
                <h2>01 - Introduction to gender</h2>
                <label for="file">
                    <i class="fa-solid fa-plus add"></i>
                </label>
                <input type="file" hidden id="file" />
            </div>

            <ul class="items" id="items">
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
            </ul>
        </div>

        <div class="formations-class_courses-course">
            <div class="title">
                <h2>01 - Introduction to gender</h2>
                <label for="file">
                    <i class="fa-solid fa-plus add"></i>
                </label>
                <input type="file" hidden id="file" />
            </div>

            <ul class="items" id="items">
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
            </ul>
        </div>

        <div class="formations-class_courses-course">
            <div class="title">
                <h2>01 - Introduction to gender</h2>
                <label for="file">
                    <i class="fa-solid fa-plus add"></i>
                </label>
                <input type="file" hidden id="file" />
            </div>

            <ul class="items" id="items">
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
                <li>
                    <i class="fa-solid fa-minus"></i>
                    <p>polycopie01.pdf</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection