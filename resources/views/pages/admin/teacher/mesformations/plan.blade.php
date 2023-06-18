@extends('pages.admin.layouts._master')


@section('title','Mes Formations')


@section('content')
<div class="formations-plan container-sm">
    <div class="formations-plan_plans">
        <h1>Plan</h1>

        <div class="formations-plan_plans-list">
            <div class="formations-plan_plans-list_items">
                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>04</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>
                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>04</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>
                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>04</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>
                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>04</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>

                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>03</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>

                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>02</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>

                <div class="item">
                    <div class="left">
                        <i class="fa-solid fa-bars"></i>
                        <p>01</p>
                        <h2>Plan de temps</h2>
                    </div>
                    <p>1h30m</p>
                </div>

            </div>

            <div class="formations-plan_plans-list_add">
                <input type="text" name="title" placeholder="Plan title..." />
                <button>Ajouter</button>
            </div>
        </div>


    </div>

    <div class="formations-plan_groups">
        <h1>Groups</h1>

        <div class="formations-plan_groups-list">
            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>

            <a href="{{ route('mesformations.class') }}" class="formations-plan_groups-list_item">
                <div class="title">
                    <h2>Class 08</h2>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="profiles">
                    <img src="http://127.0.0.1:8000/uploads/teatcher/27.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/38.jpg" width="200" />
                    <img src="http://127.0.0.1:8000/uploads/teatcher/50.jpg" width="200" />
                    <div class="profiles-more">+09</div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection