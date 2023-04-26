<div>
    <div class="teachers">
        <div class="top_page">
            <h1>{{__("pages/visitor/home.all_teacher")}}</h1>
            <div class="search">
                <input type="text" wire:model="search" class="form-control" placeholder="{{__("pages/visitor/home.Find_your_teacher")}}">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="col-12" id="all">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach ($teachers_all as $teacher)
                <div class="col">
                    <a href="{{ route('detail-teacher' , $teacher->id) }}">
                    <div class="block">
                        <div class="img">
                            <img src="{{ asset('uploads/teatcher') }}/{{ $teacher->avatar }}" alt="IMA_BG" width="100" height="100"> 
                        </div>
                        <div class="content">
                            <h3>{{ $teacher->name }}</h3>
                            <p>{{ $teacher->function }}</p>
                            @if (!empty($teacher->rating()) )
                            <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:{{ $teacher->rating() }}" type="range" value="{{ $teacher->rating() }}"
                              wire:model="rating" name="rating"><span>({{$teacher->rating_numbre()}})</span>
                            </div>
                            @else
                            <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0"
                              wire:model="rating" name="rating"><span>(0)</span>
                            </div>
                            @endif
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center view_more" >
                <div class="col-12" style="text-align: center;"><a href="more"  wire:click.prevent='view_more'>{{__("pages/visitor/home.view_info")}}</a></div>
              </div>
        </div>
    </div>
</div>
