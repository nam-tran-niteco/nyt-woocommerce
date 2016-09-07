<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
?> 

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">1 Step: <span>Checkout Option</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#checkout-option"></a>
			</div><!-- End .accordion-header -->
			
			<div id="checkout-option" class="collapse" style="height: 0px;">
				<div class="panel-body">
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
			
		</div>
		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">2 Step: <span>Billing Infomation</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#billing"></a>
			</div><!-- End .accordion-header -->
			
			<div id="billing" class="collapse" style="height: 0px;">
				<div class="panel-body">
					<?php do_action( 'woocommerce_checkout_billing' ); ?>
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
			
		</div>

		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">3 Step: <span>Delivery Details</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#delivery-details"></a>
			</div><!-- End .accordion-header -->
			
			<div id="delivery-details" class="collapse">
				<div class="panel-body">
					<p><?php echo 'Details about delivery ' ?></p>
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
			
		</div>
		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">4 Step: <span>Delivery Method</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#delivery-method"></a>
			</div><!-- End .accordion-header -->
			
			<div id="delivery-method" class="collapse">
				<div class="panel-body">
					<p><?php echo 'Choose your delivery method'?></p>
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
			
		</div>
		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">5 Step: <span>Payment Method</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#payment-method"></a>
			</div><!-- End .accordion-header -->
			
			<div id="payment-method" class="collapse" style="height: 0px;">
				<div class="panel-body">
					<p><?php echo 'Choose your payment method'?></p>
					<ul> 
						<li class = "payment-icon"><img class="paypal" src="../images/paypal.png"></img></li>
						<li class= "payment-icon"><img class="nganluong" src="../images/nganluong-logo.jpg"></img></li>
					</ul>
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
			
		</div>
		<div class="panel">
			<div class="accordion-header">
				<div class="accordion-title">6 Step: <span>Confirm Order</span></div><!-- End .accordion-title -->
				<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#confirm"></a>
			</div><!-- End .accordion-header -->
			
			<div id="confirm" class="collapse" style="height: 0px;">
				<div class="panel-body">
					<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

					<div id="order_review" class="woocommerce-checkout-review-order">
						<?php do_action( 'woocommerce_checkout_order_review' ); ?>
					</div>

					<?php do_action( 'woocommerce_checkout_after_order_review' ); ?> -->
				</div><!-- End .panel-body -->
			</div><!-- End .panel-collapse -->
		</div>
</form>


