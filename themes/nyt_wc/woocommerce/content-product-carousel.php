<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
 * @version 2.6.1
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if (empty($product) || !$product->is_visible()) {
    return;
}
?>
<div class="item">
    <div class="item-image-container">
        <figure>
            <a href="<?php the_permalink($product->ID) ?>">
                <?php echo woocommerce_get_product_thumbnail("shop_thumbnail"); ?>
            </a>
        </figure>
        <?php wc_get_template_part('loop/price')?>
        <!--<span class="discount-rect">-10%</span>-->
        <?php wc_get_template_part('single-product/sale', 'flash')?>
    </div>
    <div class="item-meta-container">
        <div class="ratings-container">
            <?php wc_get_template_part('loop/rating')?>
        </div>
        <h3 class="item-name"><a href="<?php the_permalink($product->ID) ?>"><?php the_title(); ?></a></h3>
        <?php wc_get_template_part('loop/add-to-cart') ?>
    </div>
</div>


