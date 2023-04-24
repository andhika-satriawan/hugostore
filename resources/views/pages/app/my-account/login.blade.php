@extends('layouts.default')

@section('title')
    Login
@endsection

@section('body-class')
    class="page-template-default page page-id-609 wp-embed-responsive theme-zonar woocommerce-account woocommerce-page
    woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
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

        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">

                <div class="col-wc_dec"></div>
                <div class="container  wr-default-page">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="u-columns col2-set" id="customer_login">
                            <div class="u-column1 col-1">

                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Error!</strong> {{ $error }}.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endforeach

                                <h2>Login</h2>
                                <form action="{{ route('user.login-store') }}"
                                    class="woocommerce-form woocommerce-form-login login" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="email">Email address&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                                            name="email" id="email" autocomplete="email" value="">
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
                                            name="password" id="password" autocomplete="current-password">
                                    </p>
                                    <p class="form-row">
                                        <label
                                            class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <span>Remember me</span>
                                        </label>
                                        <button type="submit"
                                            class="woocommerce-button button woocommerce-form-login__submit wp-element-button"
                                            name="login" value="Log in">Log in</button>
                                    </p>
                                    <p class="woocommerce-LostPassword lost_password">
                                        <a href="https://hugostore.id/my-account/lost-password/">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
