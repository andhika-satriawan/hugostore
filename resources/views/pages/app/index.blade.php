@extends('layouts.default')

@section('title')
    Home
@endsection

@section('body-class')
    class="home page-template page-template-home-page page-template-home-page-php page page-id-13
    wp-embed-responsive theme-zonar woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-holder  -->

    <!-- hero-wrap-->
    <!-- content-->
    <div class="content full-height" data-pagetitle="Home">
        <div class="fl-wrap full-height hero-conatiner">
            <div class="hero-wrapper fl-wrap full-height hidden-item">
                <span class="hc_dec"></span>
                <!-- fs-slider-wrap  -->
                <!-- speed  -->
                <!-- delay  -->
                <!-- hero-slider-wrap -->
                <div class="hero-slider-wrap home-half-slider fl-wrap full-height">
                    <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                        <div class="swiper-container swiper-container-horizontal" data-slider-speed="2400"
                            data-slider-delay="2500" style="cursor: grab;">
                            <div class="swiper-wrapper">
                                @foreach ($sliders as $slider)
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="half-hero-wrap">
                                            <div class="hhw_header">{{ $slider->brand }}</div>
                                            <h1>{{ $slider->brand_type }}</h1>
                                            <h4>{{ $slider->description }}</h4>
                                            <div class="clearfix"></div>
                                            <a href="{{ $slider->button_link }}" class="btn ajax  fl-btn color-bg">
                                                <span>View Details</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
                <!-- hero-slider-wrap  end-->

                <!-- hero-slider-img-->
                <div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
                    <div class="swiper-container swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            @foreach ($sliders as $slider)
                                <!-- swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="bg" data-bg="{{ url('storage/' . $slider->image) }}"
                                        data-swiper-parallax="20%"
                                        style="background-image: url({{ url('storage/' . $slider->image) }}); transition-duration: 0ms; transform: translate3d(0%, 0px, 0px);">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- swiper-slide end-->
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="hero-corner-dec"></div>
                    <div class="hero-corner-dec2"></div>
                </div>
                <!-- hero-slider-img  end-->
                <!-- slider-controls -->
                <div class="slider-progress-bar act-slider">
                    <span>
                        <svg class="circ" width="50" height="50">
                            <circle class="circ2" cx="25" cy="25" r="23"
                                stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"></circle>
                            <circle class="circ1" cx="25" cy="25" r="23" stroke="#fff"
                                stroke-width="2" fill="none"></circle>
                        </svg>
                    </span>
                </div>
                <div class="clone-counter">
                    <div class="current">01</div>
                </div>
                <div class="swiper-counter hs_counter">
                    <div class="current" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">01</div>
                    <div class="total">05</div>
                </div>
                <div class="hero-slider_control-wrap">
                    <div class="hsc hsc-prev" tabindex="0" role="button" aria-label="Previous slide"><span><i
                                class="fal fa-angle-left"></i></span> </div>
                    <div class="hsc hsc-next" tabindex="0" role="button" aria-label="Next slide"><span><i
                                class="fal fa-angle-right"></i></span></div>
                </div>
                <!-- slider-controls end-->
                <a href="https://www.hugostore.id/shop/" class="ajax start-btn"><span> Start explore <i
                            class="fal fa-long-arrow-right"></i></span></a>
                <div class="play-pause_slider hsc_pp auto_actslider"><i class="fas fa-play"></i></div>
            </div>
            <!-- hero-container end-->
            <div class="hero-decor-numb">
                <span>0.7143528 </span>
                <span>-74.0059731 </span>
                <a href="https://www.google.com.ua/maps/" target="_blank" class="hero-decor-numb-tooltip">Based In
                    NewYork</a>
            </div>
            <div class="hero-slider-wrap_pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 5"></span>
            </div>
            <div class="hero-scroll-down-notifer">
                <div class="scroll-down-wrap ">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <i class="far fa-angle-down"></i>
            </div>
        </div>
    </div>
    <!-- content end -->
@endsection
