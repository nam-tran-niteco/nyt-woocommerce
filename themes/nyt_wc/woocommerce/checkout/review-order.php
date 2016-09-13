<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
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
} ?> 

<!-- <tfoot>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>


		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>


	</tfoot>
</table>  --> 

							  
<div class="table-responsive"> 
	<table class="table checkout-table">
		<thead>
			<tr>
				<th class="table-title">Product Name</th>
				<th class="table-title">Product Code</th>
				<th class="table-title">Unit Price</th>
				<th class="table-title">Quantity</th>
				<th class="table-title">SubTotal</th>
			</tr>
		</thead>

		<tbody>
			<?php do_action( 'woocommerce_review_order_before_cart_contents' );
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			?>
			<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
				<td class="item-name-col">
					<figure>
						<a href="#"><?php echo $_product->get_image();?></a>
						
					</figure>
					<header class="item-name ">
						<a href="#">
							<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
							<?php echo WC()->cart->get_item_data( $cart_item ); ?>
						</a>
					</header>
				</td>
				<td class="item-code">N/A</td>
				<td class="item-price-col">
					<span class="item-price-special">
						<?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );?>
					</span>
				</td>
				<td>
					<p id= "item-quantity"><?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', sprintf( $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?></p>
				</td>
				<td class="item-total-col">
					<span class="item-price-special">
						<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
					</span>
				</td>
			</tr>
			<?php
						}
					}

					do_action( 'woocommerce_review_order_after_cart_contents' );
			?>
		</tbody>
		<tfoot>
			
			<!--<tr>
				<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
						<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
							<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
							<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
						</tr>
					<?php endforeach; ?>
			</tr> -->
			
			<tr class="cart-subtotal">
				<td class="checkout-table-title" colspan="4"><strong>SUBTOTAL:</strong></td>
				<td class="checkout-table-price">
					<strong><?php wc_cart_totals_subtotal_html(); ?></strong>
				</td>
			</tr>
			<tr>
				<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
					<td class="checkout-table-title" colspan="4"><strong>SHIPPING:</strong></td>
					<td class="checkout-table-price">
						<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>
						<strong><?php wc_cart_totals_fee_html( $shipping ); ?></strong>
						<!--<strong><?php wc_cart_totals_shipping_html(); ?></strong>-->
						<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>
					</td>
				<?php endif; ?>
			</tr> 
			<tr>
				<td class="checkout-table-title" colspan="4"><strong>TAX:</strong></td>
				<td class="checkout-table-price">
					<strong><?php wc_cart_totals_taxes_total_html(); ?></strong>
				</td>
			</tr>
			<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>
			<tr class="order-total">
				<td class="checkout-total-title" colspan="4"><strong>TOTAL:</strong></td>
				<td class="checkout-total-price cart-total"><strong><?php wc_cart_totals_order_total_html(); ?></strong></td>
			</tr>
			<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
		</tfoot>
	</table>
</div><!-- End .table-reponsive -->
<div class="lg-margin"></div><!-- space -->
