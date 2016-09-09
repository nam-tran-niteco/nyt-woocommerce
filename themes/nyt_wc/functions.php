<?php

require_once('plugins/get-the-image.php');
require_once('plugins/get-the-breadcrumbs.php');
require_once('plugins/get-the-pagination.php');

add_theme_support('post-thumbnails');
add_theme_support('woocommerce');

// remove all default woocommerce style
add_filter('woocommerce_enqueue_styles', '__return_false');

add_action( 'wp_enqueue_scripts', 'woocommerce_cart_script_cleaner', 99 );

function woocommerce_cart_script_cleaner() {
    // Remove the generator tag
    remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
    
    if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
        wp_dequeue_script( 'wc_cart_fragments' );
        wp_dequeue_script( 'wc_cart' );
        wp_dequeue_script( 'wc_cart_params' );
    }
}

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
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), '', true);
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
    $vars = array( 'ajax_url' => admin_url( 'admin-ajax.php' ) );
    wp_localize_script( 'main', 'WC_UPDATE_CART', $vars );
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

/*
 * CUSTOMIZE SHOP PAGE
 * */
add_filter( 'loop_shop_columns', function() { return 3; } );
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_rating', 16 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 10 );

remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination', 30 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 8 );


// override
if (  ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
    function woocommerce_template_loop_product_title() {
        echo '<h3 class="item-name">' . get_the_title() . '</h3>';
    }
}

if ( ! function_exists( 'woocommerce_breadcrumb' ) ) {
    function woocommerce_breadcrumb( $args = array() ) {
        $args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
            'delimiter'   => '',
            'wrap_before' => '<div id="category-breadcrumb"><div class="container"><ul class="breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
            'wrap_after'  => '</ul></div></div>',
            'before'      => '<li>',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' )
        ) ) );

        $breadcrumbs = new WC_Breadcrumb();

        if ( ! empty( $args['home'] ) ) {
            $breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
        }

        $args['breadcrumb'] = $breadcrumbs->generate();

        wc_get_template( 'global/breadcrumb.php', $args );
    }
}

if ( ! function_exists( 'woocommerce_catalog_ordering' ) ) {

    /**
     * Output the product sorting options.
     *
     * @subpackage  Loop
     */
    function woocommerce_catalog_ordering() {
        global $wp_query;

        if ( 1 === $wp_query->found_posts || ! woocommerce_products_will_display() ) {
            return;
        }

        $orderby                 = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
        $show_default_orderby    = 'menu_order' === apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
        $catalog_orderby_options = apply_filters( 'woocommerce_catalog_orderby', array(
            'menu_order' => __( 'Default', 'woocommerce' ),
            'popularity' => __( 'Popularity', 'woocommerce' ),
            'rating'     => __( 'Average rating', 'woocommerce' ),
            'date'       => __( 'Newness', 'woocommerce' ),
            'price'      => __( 'Price: low to high', 'woocommerce' ),
            'price-desc' => __( 'Price: high to low', 'woocommerce' )
        ) );

        if ( ! $show_default_orderby ) {
            unset( $catalog_orderby_options['menu_order'] );
        }

        if ( 'no' === get_option( 'woocommerce_enable_review_rating' ) ) {
            unset( $catalog_orderby_options['rating'] );
        }

        wc_get_template( 'loop/orderby.php', array( 'catalog_orderby_options' => $catalog_orderby_options, 'orderby' => $orderby, 'show_default_orderby' => $show_default_orderby ) );
    }
}

if (  ! function_exists( 'nyt_template_loop_product_item_image_container_open' ) ) {
    function nyt_template_loop_product_item_image_container_open() {
        echo '<div class="item-image-container">';
    }
}
add_action( 'woocommerce_before_shop_loop_item', 'nyt_template_loop_product_item_image_container_open', 14 );

if (  ! function_exists( 'nyt_template_loop_product_item_image_container_close' ) ) {
    function nyt_template_loop_product_item_image_container_close() {
        echo '</div>';
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'nyt_template_loop_product_item_image_container_close', 14 );


if (  ! function_exists( 'nyt_template_loop_product_item_meta_container_open' ) ) {
    function nyt_template_loop_product_item_meta_container_open() {
        echo '<div class="item-meta-container">';
    }
}
add_action( 'woocommerce_before_shop_loop_item_title', 'nyt_template_loop_product_item_meta_container_open', 15 );

if (  ! function_exists( 'nyt_template_loop_product_item_meta_container_close' ) ) {
    function nyt_template_loop_product_item_meta_container_close() {
        echo '</div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'nyt_template_loop_product_item_meta_container_close', 15 );


/*
 * CUSTOMIZE SINGLE PRODUCT PAGE
 * */

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 22 );


if (  ! function_exists( 'nyt_template_hr' ) ) {
    function nyt_template_hr() {
        echo '<hr/>';
    }
}
add_action( 'woocommerce_single_product_summary', 'nyt_template_hr', 21 );
add_action( 'woocommerce_single_product_summary', 'nyt_template_hr', 23 );

if (  ! function_exists( 'nyt_template_single_favorite_and_checkout' ) ) {
    function nyt_template_single_favorite_and_checkout() {
        wc_get_template( 'single-product/favorite_and_checkout.php' );
    }
}
add_action( 'woocommerce_single_product_summary', 'nyt_template_single_favorite_and_checkout', 31 );


// add default password for user register by facebook
add_action( 'user_register', 'nyt_user_register', 10, 1 );

function nyt_user_register( $user_id ) {
    if ( isset( $_POST['password'] ) ) {
        wp_set_password( $_POST['password'], $user_id );
    }
    
    nyt_wp_login_auto($_POST['user_login'], $_POST['password'], true);
}

add_action('register_post', 'nyt_register_fail_redirect', 99, 3);

function nyt_register_fail_redirect( $sanitized_user_login, $user_email, $errors ){
    if( isset($_POST['facebook'])) {
        //this line is copied from register_new_user function of wp-login.php
        $errors = apply_filters( 'registration_errors', $errors, $sanitized_user_login, $user_email );
        //this if check is copied from register_new_user function of wp-login.php
        if ( $errors->get_error_code() ){
            nyt_wp_login_auto($_POST['user_login'], $_POST['password'], true);
            exit;   
        }
    }
}

function nyt_wp_login_auto($user_login, $user_password, $remember) {
    wp_signon(array(
        'user_login'    => $user_login,
        'user_password' => $user_password,
        'remember'      => $remember
    ), true);
    wp_redirect(home_url());
}

function wpse_19692_registration_redirect() {
    return home_url( '/my-page' );
}

add_filter( 'registration_redirect', 'wpse_19692_registration_redirect' );

/**
 * Auto update cart after quantity change
 *
 * @return  string
 **/
add_action( 'woocommerce_after_cart', 'custom_after_cart' );
function custom_after_cart() {
    echo '<script>
    jQuery(document).ready(function($) {
        var upd_cart_btn = $(".update-cart-button");
        upd_cart_btn.hide();
        $(".cart-form").find(".qty").on("change", function(){
            upd_cart_btn.trigger("click");
        });
    });
    </script>';
}

// Update Cart
add_action( 'wp_ajax_nyt_update_cart', array( __CLASS__, 'update_cart' ) );
add_action( 'wp_ajax_nopriv_nyt_update_cart', array( __CLASS__, 'update_cart' ) );

function update_cart(){
    ob_start();

    // Skip product if no updated quantity was posted or no hash on WC_Cart
    if( !isset( $_POST['hash'] ) || !isset( $_POST['quantity'] ) ){
        exit;
    }

    $cart_item_key = $_POST['hash'];

    if( !isset( WC()->cart->get_cart()[ $cart_item_key ] ) ){
        exit;
    }

    $values = WC()->cart->get_cart()[ $cart_item_key ];

    $_product = $values['data'];

    // Sanitize
    $quantity = apply_filters( 'woocommerce_stock_amount_cart_item', apply_filters( 'woocommerce_stock_amount', preg_replace( "/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT)) ), $cart_item_key );

    if ( '' === $quantity || $quantity == $values['quantity'] )
        exit;

    // Update cart validation
    $passed_validation  = apply_filters( 'woocommerce_update_cart_validation', true, $cart_item_key, $values, $quantity );

    // is_sold_individually
    if ( $_product->is_sold_individually() && $quantity > 1 ) {
        wc_add_notice( sprintf( __( 'You can only have 1 %s in your cart.', 'woocommerce' ), $_product->get_title() ), 'error' );
        $passed_validation = false;
    }

    if ( $passed_validation ) {
        WC()->cart->set_quantity( $cart_item_key, $quantity, false );
    }

    // Recalc our totals
    WC()->cart->calculate_totals();
    woocommerce_cart_totals();
    
    wp_send_json('{"status": "success"}');
    exit;
    
    die();
}


?>