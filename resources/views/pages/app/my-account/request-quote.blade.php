@extends('layouts.default')

@section('title')
    Request Quote
@endsection

@section('body-class')
    class="page-template-default page page-id-609 logged-in wp-embed-responsive theme-zonar woocommerce-account
    woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-->

    <div class="content" data-pagetitle="My account">
        <!-- hero-section-dec-->
        <div class="hero-section-dec color-bg">
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background"></circle>
                    <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress 
                                    js-progress-bar"
                        style="stroke-dashoffset: 100px;"></circle>
                </svg>
            </div>
        </div>
        <!-- hero-section-dec end-->
        <!--fixed-column-wrap-->
        <div class="fixed-column-wrap">
            <div class="pr-bg"></div>
            <!--fixed-column-wrap-content-->
            <div class="fixed-column-wrap-content">
                <div class="bg" data-bg="https://hugostore.id/wp-content/uploads/2020/11/5.jpg"
                    style="background-image: url(&quot;https://hugostore.id/wp-content/uploads/2020/11/5.jpg&quot;);"></div>
                <div class="overlay"></div>
                <div class="progress-bar-wrap bot-element">
                    <div class="progress-bar"></div>
                </div>
                <!--fixed-column-wrap_title-->
                <div class="fixed-column-wrap_title first-tile_load">
                    <h2>My account</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus
                        lobortis pulvinar. </p>
                </div>
                <!--fixed-column-wrap_title end-->
                <div class="fixed-column-dec"></div>
                <div class="fixed-column-linedec"></div>
                <div class="scroll-notifer">Scroll Down </div>
            </div>
            <!--fixed-column-wrap-content end-->
        </div>
        <!--fixed-column-wrap end-->
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">

                <div class="col-wc_dec"></div>
                <div class="container  wr-default-page">
                    <div class="woocommerce">
                        @include('partials.app.sidebar-my-account')
                        <div class="woocommerce-MyAccount-content">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="wc_rb_mb_wrap">
                                <form method="post" action="https://hugostore.id/my-account/rb-request-quote/"
                                    name="wc_rb_device_form">
                                    <div class="wc_rb_mb_section wc_rb_mb_manufactures">
                                        <div class="wc_rb_mb_head">
                                            <h2>Select Manufacturer</h2>
                                        </div>
                                        <div class="wc_rb_mb_body"><input type="hidden" id="wc_rb_mb_device_submit"
                                                name="wc_rb_mb_device_submit" value="c67505d455"><input type="hidden"
                                                name="_wp_http_referer" value="/my-account/rb-request-quote/"><input
                                                type="hidden" name="wcrb_thebrand_id" id="wcrb_thebrand_id" value="60">
                                            <ul class="manufacture_list">
                                                <li><a href="https://hugostore.id/my-account/rb-request-quote/#"
                                                        dt_brand_device="thebrand" dt_brand_id="58"><img
                                                            src="./request-quote_files/autel.jpeg"
                                                            class="attachment-full size-full" alt=""></a></li>
                                                <li><a href="https://hugostore.id/my-account/rb-request-quote/#"
                                                        dt_brand_device="thebrand" dt_brand_id="59"><img
                                                            src="./request-quote_files/FIMI.png"
                                                            class="attachment-full size-full" alt=""></a></li>
                                                <li><a href="https://hugostore.id/my-account/rb-request-quote/#"
                                                        dt_brand_device="thebrand" dt_brand_id="60" class="selected"><img
                                                            src="./request-quote_files/MJX.png"
                                                            class="attachment-full size-full" alt=""></a></li>
                                                <li><a href="https://hugostore.id/my-account/rb-request-quote/#"
                                                        dt_brand_device="thebrand" dt_brand_id="61"><img
                                                            src="./request-quote_files/SJRC.jpeg"
                                                            class="attachment-full size-full" alt=""></a></li>
                                            </ul>
                                        </div><!-- body ends /-->
                                    </div>
                                    <div class="wc_rb_mb_section wc_rb_mb_device">
                                        <div class="wc_rb_mb_head">
                                            <h2>Select Device</h2>
                                        </div><input type="hidden" name="wcrb_thedevice_id" id="wcrb_thedevice_id"
                                            value="912">
                                        <div class="wc_rb_mb_body text-center device-message">
                                            <div data-closable="slide-out-right">
                                                <ul class="manufacture_list">
                                                    <li><a href="https://hugostore.id/my-account/rb-request-quote/"
                                                            dt_device_id="912" class="selected">MJX B18 Pro</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- body ends /-->
                                    </div>
                                    <div class="wc_rb_mb_section wc_rb_mb_services">
                                        <div class="wc_rb_mb_head">
                                            <h2>Select Services</h2>
                                        </div>
                                        <div class="wc_rb_mb_body text-center service-message">
                                            <div data-closable="slide-out-right">
                                                <ul class="manufacture_list wc_service_radio">
                                                    <li><label><span class="radioHolder"><input type="radio"
                                                                    name="wc_rb_select_service" value="947"></span><span
                                                                class="theServiceTitle">Service 4<br>Time Required: 5
                                                                hari</span><span
                                                                class="theServicePrice">Rp320.000,00</span></label></li>
                                                    <li><label><span class="radioHolder"><input type="radio"
                                                                    name="wc_rb_select_service"
                                                                    value="943"></span><span
                                                                class="theServiceTitle">Service 3<br>Time Required: 4
                                                                hari</span><span
                                                                class="theServicePrice">Rp230.000,00</span></label></li>
                                                    <li><label><span class="radioHolder"><input type="radio"
                                                                    name="wc_rb_select_service"
                                                                    value="942"></span><span
                                                                class="theServiceTitle">Service 2<br>Time Required: 3
                                                                hari</span><span
                                                                class="theServicePrice">Rp150.000,00</span></label></li>
                                                    <li><label><span class="radioHolder"><input type="radio"
                                                                    name="wc_rb_select_service"
                                                                    value="897"></span><span
                                                                class="theServiceTitle">Baling-baling<br>Time Required: 2
                                                                hari</span><span
                                                                class="theServicePrice">Rp250.000,00</span></label></li>
                                                </ul>
                                            </div>
                                        </div><!-- body ends /-->
                                    </div>
                                    <div class="wc_rb_mb_section wc_rb_mb_customer">
                                        <div class="wc_rb_mb_head">
                                            <h2>Customer Information</h2>
                                        </div>
                                        <div class="wc_rb_mb_body final_customer_message grid-container fluid">
                                            <div class="booking_message"></div>
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-6 cell"><label>First Name (*)<input type="text"
                                                            name="firstName" value="Andhika" id="firstName"
                                                            required="" class="form-control login-field"
                                                            placeholder=""></label></div><!-- column Ends /-->
                                                <div class="medium-6 cell"><label>Last Name (*)<input type="text"
                                                            name="lastName" value="Satriawan" id="lastName"
                                                            required="" class="form-control login-field"
                                                            placeholder=""></label></div><!-- column Ends /-->
                                            </div><!-- grid-x ends /-->
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-6 cell"><label>Email (*)<input type="email"
                                                            name="userEmail" id="userEmail"
                                                            value="fimi.my.official@gmail.com" required=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                                <div class="medium-6 cell"><label>Phone number<input type="text"
                                                            name="phoneNumber" value=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                            </div><!-- grid-x ends /-->
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-6 cell"><label>City<input type="text"
                                                            name="userCity" value=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                                <div class="medium-6 cell"><label>Postal Code<input type="text"
                                                            name="postalCode" value=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                            </div><!-- grid-x ends /-->
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-6 cell"><label>Company<input type="text"
                                                            name="userCompany" value=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                                <div class="medium-6 cell"><label>Address<input type="text"
                                                            name="userAddress" value=""
                                                            class="form-control login-field" placeholder=""></label></div>
                                                <!-- column Ends /-->
                                            </div><!-- grid-x ends /-->
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-12 cell"><label>Job Details (*)
                                                        <textarea name="jobDetails" required="" class="form-control login-field" placeholder=""></textarea>
                                                    </label><input type="hidden" name="form_type"
                                                        value="wc_rb_booking_form"></div><!-- column Ends /-->
                                            </div><!-- grid-x ends /-->
                                            <div class="grid-x grid-margin-x">
                                                <div class="medium-12 cell"><label><input type="checkbox"
                                                            name="theGdprAccept" required="" value="Yes"> (*) I
                                                        understand that I will be contacted by a representative regarding
                                                        this request and I agree to the privacy policy.</label></div>
                                                <!-- column Ends /-->
                                            </div><!-- grid-x ends /--><input type="submit"
                                                class="button button-primary primary" value="Submit Request!">
                                        </div><!-- body ends /-->
                                    </div>
                                </form>
                            </div><!-- wc_rb_mb_wrap Ends /-->
                        </div>
                    </div>
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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-request-quote%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-request-quote%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-request-quote%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-request-quote%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
