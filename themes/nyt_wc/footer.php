
	<footer id="footer">
    	<div id="inner-footer">
			<div class="container">
				<div class="row">

				 	<?php if( dynamic_sidebar( 'footer' ) ); ?>

					<div class="col-md-3 col-sm-12 col-xs-12 widget">
						<h3>FACEBOOK LIKE BOX</h3>

						<!-- <div class="facebook-likebox">
							<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
						</div> -->

					</div>
				</div>
			</div>

    	</div>

    	<div id="footer-bottom">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
    					<ul class="social-links clearfix">
    						<li><a target="_blank" href="https://www.facebook.com/Niteco/" class="social-icon icon-facebook"></a></li>
    						<li><a target="_blank" href="https://twitter.com/nitecovietnam" class="social-icon icon-twitter"></a></li>
    						<li><a href="mailto:info@niteco.com" class="social-icon icon-email"></a></li>
    					</ul>
    				</div>

    				<div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
    					<p>&copy; <?php echo date('Y'); ?> Powered by Company™. All Rights Reserved.</p>
    				</div>
    			</div>
			</div>
    	</div>
    </footer>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOG IN</h4>
            </div>
            <div class="modal-body">
                <?php
                    wp_login_form(array(
                          'echo'           => true,
                          'remember'       => true,
                          'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                          'form_id'        => 'loginform',
                          'id_username'    => 'user_name',
                          'id_password'    => 'user_pass',
                          'id_remember'    => 'rememberme',
                          'id_submit'      => 'wp-submit',
                          'label_username' => __( 'Username' ),
                          'label_password' => __( 'Password' ),
                          'label_remember' => __( 'Remember Me' ),
                          'label_log_in'   => __( 'Log In' ),
                          'value_username' => '',
                          'value_remember' => false
                    ))
//                $fb = new Facebook\Facebook([
//                    'app_id' => '1810777952490968', // Replace {app-id} with your app id
//                    'app_secret' => 'e619150b16934110bb2ad9b39bb1898d',
//                    'default_graph_version' => 'v2.5',
//                ]);
//                
//                var_dump($fb->getRedirectLoginHelper());
//                var_dump($fb);
//                $helper = $fb->getRedirectLoginHelper();

//                $permissions = ['email']; // Optional permissions
//                $loginUrl = $helper->getLoginUrl('https://nytfb-callback.php', $permissions);
//
//                echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
                ?>
<!--                <form name="registerform" id="registerform" action="<?php echo wp_registration_url() ?>" method="post" novalidate="novalidate" hidden="true">
                    <p>
                        <label for="user_login">Username<br>
                            <input type="text" name="user_login" id="user_login" class="input" value="" size="20"></label>
                    </p>
                    <p>
                        <label for="user_email">Email<br>
                            <input type="email" name="user_email" id="user_email" class="input" value="" size="25"></label>
                    </p>
                    <p id="reg_passmail">Registration confirmation will be emailed to you.</p>
                    <br class="clear">
                    <input type="hidden" name="redirect_to" value="http://nyt.woocommerce.dev/">
                    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Register"></p>
                </form>-->
                <!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->
                <div class="social-login">
                    <ul class="social-links clearfix">
                        <li><a href="javascript:void(0)" id="login-fb" class="social-icon icon-facebook" action="<?php echo wp_registration_url() ?>"></a></li>
                        <li><a href="javascript:void(0)" class="social-icon icon-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="social-icon icon-email"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<?php wp_footer() ?>
</body>

</html>