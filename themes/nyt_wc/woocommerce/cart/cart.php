<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.8
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<header class="content-title">
    <h1 class="title">Shopping Cart</h1>
    <p class="title-desc">Just this week, you can use the free premium delivery.</p>
</header>
<div class="xs-margin"></div><!-- space -->
<!--<div class="cart-form">-->
<form action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post" id="cart-form">
    <div class="row">

        <?php
        wc_print_notices();

        do_action('woocommerce_before_cart');
        ?>

        <div class="col-md-12 table-responsive">

            <?php do_action('woocommerce_before_cart_table'); ?>

            <table class="shop_table shop_table_responsive cart-table table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="table-title"><?php _e('Product Name', 'woocommerce'); ?></th>
                        <th class="table-title"><?php _e('Product Code', 'woocommerce'); ?></th>
                        <th class="table-title"><?php _e('Unit Price', 'woocommerce'); ?></th>
                        <th class="table-title"><?php _e('Quantity', 'woocommerce'); ?></th>
                        <th class="table-title"><?php _e('SubTotal', 'woocommerce'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php do_action('woocommerce_before_cart_contents'); ?>

                    <?php
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                        $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                        $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                        if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                            ?>
                            <tr class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                <td class="item-name-col">
                                    <figure>
                                        <?php
                                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                        if (!$product_permalink) {
                                            echo $thumbnail;
                                        } else {
                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                                        }
                                        ?>
                                    </figure>

                                    <header class="item-name">
                                        <?php
                                        if (!$product_permalink) {
                                            echo apply_filters('woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key) . '&nbsp;';
                                        } else {
                                            echo apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_title()), $cart_item, $cart_item_key);
                                        }

                                        // Meta data
                                        echo WC()->cart->get_item_data($cart_item);

                                        // Backorder notification
                                        if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                            echo '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>';
                                        }
                                        ?>
                                    </header>
                                </td>

                                <td class="item-code">MP125984154</td>

                                <td class="item-price-col" data-title="<?php _e('Price', 'woocommerce'); ?>">
                                    <span class="item-price-special">
                                        <?php
                                        //echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                        echo WC()->cart->get_product_price($_product)
                                        ?>
                                    </span>
                                </td>

                                <td data-title="<?php _e('Quantity', 'woocommerce'); ?>">
                                    <div class="custom-quantity-input" data="<?php echo $cart_item['product_id']?>">
                                        <?php
                                        if ($_product->is_sold_individually()) {
                                            $product_quantity = sprintf('1 <input type="hidden" class="quantity" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                        } else {
//                                            $product_quantity = sprintf('<input type="number" class="quantity" name="cart[%s][qty] max="%d" min="0" value="%d" step="1" />', $cart_item_key, $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(), $cart_item['quantity']);
                                            $product_quantity = woocommerce_quantity_input(array(
                                                'input_name' => "cart[{$cart_item_key}][qty]",
                                                'input_value' => $cart_item['quantity'],
                                                'max_value' => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
                                                'min_value' => '0'
                                                    ), $_product, false);
                                        }

                                        echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);
                                        ?>
                                        <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
                                        <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
                                    </div>
                                </td>

                                <td class="item-total-col" data-title="<?php _e('Total', 'woocommerce'); ?>">
                                    <?php
                                    echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
                                    ?>
                                    <?php
                                    echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                    '<a href="%s" class="close-button" title="%s" data-product_id="%s" data-product_sku="%s"></a>', esc_url(WC()->cart->get_remove_url($cart_item_key)), __('Remove this item', 'woocommerce'), esc_attr($product_id), esc_attr($_product->get_sku())
                                            ), $cart_item_key);
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                            <tr>
                                <td colspan="3">
                                </td>
                                <td colspan="2">
                                     <a href="javascript:void(0)" id="update_cart" class="btn btn-custom" >UPDATE CART</a>
                                    <?php wp_nonce_field( 'woocommerce-cart' ); ?>
                                </td>
                            </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
    <div class="lg-margin"></div>

    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="tab-container left clearfix">
                <ul class="nav-tabs" style="height: 315px;">
                    <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
                    <li class=""><a href="#discount" data-toggle="tab">Discount Code</a></li>
                    <!--<li class=""><a href="#gift" data-toggle="tab" style="border-bottom-color: transparent;">Gift voucher </a></li>-->

                </ul>
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="shipping">
                        <h4>Enter your destination to get a shipping estimate.</h4>
                        <?php wc_cart_totals_shipping_html()?>

                    </div><!-- End .tab-pane -->

                    <div class="tab-pane" id="discount">
                        <?php wc_get_template_part('cart/cart', 'coupon')?>
                    </div><!-- End .tab-pane -->

<!--                    <div class="tab-pane" id="gift">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos nostrum debitis optio molestiae in quam dicta labore obcaecati ullam necessitatibus animi deleniti minima dolor suscipit nobis est excepturi inventore.</p>
                    </div> End .tab-pane -->

                </div><!-- End .tab-content -->
            </div><!-- End .tab-container -->

        </div><!-- End .col-md-8 -->
        <div class="lg-margin visible-sm visible-xs"></div><!-- space -->
        <div class="col-md-4 col-sm-12 col-xs-12" id="cart_totals">
            <table class="table total-table">
                <tbody>
                    <tr>
                        <td><?php _e('Subtotal', 'woocommerce'); ?></td>
                        <td data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>"><?php wc_cart_totals_subtotal_html(); ?></td>
                    </tr>
                    <tr>
                        <td class="total-table-title">TAX (0%):</td>
                        <td><?php wc_cart_totals_taxes_total_html()?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total:</td>
                        <td><?php wc_cart_totals_order_total_html()?></td>
                    </tr>
                </tfoot>
            </table>
            <div class="md-margin"></div><!-- End .space -->
            <a href="/shop" class="btn btn-custom-2">CONTINUE SHOPPING</a>
            <a href="/checkout" class="btn btn-custom">CHECKOUT</a>
        </div><!-- End .col-md-4 -->
    </div>
<div class="lg-margin2x"></div>

<div class="similiar-items-container carousel-wrapper">
    <header class="content-title">
        <div class="title-bg">
            <h2 class="title">Similiar Products</h2>
        </div><!-- End .title-bg -->
    </header>

    <div class="carousel-controls">
        <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
        <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
    </div><!-- End .carousel-controls -->
    <div class="similiar-items-slider owl-carousel">
        <?php wc_get_template_part('cart/cross', 'sells') ?>
    </div><!--purchased-items-slider -->
</div><!-- End .purchased-items-container -->

<?php do_action('woocommerce_after_cart'); ?>
