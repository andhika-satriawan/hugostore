@extends('layouts.default')

@section('title')
    View Order
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
                        <nav class="woocommerce-MyAccount-navigation">
                            <ul>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">
                                    <a href="https://hugostore.id/my-account/">Dashboard</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders is-active">
                                    <a href="https://hugostore.id/my-account/orders/">Orders</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--rb-repair-orders">
                                    <a href="https://hugostore.id/my-account/rb-repair-orders/">Repair Orders</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--rb-request-quote">
                                    <a href="https://hugostore.id/my-account/rb-request-quote/">Request Quote</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                    <a href="https://hugostore.id/my-account/downloads/">Downloads</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--warranty-requests">
                                    <a href="https://hugostore.id/my-account/warranty-requests/">Warranty Requests</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                    <a href="https://hugostore.id/my-account/edit-address/">Addresses</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                    <a href="https://hugostore.id/my-account/edit-account/">Account details</a>
                                </li>
                                <li
                                    class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                    <a
                                        href="https://hugostore.id/my-account/customer-logout/?_wpnonce=5ba05db351">Logout</a>
                                </li>
                            </ul>
                        </nav>


                        <div class="woocommerce-MyAccount-content">
                            <div class="woocommerce-notices-wrapper"></div>
                            <p>
                                Order #<mark class="order-number">170</mark> was placed on <mark class="order-date">November
                                    13, 2022</mark> and is currently <mark class="order-status">Completed</mark>.</p>


                            <section class="woocommerce-order-details">

                                <h2 class="woocommerce-order-details__title">Order details</h2>

                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                    <thead>
                                        <tr>
                                            <th class="woocommerce-table__product-name product-name">Product</th>
                                            <th class="woocommerce-table__product-table product-total">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="woocommerce-table__line-item order_item">

                                            <td class="woocommerce-table__product-name product-name">
                                                Black Coat <strong class="product-quantity">×&nbsp;1</strong> </td>

                                            <td class="woocommerce-table__product-total product-total">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">Rp</span>600.000</bdi></span>
                                            </td>

                                        </tr>

                                        <tr class="woocommerce-table__line-item order_item">

                                            <td class="woocommerce-table__product-name product-name">
                                                Black Coat <strong class="product-quantity">×&nbsp;1</strong>
                                                <div class="view">
                                                    <p>
                                                        <strong>Warranty</strong>:
                                                        <span>
                                                            12 Months <small>(expires November 13, 2023)</small> </span>
                                                    </p>
                                                </div>
                                            </td>

                                            <td class="woocommerce-table__product-total product-total">
                                                <span class="woocommerce-Price-amount amount"><bdi><span
                                                            class="woocommerce-Price-currencySymbol">Rp</span>620.000</bdi></span>
                                            </td>

                                        </tr>

                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th scope="row">Subtotal:</th>
                                            <td><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">Rp</span>1.220.000</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Shipping:</th>
                                            <td>Free shipping</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Payment method:</th>
                                            <td>Cash on delivery</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total:</th>
                                            <td><span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">Rp</span>1.220.000</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>


                                <p class="order-again">
                                    <a href="https://hugostore.id/cart/?order_again=170&amp;_wpnonce=1cb69b22e2"
                                        class="button">Order again</a>
                                </p>
                            </section>

                            <section class="woocommerce-customer-details">


                                <section
                                    class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
                                    <div
                                        class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">


                                        <h2 class="woocommerce-column__title">Billing address</h2>

                                        <address>
                                            Andhika Satriawan<br>JL Angkasa 2<br>Bekasi<br>Jawa Barat<br>17144
                                            <p class="woocommerce-customer-details--phone">0812345678</p>

                                            <p class="woocommerce-customer-details--email">fimi.my.official@gmail.com</p>
                                        </address>


                                    </div><!-- /.col-1 -->

                                    <div
                                        class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
                                        <h2 class="woocommerce-column__title">Shipping address</h2>
                                        <address>
                                            Andhika Satriawan<br>JL Angkasa 2<br>Bekasi<br>Jawa Barat<br>17144
                                        </address>
                                    </div><!-- /.col-2 -->

                                </section><!-- /.col2-set -->



                            </section>
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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fview-order%2F170%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fview-order%2F170%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fview-order%2F170%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Fview-order%2F170%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
