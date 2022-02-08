@extends('layout')
@section('content')
@parent


<section class="u-clearfix u-section-3" id="carousel_9d5a">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

        <h2 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-1">
            {{ $site->portfolio_content }}
        </h2>
        <!--div class="u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></!div-->

        <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                <use xlink:href="#svg-1135"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-1135" style="enable-background:new 0 0 512 512;">
                <g>
                    <g>
                        <path d="M374.108,373.328c-7.829-7.792-20.492-7.762-28.284,0.067L276,443.557V20c0-11.046-8.954-20-20-20    c-11.046,0-20,8.954-20,20v423.558l-69.824-70.164c-7.792-7.829-20.455-7.859-28.284-0.067c-7.83,7.793-7.859,20.456-0.068,28.285    l104,104.504c0.006,0.007,0.013,0.012,0.019,0.018c7.792,7.809,20.496,7.834,28.314,0.001c0.006-0.007,0.013-0.012,0.019-0.018    l104-104.504C381.966,393.785,381.939,381.121,374.108,373.328z"></path>
                    </g>
                </g>
            </svg>
        </span>
        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">
            дивитись портфоліо
        </h5>

    </div>
</section>

<?php foreach ($portfolios as $portfolio) { ?>
    <section class="u-align-center u-clearfix u-section-4" id="port_id{{ $portfolio->id }}">
        <div class="u-clearfix u-sheet u-sheet-1 u-btn-5">
            <div class="u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            <!--product-->
            <!--product_options_json-->
            <!--{"source":""}-->
            <!--/product_options_json-->
            <!--product_item-->
            <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-container-style u-expanded-width u-product u-white u-product-1">
                <div class="u-container-layout u-container-layout-1">
                    <div class="u-align-center u-container-style u-grey-5 u-group u-shape-rectangle u-group-1">
                        <div class="u-container-layout u-container-layout-2">
                            <!--product_price-->
                            <div class="u-product-control u-product-price u-product-price-1">
                                <div class="u-price-wrapper u-spacing-10">
                                    <!--product_old_price-->
                                    <div class="u-price" style="font-size: 3rem; font-weight: 700;">
                                        {{ $portfolio->title }}
                                    </div>
                                    <!--/product_regular_price-->
                                </div>
                            </div>
                            <!--/product_price-->
                            <!--product_title-->
                            <h2 class="u-product-control u-text u-text-1">
                                <a class="u-product-title-link" href="#">
                                    {{ $portfolio->url }}
                                </a>
                            </h2>
                            <!--/product_title-->
                            <!--product_content-->
                            <div class="u-product-control u-product-desc u-text u-text-2">
                                <p>
                                    {{ $portfolio->content }}
                                </p>
                            </div>
                            <!--/product_content-->
                            <!--product_button-->
                            <!--options_json-->
                            <!--{"clickType":"add-to-cart","content":"Add to Cart"}-->
                            <!--/options_json-->
                            <a href="{{ $portfolio->button_url }}" class="u-btn u-button-style u-hover-black u-palette-3-base u-product-control u-text-black u-text-hover-white u-btn-1">
                            {{ $portfolio->button_name }}
                            </a>
                            <!--/product_button-->
                        </div>
                    </div>
                    <!--product_image-->
                    <img src="/images/{{ $portfolio->image }}" alt="" class="u-image u-image-default u-product-control u-image-1" data-image-width="1000" data-image-height="1500">
                    <!--/product_image-->
                </div>
            </div>
            <!--/product_item-->
            <!--/product-->
        </div>
        <p class="u-btn-5">
        </p>
    </section>
<?php } ?>


@endsection