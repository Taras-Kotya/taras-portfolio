@extends('layout')
@section('content')
@parent
<section class="u-align-center u-clearfix u-image u-section-1" style='background-image: url("/images/{{ $site->photo_back }}") !important' id="carousel_a717" data-image-width="644" data-image-height="640">
    <div class="u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1"></div>
    <div style='background-image: url("/images/{{ $site->photo_colo }}") !important' alt="" class="u-border-8 u-border-white u-image u-image-circle u-image-1" data-image-width="644" data-image-height="640"></div>
    <h2 class="u-text u-text-body-alt-color u-text-1">
        <b>{{ $site->title }} <span style="font-weight: 400;">{{ $site->title_user }}</span></b>
    </h2>
    <p class="u-text u-text-body-alt-color u-text-2">{{ $site->welcome_content }}</p>
    <p class="u-text u-text-3">&nbsp;&nbsp;<br>
    </p>
    <a href="#sec-7c5b" class="u-active-none u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">
        дивитись далі
    </a>
</section>


<section class="u-clearfix u-grey-10 u-valign-top-lg u-valign-top-xl u-section-2" id="sec-7c5b">
    <div class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-1"></div>
    <div class="u-clearfix u-gutter-50 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-top u-container-layout-1">
                        <h2 class="u-align-left u-text u-text-1">Я - <span style="font-weight: 700;">{{ $site->specialty }}</span>
                        </h2>
                        <img src="/images/{{ $site->photo1 }}" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="720" data-image-height="1080">
                    </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                        <img class="u-expanded-width u-image u-image-2" src="/images/{{ $site->photo2 }}" data-image-width="720" data-image-height="1080">
                        <p class="u-align-left u-text u-text-2">Photograph: <a href="https://www.instagram.com/annaomela/" class="u-border-1 u-border-black u-btn u-button-link u-button-style u-none u-text-body-color u-btn-1" target="_blank">inst: @AnnaOmela</a>
                        </p>
                        <a href="/about" class="u-border-2 u-border-grey-dark-1 u-btn u-button-style u-none u-btn-2">читати далі</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection