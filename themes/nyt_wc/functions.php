<?php
require_once('plugins/get-the-image.php');
require_once('plugins/get-the-breadcrumbs.php');
require_once('plugins/get-the-pagination.php');

add_theme_support('post-thumbnails');

register_nav_menus(
        array(
            'top_menu' => 'Top Menu',
            'mobile_menu' => 'Mobile Menu',
            'footer_menu' => 'Footer Menu'
        )
);

register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => 'Widgets in this area will be shown on the sidebar.',
    'before_widget' => '<div class="%1$s %2$s widget clearfix">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>'
));


/*
 * LOAD CSS
 * */
add_action('wp_enqueue_scripts', 'venedor_css');

// Load CSS
function venedor_css() {
    
    wp_enqueue_style('css_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('css_font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('css_owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('css_prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style('css_sequence_slider', get_template_directory_uri() . '/css/sequence-slider.css');
    wp_enqueue_style('css_style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('css_responsive', get_template_directory_uri() . '/css/responsive.css');
}

/*
 * LOAD JAVASCRIPT
 * */
add_action('wp_enqueue_scripts', 'venedor_scripts');

function venedor_scripts() {
    
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-1.11.0.min.js', array(), '', true);
    wp_enqueue_script('jquery_appear', get_template_directory_uri(). '/js/jquery.appear.js', array(), '', true);
    wp_enqueue_script('jquery_elastislide', get_template_directory_uri(). '/js/jquery.elastislide.js', array(), '', true);
    wp_enqueue_script('jquery_fitvids', get_template_directory_uri(). '/js/jquery.fitvids.js', array(), '', true);
    wp_enqueue_script('jquery_isotope', get_template_directory_uri(). '/js/jquery.isotope.min.js', array(), '', true);
    wp_enqueue_script('jquery_jscrollpane', get_template_directory_uri(). '/js/jquery.jscrollpane.min.js', array(), '', true);
    wp_enqueue_script('jquery_mlens', get_template_directory_uri(). '/js/jquery.mlens-1.3.min.js', array(), '', true);
    wp_enqueue_script('jquery_mousewheel', get_template_directory_uri(). '/js/jquery.mousewheel.js', array(), '', true);
    wp_enqueue_script('jquery_nouislider', get_template_directory_uri(). '/js/jquery.nouislider.min.js', array(), '', true);
    wp_enqueue_script('jquery_parallax', get_template_directory_uri(). '/js/jquery.parallax-1.1.3.js', array(), '', true);
    wp_enqueue_script('modernizr', get_template_directory_uri(). '/js/modernizr.custom.js', array(), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '', true);
    wp_enqueue_script('smoothscroll', get_template_directory_uri(). '/js/smoothscroll.js', array(), '', true);
    wp_enqueue_script('retina', get_template_directory_uri(). '/js/retina-1.1.0.min.js', array(), '', true);
    wp_enqueue_script('jquery_placeholder', get_template_directory_uri(). '/js/jquery.placeholder.js', array(), '', true);
    wp_enqueue_script('jquery_hoverIntent', get_template_directory_uri(). '/js/jquery.hoverIntent.min.js', array(), '', true);
    wp_enqueue_script('jquery_flexslider', get_template_directory_uri(). '/js/jquery.flexslider-min.js', array(), '', true);
    wp_enqueue_script('carousel', get_template_directory_uri(). '/js/owl.carousel.min.js', array(), '', true);
    wp_enqueue_script('jflickrfeed', get_template_directory_uri(). '/js/jflickrfeed.min.js', array(), '', true);
    wp_enqueue_script('jquery_prettyPhoto', get_template_directory_uri(). '/js/jquery.prettyPhoto.js', array(), '', true);
    wp_enqueue_script('jquery_sequence', get_template_directory_uri(). '/js/jquery.sequence-min.js', array(), '', true);
    wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), '', true);
}
?>