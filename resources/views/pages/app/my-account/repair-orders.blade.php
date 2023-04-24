@extends('layouts.default')

@section('title')
    Repair Order
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
                        style="stroke-dashoffset: 12.0521px;"></circle>
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
                            <h2>Welcom Andhika Satriawan</h2>
                            <p>Here you can check your jobs and their statuses also you can request new quote.</p>
                            <h3>Filter Jobs</h3>
                            <div class="job_status_holder">
                                <ul class="horizontal wc_menu">
                                    <li><a href="https://hugostore.id/my-account/rb-repair-orders/?job_status=new">New
                                            Order</a></li>
                                    <li><a
                                            href="https://hugostore.id/my-account/rb-repair-orders/?job_status=quote">Quote</a>
                                    </li>
                                    <li><a
                                            href="https://hugostore.id/my-account/rb-repair-orders/?job_status=cancelled">Cancelled</a>
                                    </li>
                                    <li><a href="https://hugostore.id/my-account/rb-repair-orders/?job_status=inprocess">In
                                            Process</a></li>
                                    <li><a href="https://hugostore.id/my-account/rb-repair-orders/?job_status=inservice">In
                                            Service</a></li>
                                    <li><a
                                            href="https://hugostore.id/my-account/rb-repair-orders/?job_status=ready_complete">Ready/Complete</a>
                                    </li>
                                    <li><a
                                            href="https://hugostore.id/my-account/rb-repair-orders/?job_status=delivered">Delivered</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="jobs_table_list">No job found!<table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Case#</th>
                                            <th>Assigned To</th>
                                            <th>Order Date</th>
                                            <th>Total</th>
                                            <th>Order Status</th>
                                            <th>Payment</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table><!-- Table Ends here. -->
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
            <a href="http://www.facebook.com/share.php?u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-repair-orders%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-repair-orders%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-repair-orders%2F"
                class="pop share-icon share-icon-tumblr"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=My%20account%20%E2%80%93%20Hugostore"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fhugostore.id%2Fmy-account%2Frb-repair-orders%2F&amp;title=My%20account%20%E2%80%93%20Hugostore&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a>
        </div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection
