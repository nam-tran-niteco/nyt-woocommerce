<?php
/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
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
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() ) {
	return;
}

?>
<form method="post" class="login" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>

	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php if ( $message ) echo wpautop( wptexturize( $message ) ); ?>

	<div class="input-group">
        <span class="input-group-addon">
            <span class="input-icon input-icon-email"></span>
            <span class="input-text"><?php _e( 'Email', 'woocommerce' ); ?> <span class="required">*</span></span>
        </span>
        <input type="text" required class="form-control input-lg" placeholder="Your Email" name="username" id="username">
	</div>
	<div class="input-group xs-margin">
        <span class="input-group-addon">
            <span class="input-icon input-icon-password"></span>
            <span class="input-text"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></span>
        </span>
        <input type="text" required class="form-control input-lg" placeholder="Your Password" name="password" id="password">
	</div>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form' ); ?>

    <span class="help-block text-right">
		<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Forgot your password?', 'woocommerce' ); ?></a>
	</span>

	<div class="input-group custom-checkbox sm-margin top-10px">
		<input type="hidden" name="redirect" value="<?php echo esc_url( $redirect ) ?>" />
        <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
        <span class="checbox-container"><i class="fa fa-check"></i></span>
        <?php _e( 'Remember my password', 'woocommerce' ); ?>
	</div>

    <div>
        <?php wp_nonce_field( 'woocommerce-login' ); ?>
		<input type="submit" class="btn btn-custom-2" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
    </div>
	

	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>
