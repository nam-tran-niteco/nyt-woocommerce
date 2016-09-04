<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$rating = round($product->get_average_rating() / 5 * 100);

?>

<li>
	<div class="related-product clearfix">
		<figure>
			<?php echo woocommerce_get_product_thumbnail("shop_thumbnail"); ?>
		</figure>
		<h5><a href="<?php the_permalink( $product->ID )?>"><?php the_title(); ?></a></h5>
		<div class="ratings-container">
			<div class="ratings">
				<div class="ratings-result" data-result="<?php echo $rating; ?>"></div>
			</div>
		</div>
		<div class="related-price"><?php echo get_woocommerce_currency_symbol(get_woocommerce_currency()) . $product->price; ?></div>
	</div>
</li>
