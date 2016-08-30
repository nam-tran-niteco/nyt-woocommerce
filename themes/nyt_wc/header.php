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
    </head>

    <body>
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
                                        <li><a href="cart.html" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                        <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
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
                                        <p class="header-link"><a href="#">login</a>&nbsp;or&nbsp;<a href="#">create an account</a></p>
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
                                    <a href="index-2.html" title="Venedor eCommerce Template"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Venedor Commerce Template" width="238" height="76"></a>
                                </h1>
                            </div><!-- End .col-md-5 -->
                            <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">

                                <div class="header-box contact-infos pull-right">
                                    <ul>
                                        <li><span class="header-box-icon header-box-icon-skype"></span>venedor_support</li>
                                        <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:venedor@gmail.com">venedor@gmail.com</a></li>
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
<!--                                            <ul class="clearfix responsive-nav">
                                                <li><span class="menu-button"></span>
                                                    <a class="active" href="index-2.html">HOME</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Home 1</a></li>
                                                        <li><a href="../blue/index-2.html">Home 2</a></li>
                                                        <li><a href="../orange/index-2.html">Home 3</a></li>
                                                        <li><a href="../pink/index-2.html">Home 4</a></li>
                                                    </ul>
                                                </li>
                                                <li class=""><span class="menu-button"></span><a href="#">SHOP</a>
                                                    <div class="mega-menu clearfix">
                                                        <div class="col-5"><span class="menu-button"></span>
                                                            <a href="category.html" class="mega-menu-title">Clothing</a> End .mega-menu-title 
                                                            <ul class="mega-menu-list clearfix">
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Jeans &amp; Trousers</a></li>
                                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                                <li><a href="#">Tops &amp; T-Shirts</a></li>
                                                                <li><a href="#">Jackets &amp; Coats</a></li>
                                                                <li><a href="#">Skirts</a></li>
                                                            </ul>
                                                        </div> End .col-5 
                                                        <div class="col-5"><span class="menu-button"></span>
                                                            <a href="category.html" class="mega-menu-title">Shoes</a> End .mega-menu-title 
                                                            <ul class="mega-menu-list clearfix">
                                                                <li><a href="#">Formal Shoes</a></li>
                                                                <li><a href="#">Casual Shoes</a></li>
                                                                <li><a href="#">Sandals</a></li>
                                                                <li><a href="#">Boots</a></li>
                                                                <li><a href="#">Wide Fit</a></li>
                                                                <li><a href="#">Slippers</a></li>
                                                            </ul>
                                                        </div> End .col-5 
                                                        <div class="col-5"><span class="menu-button"></span>
                                                            <a href="category.html" class="mega-menu-title">Accessories</a> End .mega-menu-title 
                                                            <ul class="mega-menu-list clearfix">
                                                                <li><a href="#">Bags &amp; Purses</a></li>
                                                                <li><a href="#">Belts</a></li>
                                                                <li><a href="#">Gloves</a></li>
                                                                <li><a href="#">Jewellery</a></li>
                                                                <li><a href="#">Sunglasses</a></li>
                                                                <li><a href="#">Hair Accessories</a></li>
                                                            </ul>
                                                        </div> End .col-5 
                                                        <div class="col-5"><span class="menu-button"></span>
                                                            <a href="category.html" class="mega-menu-title">Sports</a> End .mega-menu-title 
                                                            <ul class="mega-menu-list clearfix">
                                                                <li><a href="#">Sport Tops &amp; Vests</a></li>
                                                                <li><a href="#">Swimwear</a></li>
                                                                <li><a href="#">Footwear</a></li>
                                                                <li><a href="#">Sports Underwear</a></li>
                                                                <li><a href="#">Bags</a></li>
                                                            </ul>
                                                        </div> End .col-5 

                                                        <div class="col-5"><span class="menu-button"></span>
                                                            <a href="category.html" class="mega-menu-title">Maternity</a> End .mega-menu-title 
                                                            <ul class="mega-menu-list clearfix">
                                                                <li><a href="#">Tops &amp; Skirts</a></li>
                                                                <li><a href="#">Dresses</a></li>
                                                                <li><a href="#">Trousers &amp; Shorts</a></li>
                                                                <li><a href="#">Knitwear</a></li>
                                                                <li><a href="#">Jackets &amp; Coats</a></li>
                                                            </ul>
                                                        </div> End .col-5 
                                                    </div> End .mega-menu 
                                                </li>

                                                <li><span class="menu-button"></span>
                                                    <a href="#">PAGES</a>
                                                    <ul>
                                                        <li><a href="product.html">Product</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><span class="menu-button"></span><a href="category.html">Category</a>
                                                            <ul>
                                                                <li><a href="category-list.html">Category list</a></li>
                                                                <li><a href="category.html">Category Banner 1</a></li>
                                                                <li><a href="category-banner-2.html">Category Banner 2</a></li>
                                                                <li><a href="category-banner-3.html">Category Banner 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="aboutus.html">About Us</a></li>
                                                        <li><a href="register-account.html">Register Account</a></li>
                                                        <li><a href="compare-products.html">Compare Products</a></li>
                                                        <li><a href="404.html">404 Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="menu-button"></span><a href="#">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-4.html">Four Columns</a></li>
                                                        <li><a href="single-portfolio.html">Portfolio Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><span class="menu-button"></span><a href="blog.html">Blog</a>
                                                    <ul>
                                                        <li><a href="single.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                            </ul>-->
                                            <?php wp_nav_menu(array(
                                                'theme_location' => 'mobile_menu', 
                                                'container' => '',
                                                'menu_class' => 'clearfix responsive-nav'))?>
                                        </div>
                                        <?php wp_nav_menu(array(
                                            'theme_location' => 'top_menu',
                                            'container' => '',
                                            'menu_class' => 'menu clearfix'))?>
                                    </nav>

                                    <div id="quick-access">
                                        <div class="dropdown-cart-menu-container pull-right">
                                            <div class="btn-group dropdown-cart">
                                                <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                                    <span class="cart-menu-icon"></span>
                                                    0 item(s) <span class="drop-price">- $0.00</span>
                                                </button>

                                                <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                                    <p class="dropdown-cart-description">Recently added item(s).</p>
                                                    <ul class="dropdown-cart-product-list">
                                                        <li class="item clearfix">
                                                            <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                            <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                            <figure>
                                                                <a href="product.html"><img src="images/products/thumbnails/phone4.jpg" alt="phone 4"></a>
                                                            </figure>
                                                            <div class="dropdown-cart-details">
                                                                <p class="item-name">
                                                                    <a href="product.html">Cam Optia AF Webcam </a>
                                                                </p>
                                                                <p>
                                                                    1x
                                                                    <span class="item-price">$499</span>
                                                                </p>
                                                            </div><!-- End .dropdown-cart-details -->
                                                        </li>
                                                        <li class="item clearfix">
                                                            <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                            <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
                                                            <figure>
                                                                <a href="product.html"><img src="images/products/thumbnails/phone2.jpg" alt="phone 2"></a>
                                                            </figure>
                                                            <div class="dropdown-cart-details">
                                                                <p class="item-name">
                                                                    <a href="product.html">Iphone Case Cover Original</a>
                                                                </p>
                                                                <p>
                                                                    1x
                                                                    <span class="item-price">$499<span class="sub-price">.99</span></span>
                                                                </p>
                                                            </div><!-- End .dropdown-cart-details -->
                                                        </li>
                                                    </ul>

                                                    <ul class="dropdown-cart-total">
                                                        <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                                        <li><span class="dropdown-cart-total-title">Total:</span>$1005<span class="sub-price">.99</span></li>
                                                    </ul><!-- .dropdown-cart-total -->
                                                    <div class="dropdown-cart-action">
                                                        <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                                        <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                                    </div><!-- End .dropdown-cart-action -->

                                                </div><!-- End .dropdown-cart -->
                                            </div><!-- End .btn-group -->
                                        </div><!-- End .dropdown-cart-menu-container -->


                                        <form class="form-inline quick-search-form" role="form" action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search here">
                                            </div><!-- End .form-inline -->
                                            <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                        </form>
                                    </div><!-- End #quick-access -->
                                </div><!-- End .col-md-12 -->
                            </div><!-- End .row -->
                        </div><!-- End .container -->

                    </div><!-- End #nav -->
                </div><!-- End #inner-header -->
            </header>
