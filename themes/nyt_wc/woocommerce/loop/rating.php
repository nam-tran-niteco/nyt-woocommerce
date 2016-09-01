<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
	return;

$rating = round($product->get_average_rating() / 5 * 100);
$review_count = $product->get_review_count();

?>
<div class="ratings-container">
	<div class="ratings">
		<div class="ratings-result" data-result="<?php echo $rating; ?>"></div>
	</div>
	<?php if ($review_count > 0) : ?>
	<span class="ratings-amount">
		<?php
			echo $review_count;
			if ($review_count > 1) {
				echo " Reviews";
			} else {
				echo " Review";
			}
		?>
	<?php endif; ?>
	</span>
</div>
