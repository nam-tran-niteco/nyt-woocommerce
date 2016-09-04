<?php

require_once('plugins/get-the-image.php');
require_once('plugins/get-the-breadcrumbs.php');
require_once('plugins/get-the-pagination.php');

add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

// remove all default woocommerce style
add_filter('woocommerce_enqueue_styles', '__return_false');

register_nav_menus(
        array(
            'top_menu' => 'Top Menu',
            'mobile_menu' => 'Mobile Menu',
            'footer_menu' => 'Footer Menu'
        )
);

function nyt_create_widget($name, $id, $description) {
    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="col-md-3 col-sm-4 col-xs-12 widget clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
}

nyt_create_widget('Sidebar', 'sidebar', 'Widgets in this area will be shown on the sidebar.');
nyt_create_widget('Footer', 'footer', 'Widgets in this area will be shown on the footer.');

/*
 * LOAD CSS
 * */

function venedor_css() {
    wp_enqueue_style('css_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('css_font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('css_owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('css_prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style('css_sequence_slider', get_template_directory_uri() . '/css/sequence-slider.css');
    wp_enqueue_style('css_style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('css_responsive', get_template_directory_uri() . '/css/responsive.css');
}

add_action('wp_enqueue_scripts', 'venedor_css');

/*
 * LOAD JAVASCRIPT
 * */

function venedor_scripts() {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '', true);
    wp_enqueue_script('jquery_appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), '', true);
    wp_enqueue_script('jquery_elastislide', get_template_directory_uri() . '/js/jquery.elastislide.js', array(), '', true);
    wp_enqueue_script('jquery_fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '', true);
    wp_enqueue_script('jquery_isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '', true);
    wp_enqueue_script('jquery_jscrollpane', get_template_directory_uri() . '/js/jquery.jscrollpane.min.js', array(), '', true);
    wp_enqueue_script('jquery_mlens', get_template_directory_uri() . '/js/jquery.mlens-1.3.min.js', array(), '', true);
    wp_enqueue_script('jquery_mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js', array(), '', true);
    wp_enqueue_script('jquery_nouislider', get_template_directory_uri() . '/js/jquery.nouislider.min.js', array(), '', true);
    wp_enqueue_script('jquery_parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '', true);
    wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina-1.1.0.min.js', array(), '', true);
    wp_enqueue_script('jquery_placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array(), '', true);
    wp_enqueue_script('jquery_hoverIntent', get_template_directory_uri() . '/js/jquery.hoverIntent.min.js', array(), '', true);
    wp_enqueue_script('jquery_flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true);
    wp_enqueue_script('jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.min.js', array(), '', true);
    wp_enqueue_script('jquery_prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true);
    wp_enqueue_script('jquery_sequence', get_template_directory_uri() . '/js/jquery.sequence-min.js', array(), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'venedor_scripts');

function update_total_price() {
    // Skip product if no updated quantity was posted or no hash on WC_Cart
    if (!isset($_POST['hash']) || !isset($_POST['quantity'])) {
        exit;
    }

    $cart_item_key = $_POST['hash'];

    if (!isset(WC()->cart->get_cart()[$cart_item_key])) {
        exit;
    }

    $values = WC()->cart->get_cart()[$cart_item_key];

    $_product = $values['data'];

    // Sanitize
    $quantity = apply_filters('woocommerce_stock_amount_cart_item', apply_filters('woocommerce_stock_amount', preg_replace("/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT))), $cart_item_key);

    if ('' === $quantity || $quantity == $values['quantity'])
        exit;

    // Update cart validation
    $passed_validation = apply_filters('woocommerce_update_cart_validation', true, $cart_item_key, $values, $quantity);

    // is_sold_individually
    if ($_product->is_sold_individually() && $quantity > 1) {
        wc_add_notice(sprintf(__('You can only have 1 %s in your cart.', 'woocommerce'), $_product->get_title()), 'error');
        $passed_validation = false;
    }

    if ($passed_validation) {
        WC()->cart->set_quantity($cart_item_key, $quantity, false);
    }

    // Recalc our totals
    WC()->cart->calculate_totals();
    woocommerce_cart_totals();
    exit;
}

?>