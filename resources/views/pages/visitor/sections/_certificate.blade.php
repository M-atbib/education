<div class="container-sm">
        <div class="certificate">
        <div class="image">
            <img src="{{ asset('assets/image/certificate.png') }}" alt="img_certificate">
        </div>
        <div class="infocertificate">
            <h1>{{__("pages/visitor/home.certificate")}}</h1>
            <ul>
                <li><i class="fa-solid fa-check"></i>{{__("pages/visitor/home.Register")}}</li>
                <li><i class="fa-solid fa-check"></i>{{__("pages/visitor/home.Choose")}}</li>
                <li><i class="fa-solid fa-check"></i>{{__("pages/visitor/home.Finish")}}</li>
                <li><i class="fa-solid fa-check"></i>{{__("pages/visitor/home.Get_your_certificate")}}</li>
            </ul>
            {{-- <img src="{{ asset('assets/image/Get_your_certificate.png') }}" alt="Get_your_certificate"> --}}
            <div class="link">
                <a href="{{ route('formations.index') }}">{{__("pages/visitor/home.Start")}}</a>
            </div>
        </div>
    </div>
</div>
      