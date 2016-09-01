<?php
require_once('plugins/get-the-image.php');
require_once('plugins/get-the-breadcrumbs.php');
require_once('plugins/get-the-pagination.php');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'woocommerce' );

register_nav_menus(
    array(
        'top_menu' => 'Top Menu',
        'mobile_menu' => 'Mobile Menu',
        'footer_menu' => 'Footer Menu'
    )
);

function nyt_create_widget( $name, $id, $description ) {
    register_sidebar(array(
        'name' => __( $name ),
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="col-md-3 col-sm-4 col-xs-12 widget clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
}
nyt_create_widget( 'Sidebar', 'sidebar', 'Widgets in this area will be shown on the sidebar.');
nyt_create_widget( 'Footer', 'footer', 'Widgets in this area will be shown on the footer.');

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
    wp_enqueue_script('jquery_hoverIntent', get_template_directory_uri(). '/js/jquery.hoverIntent.min.js', array(), '', true);
    wp_enqueue_script('jquery_flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true);
    wp_enqueue_script('jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.min.js', array(), '', true);
    wp_enqueue_script('jquery_prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '', true);
    wp_enqueue_script('jquery_sequence', get_template_directory_uri() . '/js/jquery.sequence-min.js', array(), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'venedor_scripts');


/*
 * CUSTOMIZE SHOP PAGE
 * */
// change shop column
add_filter('loop_shop_columns', function() { return 3; });

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_rating', 16 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 10 );

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

if (  ! function_exists( 'nyt_template_loop_product_container_open' ) ) {
    function nyt_template_loop_product_container_open() {
        echo '<div class="container"><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-9 col-sm-8 col-xs-12 main-content">';
    }
}
add_action( 'woocommerce_before_main_content', 'nyt_template_loop_product_container_open', 15 );

if (  ! function_exists( 'nyt_template_loop_product_container_close' ) ) {
    function nyt_template_loop_product_container_close() {
        echo '</div></div></div></div></div>';
    }
}
add_action( 'woocommerce_sidebar', 'nyt_template_loop_product_container_close', 15 );


?>