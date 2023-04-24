@extends('layouts.default')

@section('title')
    My Account - Order
@endsection

@section('body-class')
    class="page-template-default page page-id-609 logged-in wp-embed-responsive theme-zonar woocommerce-account
    woocommerce-page woocommerce-orders woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
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
                        style="stroke-dashoffset: 39.759px;"></circle>
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

                            <table
                                class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                <thead>
                                    <tr>
                                        <th
                                            class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                            <span class="nobr">Order</span>
                                        </th>
                                        <th
                                            class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date">
                                            <span class="nobr">Date</span>
                                        </th>
                                        <th
                                            class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                            <span class="nobr">Status</span>
                                        </th>
                                        <th
                                            class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                            <span class="nobr">Total</span>
                                        </th>
                                        <th
                                            class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                            <span class="nobr">Actions</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr
                                        class="woocommerce-orders-table__row woocommerce-orders-table__row--status-completed order">
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                            data-title="Order">
                                            <a href="https://hugostore.id/my-account/view-order/170/">
                                                #170 </a>

                                        </td>
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date"
                                            data-title="Date">
                                            <time datetime="2022-11-13T09:49:23+00:00">November 13, 2022</time>

                                        </td>
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                            data-title="Status">
                                            Completed
                                        </td>
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                            data-title="Total">
                                            <span class="woocommerce-Price-amount amount"><span
                                                    class="woocommerce-Price-currencySymbol">Rp</span>1.220.000</span> for 2
                                            items
                                        </td>
                                        <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                            data-title="Actions">
                                            <a href="https://hugostore.id/my-account/view-order/170/"
                                                class="woocommerce-button wp-element-button button view">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>




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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Forders%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Forders%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Forders%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Forders%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
