@extends('layouts.default')

@section('title')
    My Account - Edit Account
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
                        style="stroke-dashoffset: 74.813px;"></circle>
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
                            <form class="woocommerce-EditAccountForm edit-account"
                                action="https://hugostore.id/my-account/edit-account/" method="post">


                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                    <label for="account_first_name">First name&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                        name="account_first_name" id="account_first_name" autocomplete="given-name"
                                        value="Andhika">
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    <label for="account_last_name">Last name&nbsp;<span class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                        name="account_last_name" id="account_last_name" autocomplete="family-name"
                                        value="Satriawan">
                                </p>
                                <div class="clear"></div>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="account_display_name">Display name&nbsp;<span
                                            class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                        name="account_display_name" id="account_display_name" value="super_admin_123">
                                    <span><em>This will be how your name will be displayed in the account section and in
                                            reviews</em></span>
                                </p>
                                <div class="clear"></div>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
                                    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text"
                                        name="account_email" id="account_email" autocomplete="email"
                                        value="fimi.my.official@gmail.com">
                                </p>

                                <fieldset>
                                    <legend>Password change</legend>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password_current">Current password (leave blank to leave
                                            unchanged)</label>
                                        <span class="password-input"><input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_current" id="password_current" autocomplete="off"><span
                                                class="show-password-input"></span></span>
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password_1">New password (leave blank to leave unchanged)</label>
                                        <span class="password-input"><input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_1" id="password_1" autocomplete="off"><span
                                                class="show-password-input"></span></span>
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password_2">Confirm new password</label>
                                        <span class="password-input"><input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_2" id="password_2" autocomplete="off"><span
                                                class="show-password-input"></span></span>
                                    </p>
                                </fieldset>
                                <div class="clear"></div>


                                <p>
                                    <input type="hidden" id="save-account-details-nonce"
                                        name="save-account-details-nonce" value="9f2e54dbc1"><input type="hidden"
                                        name="_wp_http_referer" value="/my-account/edit-account/"> <button type="submit"
                                        class="woocommerce-Button button wp-element-button" name="save_account_details"
                                        value="Save changes">Save changes</button>
                                    <input type="hidden" name="action" value="save_account_details">
                                </p>

                            </form>

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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fedit-account%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fedit-account%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fedit-account%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fedit-account%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
