@extends('layouts.default')

@section('title')
    About
@endsection

@section('body-class')
    class="page-template-default page page-id-18 wp-embed-responsive theme-zonar woocommerce-no-js
    wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-holder  -->

    <!-- content-->
    <div class="content" data-pagetitle="About">
        <div class="page-scroll-nav">
            <nav class="scroll-init page-scroll-nav_wrap">
                <ul class="no-list-style init_hidden_filter">
                    <li><a class="scroll-link fbgs  act-sec" href="/about/#sec1" data-bgtext="01"><span>About</span></a></li>
                    <li><a class="scroll-link fbgs " href="/about#sec2" data-bgtext="02"><span>Services</span></a></li>
                    <li><a class="scroll-link fbgs " href="/about#sec3" data-bgtext="03"><span>Team</span></a></li>
                    <li><a class="scroll-link fbgs " href="/about#sec4" data-bgtext="04"><span>Skills</span></a></li>
                    <li><a class="scroll-link fbgs " href="/about#sec5" data-bgtext="05"><span>Clients</span></a></li>
                </ul>
                <div class="psn_button act-filter"><i class="fal fa-sort"></i> FIlter </div>
            </nav>
        </div>
        <!-- hero-section-dec-->
        <div class="hero-section-dec color-bg">
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__progress js-progress-bar"
                        style="stroke-dashoffset: 96.6098px;"></circle>
                </svg>
            </div>
        </div>
        <!-- hero-section-dec end-->

        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <!--slideshow-container-->
                <!-- speed  -->
                <!-- delay  -->
                <div class="slideshow-container">
                    <div class="slideshow-container_wrap fl-wrap full-height">
                        <div class="swiper-container swiper-container-fade swiper-container-horizontal"
                            data-slider-speed="1400" data-slider-delay="2500">
                            <div class="swiper-wrapper" style="transition-duration: 1400ms;">
                                @foreach ($sliders as $slider)
                                    <div class="swiper-slide">
                                        <div class="ms-item_fs fl-wrap">
                                            <div class="bg par-elem" data-bg="{{ url('storage/' . $slider->image) }}"
                                                style="background-image: url({{ url('storage/' . $slider->image) }});">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--slideshow-container end-->
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>ABOUT US<br>HUGOSTORE</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                        Nulla finibus lobortis pulvinar.</p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
                <div class="scroll-notifer">Scroll Down </div>
                <div class="section-counter">
                    <div class="sc_current"><span>01</span></div>
                    <div class="sc_total">00</div>
                </div>
                <div class="fcwc-pagination fcwc-wrap swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 1"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                        aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                        role="button" aria-label="Go to slide 3"></span>
                </div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">

                {{-- <div class="col-wc_dec"></div> --}}
                <div class="container-disable fl-wrap wr-default-page text-about">
                    <h2>Some Words About Me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque at augue nec interdum.
                        Praesent nec velit blandit, blandit quam faucibus, vehicula ante. Class aptent taciti sociosqu ad
                        litora torquent per conubia nostra, per inceptos himenaeos. Orci varius natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Donec venenatis sem ac maximus tincidunt. Donec
                        scelerisque libero id velit elementum, non sagittis purus posuere. Nunc placerat augue a lorem
                        aliquam commodo.</p>
                    <p>Praesent at ante tortor. Phasellus suscipit turpis eget nunc fringilla pretium. Aenean egestas magna
                        sit amet maximus tincidunt. Donec a enim a tortor posuere tristique efficitur sit amet arcu. Aenean
                        varius turpis vel condimentum volutpat. Phasellus pulvinar ut velit eget malesuada. Nullam id diam
                        dui. Aenean at dolor sit amet justo commodo vehicula. Sed suscipit placerat risus, id efficitur
                        magna rhoncus et.</p>
                    <p>Vivamus mollis, sapien vel accumsan ultrices, quam enim euismod sem, sed ultrices magna magna sed
                        sapien. In tortor orci, mattis sit amet faucibus quis, ullamcorper et ipsum. Nunc mollis metus a est
                        fringilla, nec egestas neque facilisis. Aliquam erat volutpat. Sed vestibulum, enim non imperdiet
                        aliquet, urna libero volutpat nibh, nec hendrerit lectus augue quis mi. Nulla tempus scelerisque
                        massa facilisis sagittis. Mauris posuere lorem vitae consequat consequat. Sed urna metus,
                        scelerisque in pulvinar ut, interdum ac ligula.</p>
                    <p>Suspendisse ut tincidunt lectus. Etiam turpis mi, tincidunt commodo nisi ac, interdum euismod augue.
                        Curabitur ultricies purus dignissim, eleifend nisl rhoncus, finibus dui. Quisque nisl purus,
                        pellentesque id finibus a, maximus malesuada lectus. Fusce blandit libero et leo tristique suscipit.
                        Cras in massa quam. Quisque vulputate aliquet libero, in feugiat neque pretium eu. Orci varius
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed dapibus purus in nisl
                        auctor, vitae tempor lectus facilisis. Aliquam malesuada elit orci, nec cursus ante consequat
                        mollis. Fusce non urna ante. Donec scelerisque venenatis ex vitae malesuada. Donec dignissim, risus
                        viverra tincidunt congue, elit odio rhoncus lacus, ac euismod dui velit eu augue. Mauris porta risus
                        quis eros feugiat finibus.</p>
                    <p>Quisque quis gravida arcu, a luctus felis. Nullam quis arcu a magna condimentum accumsan ut quis
                        ipsum. Donec viverra viverra convallis. Ut hendrerit orci ut ipsum sodales auctor. Maecenas quis
                        commodo turpis. Curabitur dui felis, sagittis ac vehicula vel, sollicitudin ut sapien. Nunc nec
                        tellus eu erat semper mollis vitae sit amet massa. Aenean tincidunt quam quam, vitae maximus dolor
                        blandit et. Quisque vestibulum ligula libero, ut sodales purus congue eu. Nullam ornare nisl nulla,
                        id rutrum erat suscipit sed.</p>
                </div>
            </div>
            <!--column-wrap-container end -->
        </div>
        <!--column-wrap end-->
        <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
    </div>
    <!-- content end-->
    <div class="hero-scroll-down-notifer">
        <div class="scroll-down-wrap ">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
        <i class="far fa-angle-down"></i>
    </div>


    <!-- share-wrapper-->
    <div class="share-wrapper">
        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
        <div class="share-container fl-wrap  isShare"
            data-share="[&#39;facebook&#39;, &#39;pinterest&#39;, &#39;tumblr&#39;, &#39;twitter&#39;, &#39;linkedin&#39;,   ]">
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fabout%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fabout%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fabout%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=About%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fabout%2F&amp;title=About%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
@endsection
