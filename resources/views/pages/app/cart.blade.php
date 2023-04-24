@extends('layouts.default')

@section('title')
    Cart
@endsection

@section('content-web')
    <!-- content-->
    <div class="content" data-pagetitle="Cart">
        <!--column-wrap-->
        <div class="column-wrap">
            <!--column-wrap-container -->
            <div class="column-wrap-container fl-wrap">

                <div class="col-wc_dec"></div>
                <div class="container  wr-default-page">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <form class="woocommerce-cart-form " action="https://webredox.net/demo/wp/zonar/cart/" method="post">
                            <div class="pr-subtitle">Your Cart <span class="show-cart_count_main">1 item</span></div>
                            <div class="section-separator sp2 fl-wrap"><span></span></div>
                            <div class="clear"></div>
                            <table class="table table-border checkout-table woocommerce-cart-form__contents"
                                cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="hidden-xs">Product</th>
                                        <th>Description</th>
                                        <th class="hidden-xs">Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="item-cart">
                                    {{-- item disini di generate AJAX --}}
                                <tbody>
                            </table>
                            <!-- COUPON -->
                            <div class="coupon-holder">
                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value=""
                                    placeholder="Coupon code">
                                <button type="submit" class="btn-a" name="apply_coupon" value="Apply coupon">Apply
                                    coupon</button>
                                <button type="submit" class="pull-right btn-uc" name="update_cart" value="Update cart"
                                    disabled="" aria-disabled="true">Update cart</button>
                                <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce"
                                    value="32129b3ec5"><input type="hidden" name="_wp_http_referer"
                                    value="/demo/wp/zonar/cart/">
                            </div>
                            <!-- /COUPON -->
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart totals</h2>
                                <table cellspacing="0" class="shop_table shop_table_responsive">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi>
                                                        <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                        <span id="subtotal">0</span>
                                                    </bdi>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td data-title="Total">
                                                <strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                            <span id="total">0</span>
                                                        </bdi>
                                                    </span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">

                                    <a href="https://webredox.net/demo/wp/zonar/checkout/"
                                        class="checkout-button button alt wc-forward wp-element-button">
                                        Proceed to checkout</a>
                                </div>
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
        <div class="share-container fl-wrap  isShare"><a
                href="http://www.facebook.com/share.php?u=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fzonar%2Fcart%2F"
                class="pop share-icon share-icon-facebook"></a><a
                href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fzonar%2Fcart%2F&amp;media=&amp;description="
                class="pop share-icon share-icon-pinterest"></a><a
                href="https://twitter.com/share?via=in1.com&amp;text=Cart%20%E2%80%93%20Zonar"
                class="pop share-icon share-icon-twitter"></a><a
                href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fzonar%2Fcart%2F&amp;title=Cart%20%E2%80%93%20Zonar&amp;summary=&amp;source=in1.com"
                class="pop share-icon share-icon-linkedin"></a><a
                href="http://www.tumblr.com/share?v=3&amp;u=https%3A%2F%2Fwebredox.net%2Fdemo%2Fwp%2Fzonar%2Fcart%2F"
                class="pop share-icon share-icon-tumblr"></a></div>
    </div>
    <!-- share-wrapper  end -->
    </div>
    <!--wrapper end -->
@endsection

@push('add-script')
    <script>
        jQuery(document).ready(function($) {
            $.ajax({
                type: 'GET',
                url: "{{ route('get_cart_data') }}",
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                dataType: 'JSON',
                success: function(response) {
                    if (response.success == true) {
                        const cartData = response.cart;
                        const cartHTML = cartData.map((e, index) => {
                            return `
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                <td class="hidden-xs">
                                    <a href="http://hugostore.test/single-product/${e.product.slug}">
                                        <img width="800" height="560"
                                        src="http://hugostore.test/storage/${e.product.photo}"
                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                        alt="${e.product.name}" decoding="async" loading="lazy">
                                    </a>
                                </td>
                                <td>
                                    <h5 class="product-name">
                                        <a href="http://hugostore.test/single-product/${e.product.slug}">
                                            ${e.product.name}
                                        </a>
                                    </h5>
                                </td>
                                <td class="hidden-xs">
                                    <h5 class="order-money">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                ${e.product_detail.price}
                                            </bdi>
                                        </span>
                                    </h5>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <label class="screen-reader-text" for="quantity_640ec9e6aeb54">
                                            ${e.product.name} quantity
                                        </label>
                                        <input type="number" id="quantity_640ec9e6aeb54"
                                            class="input-text qty text"
                                            name="cart[caf1a3dfb505ffed0d024130f58c5cfa][qty]" value="${e.quantity}"
                                            title="Qty" size="4" min="0" max=""
                                            step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="order-money">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">Rp</span>
                                                ${e.product_detail.price * e.quantity}
                                            </bdi>
                                        </span>
                                    </h5>
                                </td>
                                <td class="pr-remove product-remove">
                                    <a href="https://webredox.net/demo/wp/zonar/cart/?remove_item=caf1a3dfb505ffed0d024130f58c5cfa&amp;_wpnonce=32129b3ec5"
                                        class="remove" aria-label="Remove this item" data-product_id="321"
                                        data-product_sku=""><i class="fal fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                            `
                        })
                        $('#item-cart').html('').append(cartHTML);
                        $('#subtotal').text(response.subtotal);
                        $('#total').text(response.subtotal);
                    }
                }

            })
        })
    </script>
@endpush
