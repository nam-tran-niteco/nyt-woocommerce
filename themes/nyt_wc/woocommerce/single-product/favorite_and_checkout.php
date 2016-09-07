<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="md-margin"></div><!-- Space -->
<div class="product-extra clearfix">
	<div class="product-extra-box-container clearfix">
		<div class="item-action-inner">
			<a href="#" class="icon-button icon-like">Favourite</a>
			<a href="/checkout" class="icon-button icon-compare">Checkout</a>
		</div><!-- End .item-action-inner -->
	</div>

	<div class="md-margin visible-xs"></div>
	
	<?php do_action( 'woocommerce_share' ); // Sharing plugins can hook into here ?>

</div>
