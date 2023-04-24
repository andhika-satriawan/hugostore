@extends('layouts.default')

@section('title')
    {{ $product->name }}
@endsection

@section('body-class')
    class="product-template-default single single-product postid-835 wp-embed-responsive theme-zonar woocommerce
    woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.10.0 vc_responsive"
@endsection

@section('content-web')
    <!-- content-holder  -->

    <!-- content-->
    <div class="content" data-pagetitle="{{ $product->name }}">
        <div class="page-scroll-nav psn_single">
            <!--content-nav_holder-->
            <div class="content-nav_holder">
                <div class="content-nav">
                    <ul>
                        <li>
                            <a href="https://hugostore.id/shop/" class="ln ajax">
                                <i class="fal fa-long-arrow-left"></i><span>Return to shop</span>
                            </a>
                            <div class="content-nav-media">
                                <div class="bg" data-bg=""></div>
                            </div>
                        </li>
                        <li>
                            <a href="https://hugostore.id/product/evo-2-pro-v3/" class="rn ajax">
                                <span>{{ $product->name }}</span> <i class="fal fa-long-arrow-right"></i>
                            </a>
                            <div class="content-nav-media">
                                <div class="bg" data-bg="{{ url('storage/' . $product->photo) }}">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--content-nav_holder end -->
        </div>

        <!-- hero-section-dec-->
        <div class="hero-section-dec color-bg">
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                    <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress 
                        js-progress-bar" />
                </svg>
            </div>
        </div>
        <!-- hero-section-dec end-->

        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">
                <div class="col-wc_dec"></div>
                <section
                    class="scroll_sec product type-product post-835 status-publish first instock product_cat-autel has-post-thumbnail shipping-taxable purchasable product-type-simple"
                    id="sec1">
                    <div class="container">

                        <div class="section-title fl-wrap">
                            <h3>{{ $product->name }}</h3>
                            <ul class="blog-title-opt  fl-wrap">
                            </ul>
                        </div>
                        <div class="blog-media fl-wrap fl-wrap with-images images">
                            <div class="single-slider-wrap">

                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery">
                                            <div class="swiper-slide hov_zoom woocommerce-product-gallery__image">
                                                <img width="1024" height="760"
                                                    src="{{ url('storage/' . $product->photo) }}"
                                                    class="attachment-shop_single size-shop_single wp-post-image "
                                                    alt="{{ $product->name }}" decoding="async" loading="lazy"
                                                    srcset="{{ url('storage/' . $product->photo) }} 1024w, {{ url('storage/' . $product->photo) }} 300w, {{ url('storage/' . $product->photo) }} 600w"
                                                    sizes="(max-width: 1024px) 100vw, 1024px" />
                                                <a class="box-media-zoom   image-popup"
                                                    href="{{ url('storage/' . $product->photo) }}"><i
                                                        class="fal fa-search"></i></a>
                                            </div>
                                            @foreach ($product->product_details as $image)
                                                <div class="swiper-slide hov_zoom ">
                                                    <img width="1024" height="1024"
                                                        src="{{ url('storage/' . $image->image) }}"
                                                        class="attachment-restabook_shop_gallery size-restabook_shop_gallery"
                                                        alt="" decoding="async" loading="lazy"
                                                        srcset="{{ url('storage/' . $image->image) }} 1024w, {{ url('storage/' . $image->image) }} 300w, {{ url('storage/' . $image->image) }} 150w, {{ url('storage/' . $image->image) }} 768w, {{ url('storage/' . $image->image) }} 600w, {{ url('storage/' . $image->image) }} 100w"
                                                        sizes="(max-width: 1024px) 100vw, 1024px" />
                                                    <a class="box-media-zoom   image-popup"
                                                        href="{{ url('storage/' . $image->image) }}"><i
                                                            class="fal fa-search"></i>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="ss-slider-pagination_wrap">
                                            <div class="ss-slider-pagination"></div>
                                        </div>
                                        <div class="ss-slider-cont ss-slider-cont-prev">
                                            <i class="fal fa-angle-left"></i>
                                        </div>
                                        <div class="ss-slider-cont ss-slider-cont-next">
                                            <i class="fal fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fl-wrap text-block">
                            <form class="cart" action="" method="get" enctype='multipart/form-data'>
                                <p class="wcrw_warranty_info"><strong>Warranty: </strong>
                                    <select name="wcrw_warranty">
                                        <option value="-1">No warranty</option>
                                        <option value="0">12 Months &mdash;
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol">Rp</span>20.000
                                                </bdi>
                                            </span>
                                        </option>
                                    </select>
                                </p>
                                <div class="qty_btn">
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_6420373ee5745">{{ $product->name }}
                                            quantity</label>
                                        <input type="number" id="quantity_6420373ee5745" class="input-text qty text"
                                            name="quantity" value="1" title="Qty" size="4" min="1"
                                            max="" step="1" placeholder="" inputmode="numeric"
                                            autocomplete="off" />
                                    </div>
                                    <button type="submit" name="add-to-cart" value="835"
                                        class="zo-woo-button btn flat-btn color-bg">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </form>

                            <ul class="post-counter">
                                <li class="price">
                                    <span>Price :
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span
                                                    class="woocommerce-Price-currencySymbol">Rp</span>{{ number_format($product->product_details[0]->price, 0, ',', '.') }}
                                            </bdi>
                                        </span>
                                    </span>
                                </li>
                            </ul>

                        </div>
                        <div class="clearfix"></div>

                        <div class="woocommerce-notices-wrapper">
                            <div class="woocommerce-message" role="alert">
                                <a href="{{ url('/cart') }}" tabindex="1"
                                    class="button wc-forward wp-element-button">
                                    View cart
                                </a>
                                “{{ $product->name }}” has been added to your cart.
                            </div>
                        </div>

                        <div class="accordion mar-top zo-woo-tab">
                            <a class="toggle act-accordion" href="#">Reviews (0) <span></span></a>
                            <div class="accordion-inner visible">
                                <div id="reviews" class="woocommerce-Reviews">
                                    <div id="commentswrap" class="reviews-wrap fl-wrap">
                                        <div class="pr-subtitle">
                                            Reviews </div>
                                        <div class="section-separator sp2 fl-wrap"><span></span></div>
                                        <div class="clear"></div>
                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                    </div>

                                    <div id="review_form_wrapper" class="clearafix review-form">
                                        <div id="review_form" class="custom-form fl-wrap">

                                            <div id="respond" class="comment-respond">
                                                <span id="reply-title" class="comment-reply-title">Be the first to
                                                    review
                                                    &ldquo;{{ $product->name }}&rdquo; <small><a rel="nofollow"
                                                            id="cancel-comment-reply-link"
                                                            href="/product/dragonfish/#respond"
                                                            style="display:none;">Cancel reply</a></small></span>
                                                <div class="row">
                                                    <form action="#" method="post" id="commentform"
                                                        class="comment-form">
                                                        <p class="comment-notes"><span id="email-notes">Your email
                                                                address
                                                                will not be published.</span> <span
                                                                class="required-field-message">Required fields are
                                                                marked
                                                                <span class="required">*</span></span></p>
                                                        <div class="col-sm-6 rows author"><input id="author"
                                                                placeholder="Name" name="author" type="text"
                                                                value="" size="30" required /></div>
                                                        <div class="col-sm-6 rows email"><input id="email"
                                                                placeholder="Email" name="email" type="email"
                                                                value="" size="30" required /></div>
                                                        <p class="comment-form-cookies-consent"><input
                                                                id="wp-comment-cookies-consent"
                                                                name="wp-comment-cookies-consent" type="checkbox"
                                                                value="yes" /> <label
                                                                for="wp-comment-cookies-consent">Save my name, email,
                                                                and
                                                                website in this browser for the next time I
                                                                comment.</label>
                                                        </p>
                                                        <div class="col-sm-12 rs-review-form">
                                                            <div class="comment-form-rating leave-rating-wrap"> <span
                                                                    class="leave-rating-title">Your
                                                                    rating</span><select name="rating"
                                                                    class="leave-rating" id="rating" required>
                                                                    <option value="">Rate&hellip;</option>
                                                                    <option value="5">Perfect</option>
                                                                    <option value="4">Good</option>
                                                                    <option value="3">Average</option>
                                                                    <option value="2">Not that bad</option>
                                                                    <option value="1">Very poor</option>
                                                                </select></div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <textarea id="comment" name="comment" cols="45" rows="8" placeholder="Your review" required></textarea>
                                                        </div>
                                                </div><button class="btn flat-btn color-bg"><span>Submit
                                                    </span></button>
                                                <p class="form-submit"><input name="submit" type="submit"
                                                        id="submit" class="submit" value="Submit" /> <input
                                                        type='hidden' name='comment_post_ID' value='835'
                                                        id='comment_post_ID' />
                                                    <input type='hidden' name='comment_parent' id='comment_parent'
                                                        value='0' />
                                                </p>
                                                <p style="display: none !important;"><label>&#916;
                                                        <textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                                    </label><input type="hidden" id="ak_js_1" name="ak_js"
                                                        value="101" />
                                                    <script>
                                                        document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                                                    </script>
                                                </p>
                                                </form>
                                            </div><!-- #respond -->

                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <section class="post-related fl-wrap">
                            <div class="pr-subtitle"> Related products</div>
                            <div class="section-separator sp2 fl-wrap"><span></span></div>
                            <div class="fl-wrap zo-margin-bottom-20"></div>
                            <div class="row">
                                <div class="gallery-items big-pad fl-wrap products columns-3">
                                    @foreach ($related_products as $related_product)
                                        <div class="item-related col-md-3">
                                            <a href="{{ url('single-product/' . $related_product->slug) }}">
                                                <img width="300" height="300"
                                                    src="{{ url('storage/' . $related_product->photo) }}"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" decoding="async" loading="lazy"
                                                    srcset="{{ url('storage/' . $related_product->photo) }} 300w, {{ url('storage/' . $related_product->photo) }} 150w, {{ url('storage/' . $related_product->photo) }} 100w"
                                                    sizes="(max-width: 300px) 100vw, 300px" />
                                            </a>

                                            <div class="post-det fl-wrap">
                                                <h3>
                                                    <a href="{{ url('single-product/' . $related_product->slug) }}">
                                                        {{ $related_product->name }}
                                                    </a>
                                                </h3>
                                                <span class="post-date post-price">
                                                    <span class="price">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">Rp</span>{{ number_format($related_product->product_details[0]->price, 0, ',', '.') }}
                                                            </bdi>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </section>
                    </div>

            </div>
            <div class="section-number"> <span>0</span>1. </div>
            </section>
            <!--section end-->
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

<script>
    @if ($message = Session::get('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success...',
            text: 'Input Data Success!'
        });
    @endif

    @if ($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
        });
    @endif
</script>
