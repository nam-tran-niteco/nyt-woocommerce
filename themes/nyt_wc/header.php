<!DOCTYPE html>
<html class>
    <head>
        <meta charset="utf-8">
        <title>Venedor - Responsive eCommerce Template</title>
        <meta name="description" content="Responsive modern ecommerce Html5 Template">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300" rel="stylesheet" id="googlefont">

        <!--        <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/font-awesome.min.css">
                <link rel="stylesheet" href="css/prettyPhoto.css">
                <link rel="stylesheet" href="css/colpick.css">
                <link rel="stylesheet" href="css/sequence-slider.css">
                <link rel="stylesheet" href="css/owl.carousel.css">
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/responsive.css">-->

        <!-- Favicon and Apple Icons -->
        <link rel="icon" type="image/png" href="images/icons/icon.html">
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.html">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.html">

        <!--- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->

        <style id="custom-style">

        </style>
        <style>.sequence-preloader{height: 100%;position: absolute;width: 100%;z-index: 999999;}@keyframes preload{0%{opacity: 1;}50%{opacity: 0;}100%{opacity: 1;}}.sequence-preloader .preloading .circle{fill: #ff9442;display: inline-block;height: 12px;position: relative;top: -50%;width: 12px;animation: preload 1s infinite; animation: preload 1s infinite;}.preloading{display:block;height: 12px;margin: 0 auto;top: 50%;margin-top:-6px;position: relative;width: 48px;}.sequence-preloader .preloading .circle:nth-child(2){animation-delay: .15s; animation-delay: .15s;}.sequence-preloader .preloading .circle:nth-child(3){animation-delay: .3s; animation-delay: .3s;}.preloading-complete{opacity: 0;visibility: hidden;transition-duration: 1s; transition-duration: 1s;}div.inline{background-color: #ff9442; margin-right: 4px; float: left;}</style><style type="text/css">.fancybox-margin{margin-right:17px;}
        </style>

        <?php wp_head() ?>
        <script>
            window.fbAsyncInit = function() {
            FB.init({
            appId      : 'YOUR_APP_ID', // App ID
            channelUrl : 'www.nyt.woocommerce.dev', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
        });
        };
        // Load the SDK Asynchronously
        (function(d){
        var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "//connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
        }(document));
     </script>
    </head>

    <body>
        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->
        <div id="status">
        </div>
        <div class="wrapper">
            <header id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-top-left">
                                    <ul id="top-links" class="clearfix">
                                        <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                        <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                        <li><a href="/cart" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                        <li><a href="/checkout" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                    </ul>
                                </div><!-- End .header-top-left -->
                                <div class="header-top-right">
                                    <div class="header-top-dropdowns pull-right">
                                        <div class="btn-group dropdown-money">
                                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                                <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">€</span></a></li>
                                                <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">£</span></a></li>
                                            </ul>
                                        </div><!-- End .btn-group -->
                                        <div class="btn-group dropdown-language">
                                            <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                                <span class="flag-container"><img src="<?php echo get_template_directory_uri() ?>/images/england-flag.png" alt="flag of england"></span>
                                                <span class="hide-for-xs">English</span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#"><span class="flag-container"><img src="<?php echo get_template_directory_uri() ?>/images/italy-flag.png" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                                <li><a href="#"><span class="flag-container"><img src="<?php echo get_template_directory_uri() ?>/images/spain-flag.png" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                                <li><a href="#"><span class="flag-container"><img src="<?php echo get_template_directory_uri() ?>/images/france-flag.png" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                                <li><a href="#"><span class="sm-separator"><img src="<?php echo get_template_directory_uri() ?>/images/germany-flag.png" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                            </ul>
                                        </div><!-- End .btn-group -->
                                    </div><!-- End .header-top-dropdowns -->

                                    <div class="header-text-container pull-right">
                                        <p class="header-text">Welcome to Venedor!</p>
                                        <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
                                        <p class="header-link">
                                            <?php if (is_user_logged_in()) { ?>

                                                Hello, <?php echo get_current_user(); ?>

                                                &nbsp; <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>

                                            <?php } else { ?>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">log in</a>&nbsp;or&nbsp;<a href="">create an account</a></p>
                                        <?php } ?>
                                    </div><!-- End .pull-right -->
                                </div><!-- End .header-top-right -->
                            </div><!-- End .col-md-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End #header-top -->

                <div id="inner-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                                <h1 class="logo clearfix">
                                    <span>Responsive eCommerce Template</span>
                                    <a href="/" title="Venedor eCommerce Template"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Venedor Commerce Template" width="238" height="76"></a>
                                </h1>
                            </div><!-- End .col-md-5 -->
                            <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">

                                <div class="header-box contact-infos pull-right">
                                    <ul>
                                        <li><span class="header-box-icon header-box-icon-skype"></span>nyt_cms_support</li>
                                        <li><span class="header-box-icon header-box-icon-email"></span><a href="nyt_cms@gmail.com">nyt_cms@gmail.com</a></li>
                                    </ul>
                                </div><!-- End .contact-infos -->

                                <div class="header-box contact-phones pull-right clearfix">
                                    <span class="header-box-icon header-box-icon-earphones"></span>
                                    <ul class="pull-left">
                                        <li>+(404) 158 14 25 78</li>
                                        <li>+(404) 851 21 48 15</li>
                                    </ul>
                                </div><!-- End .contact-phones -->

                            </div><!-- End .col-md-7 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->

                    <div id="main-nav-container" class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <nav id="main-nav">
                                        <div id="responsive-nav">
                                            <div id="responsive-nav-button">
                                                Menu <span id="responsive-nav-button-icon"></span>
                                            </div><!-- responsive-nav-button -->

                                            <!--Mobile Menu-->
                                            <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'mobile_menu',
                                                'container' => '',
                                                'menu_class' => 'clearfix responsive-nav'))
                                            ?>
                                        </div>

                                        <!--Top Menu-->
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'top_menu',
                                            'container' => '',
                                            'menu_class' => 'menu clearfix'))
                                        ?>
                                    </nav>

                                    <!--Show mini info for all products in cart-->
                                    <?php if (!is_page('cart')): ?>
                                        <div id="quick-access">
                                            <div class="dropdown-cart-menu-container pull-right">
                                                <div class="btn-group dropdown-cart">
                                                    <?php
                                                    $items = WC()->cart->get_cart();
                                                    $total_cost = WC()->cart->get_cart_total();

                                                    // display MAX products for best display
                                                    $MAX_PRODUCT = 5;
                                                    $item_count = 0;

                                                    $cart_button_title = "Cart";
                                                    ?>
                                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                                        <span class="cart-menu-icon"></span>
                                                        <?php echo sizeof($items) > 1 ? '' . sizeof($items) . ' items' : '' . sizeof($items) . ' item' ?> <span class="drop-price">- <?php echo $total_cost ?></span>
                                                    </button>

                                                    <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                                        <p class="dropdown-cart-description">Products in shopping cart</p>
                                                        <ul class="dropdown-cart-product-list">
                                                            <?php
                                                            foreach ($items as $cart_item_key => $cart_item):
                                                                $item_count++;
                                                                if ($item_count > $MAX_PRODUCT) {
                                                                    $cart_button_title = "See all";
                                                                    break;
                                                                }
                                                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                                                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                                                                ?>
                                                                <li class="item clearfix">

                                                                    <!--Button delete product-->
                                                                    <?php
                                                                    echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                                                    '<a href="%s" class="delete-item" title="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-times"></i></a>', esc_url(WC()->cart->get_remove_url($cart_item_key)), __('Remove this item', 'woocommerce'), esc_attr($product_id), esc_attr($_product->get_sku())
                                                                            ), $cart_item_key);
                                                                    ?>

                                                                    <!--Product thumbnail-->
                                                                    <figure>
                                                                        <?php
                                                                        $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                                                        if (!$product_permalink) {
                                                                            echo $thumbnail;
                                                                        } else {
                                                                            printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
                                                                        }
                                                                        ?>
                                                                    </figure>

                                                                    <!--Product detail--> 
                                                                    <div class="dropdown-cart-details">
                                                                        <p class="item-name">
                                                                            <?php
                                                                            if (!$product_permalink) {
                                                                                echo apply_filters('woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key) . '&nbsp;';
                                                                            } else {
                                                                                echo apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_title()), $cart_item, $cart_item_key);
                                                                            }

                                                                            // Meta data
                                                                            echo WC()->cart->get_item_data($cart_item);

                                                                            // Backorder notification
                                                                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                                                echo '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>';
                                                                            }
                                                                            ?>
                                                                        </p>
                                                                        <p>
                                                                            <?php echo $cart_item['quantity'] ?>x
                                                                            <span class="item-price"><?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?></span>
                                                                        </p>
                                                                    </div><!-- End .dropdown-cart-details -->
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>

                                                        <ul class="dropdown-cart-total">
                                                            <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                                            <li><span class="dropdown-cart-total-title">Total:</span><?php echo $total_cost ?><!--<span class="sub-price">.99</span>--></li>
                                                        </ul><!-- .dropdown-cart-total -->
                                                        <div class="dropdown-cart-action">
                                                            <p><a href="/cart" class="btn btn-custom-2 btn-block"><?php echo $cart_button_title ?></a></p>
                                                            <p><a href="/checkout" class="btn btn-custom btn-block">Checkout</a></p>
                                                        </div><!-- End .dropdown-cart-action -->

                                                    </div><!-- End .dropdown-cart -->
                                                </div><!-- End .btn-group -->
                                            </div><!-- End .dropdown-cart-menu-container -->
                                        <?php endif; ?>


                                        <!--Search form-->
                                        <?php get_product_search_form(true) ?>
                                    </div><!-- End #quick-access -->
                                </div><!-- End .col-md-12 -->
                            </div><!-- End .row -->
                        </div><!-- End .container -->

                    </div><!-- End #nav -->
                </div><!-- End #inner-header -->
            </header>
