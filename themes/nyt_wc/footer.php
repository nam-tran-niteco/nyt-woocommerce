			<footer id="footer">
	        	<div id="inner-footer">
					<div class="container">
						<div class="row">
						
						 	<?php if( dynamic_sidebar( 'footer' ) ); ?>

							<div class="clearfix visible-sm"></div>

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
	        						<li><a href="#" class="social-icon icon-rss"></a></li>
	        						<li><a href="#" class="social-icon icon-delicious"></a></li>
	        						<li><a href="#" class="social-icon icon-linkedin"></a></li>
	        						<li><a href="#" class="social-icon icon-flickr"></a></li>
	        						<li><a href="#" class="social-icon icon-skype"></a></li>
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
        <?php wp_footer() ?>
    </body>

</html>