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

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
?>
<div class="panel">
	<div class="accordion-header">
		<div class="accordion-title">Step 1: <span>Checkout Option</span></div><!-- End .accordion-title -->
		<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#checkout-option"></a>
	</div><!-- End .accordion-header -->
	
	<div id="checkout-option" class="collapse in">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">					   		
					<h2 class="checkout-title">Customer Checkout</h2>
					<p>Choose your own way to checkout:</p>
					<div class="xs-margin"></div>
					<input type="radio" name="radio-option" id="option1"> 
					<label for="option1">Checkout as Guest</label>
					<div class="xs-margin"></div>
					<input type="radio" name="radio-option" id="option2">
					<label for="option2">Login</label>
					<div class="sm-margin"></div>
					<!--<p class="">By creating an account with our store, you will be able to move through the checkout process faster, 
					store multiple shipping addresses, view and track your orders in your account and more.</p>-->
					
				</div><!-- End .col-md-6 -->

				<div class="hidden col-md-6 col-sm-6 col-xs-12" id="regis-form">					   		
					<h2 class="checkout-title">Login</h2>
					<p>If you have an account with us, please log in.</p>
					<div class="xs-margin"></div>
					<?php 
						do_action( 'woocommerce_before_checkout_form', $checkout );
					
					?>
				</div>
			</div>
		</div><!-- End .panel-body -->
	</div><!-- End .panel-collapse -->
</div>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
	<div class="panel">
		<div class="accordion-header">
			<div class="accordion-title">Step 2: <span>Billing Infomation</span></div><!-- End .accordion-title -->
			<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#billing"></a>
		</div><!-- End .accordion-header -->
		
		<div id="billing" class="collapse">
			<div class="panel-body">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div><!-- End .panel-body -->
		</div><!-- End .panel-collapse -->
		
	</div>
	<?php
		if ( is_user_logged_in() ) {
			echo '<script type="text/javascript">
					$( document ).ready(function() {
						$("#checkout-option").removeClass("in");
						$("#billing").show();
					}); 
				</script>';
		} 
	?>
	
	<div class="panel">
		<div class="accordion-header">
			<div class="accordion-title">Step 3: <span>Delivery Details</span></div><!-- End .accordion-title -->
			<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#delivery-details"></a>
		</div><!-- End .accordion-header -->
		
		<div id="delivery-details" class="collapse">
			<div class="panel-body">
				<p><?php echo 'Details about delivery ' ?></p>
				<!--<?php do_action( 'woocommerce_checkout_shipping' ); ?>-->
			</div><!-- End .panel-body -->
		</div><!-- End .panel-collapse -->
		
	</div>
	<div class="panel">
		<div class="accordion-header">
			<div class="accordion-title">Step 4: <span>Confirm Order</span></div><!-- End .accordion-title -->
			<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#confirm"></a>
		</div><!-- End .accordion-header -->
		
		<div id="confirm" class="collapse">
			<div class="panel-body">
				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

				<div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
			</div><!-- End .panel-body -->
		</div><!-- End .panel-collapse -->
	</div>
	
	<div class="panel">
		<div class="accordion-header">
			<div class="accordion-title">Step 5: <span>Payment Method</span></div><!-- End .accordion-title -->
			<a class="accordion-btn collapsed" data-toggle="collapse" data-target="#payment-method"></a>
		</div><!-- End .accordion-header -->
		
		<div id="payment-method" class="collapse">
			<div class="panel-body">
				<p><?php echo 'Choose your payment method'?></p>
				<?php woocommerce_checkout_payment(); ?>
			</div><!-- End .panel-body -->
		</div><!-- End .panel-collapse -->
	</div>
	
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
