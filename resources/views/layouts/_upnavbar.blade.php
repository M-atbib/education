
    <div class="upnavbar"> 
        <div class="container-sm" style="--bs-gutter-x:3.5rem;"> 
            <div class="lang">
                @if( LaravelLocalization::getCurrentLocale()== "en")
                    <a class="dropdown-item" class="fr" rel="nofollow" hreflang="fr" href="{{ LaravelLocalization::getLocalizedURL("fr", null, [], true) }}">
                        <span><i class="fa-solid fa-globe"></i>{{__("layouts/globale.fr")}}</span>
                    </a>
                @else
                <a class="dropdown-item" class="en" rel="nofollow" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}">
                    <span><i class="fa-solid fa-globe"></i>{{__("layouts/globale.eng")}}</span>
                </a>
                @endif
            </div>
        </div>
    </div>
