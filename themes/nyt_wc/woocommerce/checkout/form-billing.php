<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
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
 * @version 2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>

	<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
		
		<h2 class="checkout-title">Your personal details</h2>
		<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">First Name*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your First Name">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Last Name*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Last Lame">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Email">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Telephone*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Telephone">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-fax"></span><span class="input-text">Fax</span></span>
		<input type="text" class="form-control input-lg" placeholder="Your Fax">
	</div><!-- End .input-group -->
	<div class="input-group xlg-margin">
		<span class="input-group-addon"><span class="input-icon input-icon-company"></span><span class="input-text">Company*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Company">
	</div><!-- End .input-group -->
	
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password*</span></span>
		<input type="password" required="" class="form-control input-lg" placeholder="Your Password">
	</div><!-- End .input-group -->
	<div class="input-group xlg-margin">
		<span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password*</span></span>
		<input type="password" required="" class="form-control input-lg" placeholder="Your Password">
	</div><!-- End .input-group -->
	
	<div class="input-group custom-checkbox sm-margin">
				<input type="checkbox"> <span class="checbox-container">
				<i class="fa fa-check"></i>
				</span>
				I wish to subscribe to the Venedor newsletter.
			
	</div><!-- End .input-group -->
	
	<div class="input-group custom-checkbox sm-margin">
				<input type="checkbox"> <span class="checbox-container">
				<i class="fa fa-check"></i>
				</span>
				My delivery and billing addresses are the same.
			
	</div><!-- End .input-group -->
	
	</div><!-- End .col-md-6 -->
	
	<div class="col-md-6 col-sm-6 col-xs-12">
	<h2 class="checkout-title">Your Address</h2>
	
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 1*</span></span>
		<input type="text" class="form-control input-lg" placeholder="Your Address">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 2*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Address">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">City*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your City">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Post Code*</span></span>
		<input type="text" required="" class="form-control input-lg" placeholder="Your Post Code">
	</div><!-- End .input-group -->
	<div class="input-group">
		<span class="input-group-addon"><span class="input-icon input-icon-country"></span><span class="input-text">Country*</span></span>
		<select name="select-country" class="form-control input-lg" id="select-country">
			<option value=" "> </option>
			<option value="America">America</option>
			<option value="Italy">Italy</option>
			<option value="France">France</option>
			<option value="Spain">Spain</option>
			<option value="Brazil">Brazil</option>
		</select>
	</div><!-- End .input-group -->
	<div class="input-group lg-margin">
		<span class="input-group-addon"><span class="input-icon input-icon-region"></span><span class="input-text">Region / State*</span></span>
		<select name="select-state" class="form-control input-lg" id="select-state">
			<option value=" "> </option>
			<option value="California">California</option>
			<option value="Narnia">Narnia</option>
		</select>
	</div><!-- End .input-group -->
	<div class="input-group custom-checkbox md-margin">
				<input type="checkbox"> <span class="checbox-container">
				<i class="fa fa-check"></i>
				</span>
				I have reed and agree to the <a href="#">Privacy Policy</a>.
			
	</div><!-- End .input-group -->
	<a href="#" class="btn btn-custom-2">CONTINUE</a>
	</div><!-- End .col-md-6 -->
	
	</div><!-- End .row -->






	