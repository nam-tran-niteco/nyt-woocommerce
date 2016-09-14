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
		
		<div id="delivery-details" class="collapse in">
			<div class="panel-body">
				<p><?php echo 'Details about delivery ' ?></p>
				<!--<?php do_action( 'woocommerce_checkout_shipping' ); ?>-->
                                <div class="delivery-info">
                                    <div class="delivery-distance">
                                        <h4>Your Distance</h4>
                                        <span id="distance-shipping" class="distance">0 km</span>
                                    </div>
                                    
                                    <div class="shipping-price">
                                        <h4>Shipping price</h4>
                                        <span id="price-shipping" class="price-shipping">$ 0</span>
                                    </div>
                                </div>
                                
                                <div class="checkout-map">
                                    <div id="map"></div>
                                </div>
                                
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

<!--&libraries=places&callback=initMap-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcYOezeTBP-c9bWFmUEXXpxWANYCSHazg&libraries=places&callback=initMap"></script>
<script>
// GOOGLE MAP SETTING
// ==========================================
var autocomplete;
var infowindow;
var shipping_center_marker;
var shipping_center;
var searched_location_marker;
var searched_place;
var map;
var directionsService;
var directionsDisplay;

function initMap() {
	var mapDiv = document.getElementById('map');
        directionsService = new google.maps.DirectionsService();
        directionsDisplay =  new google.maps.DirectionsRenderer();

	shipping_center = new google.maps.LatLng(21.0128799, 105.83559579999996);
	map = new google.maps.Map(mapDiv, {
                center: shipping_center,
                zoom: 10,
                scrollwheel: false
	});
        
        directionsDisplay.setMap(map);
        
        shipping_center_marker = new google.maps.Marker({
            map: map,
            position: shipping_center
        })
	infowindow = new google.maps.InfoWindow();
	searched_location_marker = new google.maps.Marker({
		map: map
	})

	autocomplete = new google.maps.places.Autocomplete(
		(document.getElementById('billing_address_2')), {types: ['geocode']}
	)

}
</script>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
