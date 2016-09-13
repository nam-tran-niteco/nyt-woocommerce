<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
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
 * @version 2.2
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!wc_coupons_enabled()) {
    ?>
    <h4>Sorry, we do not support COUPON part</h4>
    <?php
    return;
}
?>
<p>Enter your discount coupon code here.</p>
<form class="checkout_coupon" method="post">

    <p class="form-row form-row-first">
        <input type="text" name="coupon_code" class="form-control" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" id="coupon_code" value="" />
    </p>

    <p class="form-row form-row-last">
        <input type="submit" class="btn btn-custom-2" name="apply_coupon" value="<?php esc_attr_e('Apply Coupon', 'woocommerce'); ?>" />
    </p>

    <div class="clear"></div>
</form>
