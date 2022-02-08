@extends('layout')
@section('content')
@parent
<section class="u-align-center u-clearfix u-white u-section-5" id="carousel_68c0">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-2-base u-text-1">{{ $contacts->welcome }}</h1>
        <p class="u-large-text u-text u-text-variant u-text-2">{{ $contacts->welcome_content }}</p>
        <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-round u-radius-20 u-image-1" alt="" data-image-width="997" data-image-height="700" src="/images/IMG_2182.JPG">
        <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-palette-2-base u-radius-20 u-shape-round u-group-1">
            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-3">Ім'я</h6>
                <p class="u-custom-font u-text u-text-4">{{ $contacts->name }}</p>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-5">День Народження</h6>
                <p class="u-custom-font u-text u-text-6">{{ $contacts->birthday }}</p>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-7">Спеціальність</h6>
                <p class="u-custom-font u-text u-text-8">{{ $contacts->specialty }}</p>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-9">Email</h6>
                <a href="mailto:{{ $contacts->email }}@example.com" style="color: #fff" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">
                    {{ $contacts->email }}@example
                    <span style="font-weight: 700;">
                        <span style="font-weight: 400;"></span>
                    </span>.com
                </a>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-10">Телефон</h6>
                <a href="tel:+987987654321" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-2">{{ $contacts->number }}</a>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-11">Веб-сайт</h6>
                <a href="#" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-3">{{ $contacts->site }}</a>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-12">Місто</h6>
                <p class="u-custom-font u-text u-text-13">{{ $contacts->city }}</p>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-14">Віра</h6>
                <p class="u-custom-font u-text u-text-15">{{ $contacts->believer }}</p>
                <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-14">Хоббі</h6>
                <p class="u-custom-font u-text u-text-15">{{ $contacts->hobby }}</p>
            </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-valign-middle-xxl u-container-layout-2">
                        <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-16">Вік</p>
                        <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-17" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">{{ $contacts->age }}</h3>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-valign-middle-xxl u-container-layout-3">
                        <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-18">Років у сфері</p>
                        <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-19" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">{{ $contacts->year_in_special }}+</h3>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-valign-middle-xxl u-container-layout-4">
                        <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-20">Клієнтів</p>
                        <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-21" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">{{ $contacts->clients_in_special }}</h3>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                    <div class="u-container-layout u-similar-container u-valign-middle-xxl u-container-layout-5">
                        <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-22">Особистих проектів</p>
                        <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-23" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">{{ $contacts->project_in_special }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ $contacts->button_url }}" class="u-active-palette-2-light-1 u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-8 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-4">{{ $contacts->button_name }}</a>
    </div>
</section>
@endsection