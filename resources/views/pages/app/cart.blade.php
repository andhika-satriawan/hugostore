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
                        <div class="pr-subtitle">Your Cart <span class="show-cart_count_main">1 item</span></div>
                        <div class="section-separator sp2 fl-wrap"><span></span></div>
                        <div class="clear"></div>
                        <table class="table table-border checkout-table woocommerce-cart-form__contents" cellspacing="0">
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
        jQuery(document).on('change', ".cart-quantity", function($) {
            const product_id = jQuery(this).closest('tr').data('product-id');
            const product_detail_id = jQuery(this).closest('tr').data('product-detail-id');
            const quantity = jQuery(this).val();
            // console.log(product_id);
            // console.log(product_detail_id);
            // console.log(quantity);

            jQuery.ajax({
                type: 'PATCH',
                url: "{{ route('update-cart') }}",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'product_id': product_id,
                    'product_detail_id': product_detail_id,
                    'quantity': quantity
                },
                dataType: 'JSON',
                beforeSend: function() {

                    jQuery('.loader').show();
                    jQuery(".loading-text-container ").css("top", '50%');
                    jQuery(".loading-text-container ").css("opacity", '1');
                    jQuery(".loader-anim").css("bottom", '0');
                    jQuery(".loader-anim2").css("bottom", '0');
                    initZonar();

                    jQuery(this).attr('readonly', true)
                },
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        // location.reload();
                        if (response.success == true) {
                            const cartData = response.cart;
                            const cartHTML = cartData.map((e, index) => {
                                return `
                                    <tr class="woocommerce-cart-form__cart-item cart_item" data-product-id="${e.product.id}" data-product-detail-id="${e.product_detail.id}">
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
                                                <input type="number" class="input-text qty text cart-quantity" value="${e.quantity}"
                                                    title="Qty" size="4" min="1" max=""
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
                                            <a class="remove remove-cart" aria-label="Remove this item"><i class="fal fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                `
                            })
                            jQuery('#item-cart').html('').append(cartHTML);
                            jQuery('#subtotal').text(response.subtotal);
                            jQuery('#total').text(response.subtotal);
                        }
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        jQuery(document).ready(function($) {
            $.ajax({
                type: 'GET',
                url: "{{ route('get-cart') }}",
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                dataType: 'JSON',
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        const cartData = response.cart;
                        const cartHTML = cartData.map((e, index) => {
                            return `
                            <tr class="woocommerce-cart-form__cart-item cart_item" data-product-id="${e.product.id}" data-product-detail-id="${e.product_detail.id}">
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
                                        <input type="number" class="input-text qty text cart-quantity" value="${e.quantity}"
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
                                    <a class="remove remove-cart" aria-label="Remove this item"><i class="fal fa-times"></i></a>
                                </td>
                            </tr>
                            `
                        })
                        $('#item-cart').html('').append(cartHTML);
                        $('#subtotal').text(response.subtotal);
                        $('#total').text(response.subtotal);
                    }
                },

                error: function(error) {
                    console.log(error);
                }
            })
        })

        jQuery(document).on('click', ".remove-cart", function($) {
            const product_id = jQuery(this).closest('tr').data('product-id');
            const product_detail_id = jQuery(this).closest('tr').data('product-detail-id');
            const quantity = jQuery(this).val();

            jQuery.ajax({
                type: 'DELETE',
                url: "{{ route('delete-cart') }}",
                data: {
                    '_token': '{{ csrf_token() }}',
                    'product_id': product_id,
                    'product_detail_id': product_detail_id,
                },
                dataType: 'JSON',
                beforeSend: function() {
                    // LOADER
                    jQuery(this).attr('onclick', 'return false');
                },
                success: function(response) {
                    console.log(response);
                    if (response.success == true) {
                        // location.reload();
                        if (response.success == true) {
                            const cartData = response.cart;
                            const cartHTML = cartData.map((e, index) => {
                                return `
                                    <tr class="woocommerce-cart-form__cart-item cart_item" data-product-id="${e.product.id}" data-product-detail-id="${e.product_detail.id}">
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
                                                <input type="number" class="input-text qty text cart-quantity" value="${e.quantity}"
                                                    title="Qty" size="4" min="1" max=""
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
                                            <a class="remove remove-cart" aria-label="Remove this item"><i class="fal fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                `
                            })
                            jQuery('#item-cart').html('').append(cartHTML);
                            jQuery('#subtotal').text(response.subtotal);
                            jQuery('#total').text(response.subtotal);
                        }
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
    </script>
@endpush
