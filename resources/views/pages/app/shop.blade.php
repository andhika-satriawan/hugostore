@extends('layouts.default')

@section('title')
    Shop
@endsection

@section('body-class')
    class="archive post-type-archive post-type-archive-product wp-embed-responsive theme-zonar woocommerce-shop
    woocommerce woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-->
    <div class="content" data-pagetitle="Shop">
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="fl-wrap">
                <div class="col-wc_dec"></div>
                <section class="scroll_sec" id="sec1">
                    <div class="container">
                        <div class="blog-filters fl-wrap">
                            <div class="blog-search-wrap">
                                <form action="https://webredox.net/demo/wp/zonar/">
                                    <input name="s" id="se" type="text" class="search"
                                        placeholder="Search.." value="">
                                    <button><i class="fal fa-search"></i></button>
                                    <input type="hidden" name="post_type" value="product">
                                </form>
                            </div>
                            <!-- filter tag   -->
                            <!-- filter category    -->
                            <div class="category-filter blog-btn-filter">
                                <div class="blog-btn">Categories <i class="fa fa-list-ul" aria-hidden="true"></i></div>
                                <ul style="display: none;">
                                    <li><a href="https://webredox.net/demo/wp/zonar/product-category/drinks/">Drinks</a>
                                    </li>
                                    <li><a href="https://webredox.net/demo/wp/zonar/product-category/main-dishes/">Main
                                            Dishes</a></li>
                                    <li><a href="https://webredox.net/demo/wp/zonar/product-category/desserts/">Desserts</a>
                                    </li>
                                    <li><a href="https://webredox.net/demo/wp/zonar/product-category/starter/">Starter</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- filter category end  -->
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="shop-btn-filter">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby chosen-select no-search-select"
                                        aria-label="Shop order" style="display: none;">
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date" selected="selected">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                    <div class="nice-select orderby chosen-select no-search-select" tabindex="0"><span
                                            class="current">02</span>
                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search"
                                                placeholder="Search..."></div>
                                        <ul class="list">
                                            <li data-value="popularity" class="option">Sort by popularity</li>
                                            <li data-value="rating" class="option">Sort by average rating</li>
                                            <li data-value="date" class="option selected focus">Sort by latest</li>
                                            <li data-value="price" class="option">Sort by price: low to high</li>
                                            <li data-value="price-desc" class="option">Sort by price: high to low</li>
                                        </ul>
                                    </div>
                                    <input type="hidden" name="paged" value="1">
                                </form>
                            </div>
                            <!-- filter tag end  -->

                        </div>
                        <div class="gallery-items big-pad fl-wrap products columns-4">
                            @foreach ($products as $product)
                                <div class="gallery-item product">
                                    <div class="grid-item-holder hov_zoom">
                                        <div class="grid-post-media fl-wrap">
                                            <a href="#" class="box-media-zoom image-popup">
                                                <i class="fal fa-play"></i>
                                            </a>
                                            <img width="800" height="560" src="{{ url('storage/' . $product->photo) }}"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="" decoding="async" loading="lazy">
                                        </div>
                                        <div class="post-det fl-wrap">
                                            <h3>{{ $product->name }}</h3>
                                            <div class="grid-item_price">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                    <span>
                                                        Rated
                                                        <strong class="rating">5.00</strong>
                                                        out of 5
                                                    </span>
                                                </div>
                                                <div class="discount">Sale
                                                    -{{ $product->product_details[0]->discount_price }}%</div>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                            {{-- {{ $product->product_details[0]->price }} --}}
                                                            {{ number_format($product->product_details[0]->price, 0, ',', '.') }}
                                                        </bdi>
                                                    </span>
                                                </span>
                                                <a href="{{ url('product/' . $product->slug) }}"
                                                    class="button wp-element-button product_type_simple">View
                                                    Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>

                </section>
                <!--section end-->
            </div>
            <!--column-wrap-container end -->
        </div>
        <!--column-wrap end-->

        <div class="page-scroll-nav psn_single">
            <!--pagination-->
            <div class="pagination">
                <div class="pr-bg pr-bg-white"></div>
                <div class="container">
                    <a class="prevposts-link" href="https://webredox.net/demo/wp/zonar/shop/"><i
                            class="fal fa-long-arrow-left"></i></a><a class="current-page">01.</a><a class="blog-page"
                        href="https://webredox.net/demo/wp/zonar/shop/page/2/">02.</a><a class="blog-page"
                        href="https://webredox.net/demo/wp/zonar/shop/page/3/">03.</a><a class="nextposts-link"
                        href="https://webredox.net/demo/wp/zonar/shop/page/3/"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <!--pagination end-->
        </div>
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

    </div>
    <!--wrapper end -->
@endsection
