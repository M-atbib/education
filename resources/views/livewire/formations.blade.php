<div>
    <div class="formations">
        <div class="top_page">
            <h1>{{__("pages/visitor/home.all_cours")}}</h1>
            <div class="search">
                <input type="text" wire:model="search" class="form-control" placeholder="{{__("pages/visitor/home.Find_your_course")}}">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
              <div class="col-lg-3">
                <div class="categories">
                  <div class="col" wire:click.prevent="all"> All</div>
                  <div class="col" wire:click.prevent="language"> {{__("pages/visitor/home.Language")}}</div>
                  <div class="col"  wire:click.prevent="itdev">{{__("pages/visitor/home.IT")}}</div>
                </div>
              </div>
                <div class="col-lg-9">
                  <div class="row">
                    @if($sous_categorys_itdev)
                    <div class="col">
                          <select wire:model="sous_category_id_itdiv" class="form-select">
                            <option value selected>Tout</option>
                            @foreach ($sous_categorys_itdev as $sous_category)
                                <option value="{{$sous_category->id}}">{{ $sous_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @elseif ($sous_categorys_language)
                    <div class="col">
                          <select wire:model="sous_category_id_language" class="form-select">
                            <option value selected>Tout</option>
                            @foreach ($sous_categorys_language as $sous_category)
                                <option value="{{$sous_category->id}}">{{ $sous_category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                  </div>
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                    @foreach ($formations as $formation )
                    <div class="col">
                        <div class="block">
                          <div class="image">
                            <div class="img_bg">
                              <img src="{{ asset('uploads/formation') }}/{{ $formation->imageVideo }}" alt="IMA_BG" >
                            </div>
                            <div class="img_teacher">
                              <img src="{{ asset('uploads/teatcher') }}/{{ $formation->teacher()->avatar }}" alt="IMA_BG" width="100" height="100">
                            </div>
                            <div class="img_bg_black">
                             
                            </div>
                          </div>
                          <div class="info">
                            <div class="time_rating">
                              <div class="time">
                                <i class="fa-regular fa-clock"></i> {{ calctime($formation->number_class,$formation->course_duration) }}
                              </div>
                            
                             @if (!empty($formation->rating()) )
                              <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:{{ $formation->rating()}}" type="range" value="{{ $formation->rating()}}"
                                wire:model="rating" name="rating"></div>
                              </div>
                              @else
                              <div class="rating"><input class="rating"  max="5" step="0.5" style="--value:0" type="range" value="0"
                                wire:model="rating" name="rating"></div>
                              </div>
                              @endif
                             
                            <div class="title">
                              <h2>{{ $formation->title }}</h2>
                              <p>{{ substr($formation->description, 0, 100) }} @if (strlen($formation->description) >= 22)
                                ...
                            @endif</p>
                            </div>
                          </div>
                          <div >
                            <a href="{{ route('detail-formation' ,$formation->id) }}" class="btn">{{__("pages/visitor/home.more_info")}}</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="row justify-content-center view_more" >
                    <div class="col-12" style="text-align: center;"><a href="more"  wire:click.prevent='view_more'>{{__("pages/visitor/home.view_info")}}</a></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    
 
</div>
