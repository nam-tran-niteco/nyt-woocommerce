    <footer id="footer">
        <div id="inner-footer">
            <div class="container">
                <div class="row">

                    <?php if (dynamic_sidebar('footer')) ; ?>

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
                            <li><a href="#" class="social-icon icon-facebook"></a></li>
                            <li><a href="#" class="social-icon icon-twitter"></a></li>
                            <li><a href="#" class="social-icon icon-email"></a></li>
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

                ?>
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