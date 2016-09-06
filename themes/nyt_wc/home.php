<?php 
	get_header();
?>

<section id="content">

	<?php get_template_part( 'parts/content-home-slider' ); ?>

	<div class="md-margin2x"></div>

	<div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="row">
	    			<div class="col-md-9 col-sm-8 col-xs-12 main-content">

		    			<?php get_template_part( 'parts/content-our-products' ); ?>

		    			<div class="sm-margin"></div>

		    			<?php get_template_part( 'parts/content-showcase' ); ?>
		    			
						<div class="xlg-margin"></div>

						<?php get_template_part( 'parts/content-home-on-sale' ); ?>

						<div class="lg-margin"></div>

					</div>

					<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
						<div class="widget subscribe">
							<h3>BE THE FIRST TO KNOW</h3>
							<p> Get all the latest information on Events, Sales and Offers. Sign up for the Venedor store newsletter today.</p>
							<form action="#" id="subscribe-form">
								<div class="form-group">
									<input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
								</div>
								<input type="submit" value="SUBMIT" class="btn btn-custom">
							</form>
						</div>
						<div class="widget testimonials">
							<h3>Testimonials</h3>
							
							<div class="testimonials-slider flexslider sidebarslider">
								<ul class="testimonials-list clearfix">
									<li>
										<div class="testimonial-details">
										<header>Best Service!</header>
										Maecenas semper aliquam massa. Praesent pharetra sem vitae nisi eleifend molestie. Aliquam molestie scelerisque ultricies. Suspendisse potenti. 
										</div><!-- End .testimonial-details -->
										<figure class="clearfix">
										<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/anna.jpg" alt="Computer Ceo">
											<figcaption>
												<a href="#">Anna Retallic</a>
												<span>12.05.2013</span>
											</figcaption>
										</figure>
									</li>
									<li>
										<div class="testimonial-details">
										<header>Cool Style!</header>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt iure quisquam necessitatibus fugit! Nisi tempora reiciendis omnis error sapiente ipsam maiores dolorem maxime.
										</div><!-- End .testimonial-details -->
										<figure class="clearfix">
											<img src="<?php echo get_template_directory_uri(); ?>/images/testimonials/jake.jpg" alt="Computer Ceo">
											<figcaption>
												<a href="#">Jake Suasoo</a>
												<span>17.05.2013</span>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div><!-- End .testimonials-slider -->
						</div><!-- End .widget -->
					
					
						<div class="widget latest-posts">
							<h3>Latest News</h3>
							
							<div class="latest-posts-slider flexslider sidebarslider">
								<ul class="latest-posts-list clearfix">
									<li>
										<a href="single.html">
	                                        <figure class="latest-posts-media-container">
	                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/post1-small.jpg" alt="lats post">
	                                        </figure>
	                                    </a>
										<h4><a href="single.html">35% Discount on second purchase!</a></h4>
										<p>Sed blandit nulla nec nunc ullamcorper tristique. Mauris adipiscing cursus ante ultricies dictum sed lobortis.</p>
										<div class="latest-posts-meta-container clearfix">
											<div class="pull-left">
												<a href="#">Read More...</a>
											</div><!-- End .pull-left -->
											<div class="pull-right">
												12.05.2013
											</div><!-- End .pull-right -->
										</div><!-- End .latest-posts-meta-container -->
									</li>
									
									<li>
										<a href="single.html">
	                                        <figure class="latest-posts-media-container">
	                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/post2-small.jpg" alt="lats post">
	                                        </figure>
	                                    </a>
										<h4><a href="single.html">Free shipping for regular customers.</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
										<div class="latest-posts-meta-container clearfix">
											<div class="pull-left">
												<a href="#">Read More...</a>
											</div><!-- End .pull-left -->
											<div class="pull-right">
												10.05.2013
											</div><!-- End .pull-right -->
										</div><!-- End .latest-posts-meta-container -->
									</li>
									
									<li>
										<a href="single.html">
	                                        <figure class="latest-posts-media-container">
	                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/post3-small.jpg" alt="lats post">
	                                        </figure>
	                                    </a>
										<h4><a href="#">New jeans on sales!</a></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque fuga officia in molestiae easint..</p>
										<div class="latest-posts-meta-container clearfix">
											<div class="pull-left">
												<a href="#">Read More...</a>
											</div><!-- End .pull-left -->
											<div class="pull-right">
												8.05.2013
											</div><!-- End .pull-right -->
										</div><!-- End .latest-posts-meta-container -->
									</li>
									
								</ul>
							</div><!-- End .latest-posts-slider -->
						</div><!-- End .widget -->
					
						<div class="widget banner-slider-container">
							<div class="banner-slider flexslider">
								<ul class="banner-slider-list clearfix">
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" alt="Banner 1"></a></li>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner2.jpg" alt="Banner 2"></a></li>
									<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner3.jpg" alt="Banner 3"></a></li>
								</ul>
							</div>
						</div><!-- End .widget -->
					</div>
        						
	    		</div>
	    	</div>
	    </div>
	</div>

</section>

<?php
	get_footer();
?>