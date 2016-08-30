<?php 
	get_header();
?>
<section id="content">
    <div id="slider-sequence" class="homeslider">
		<div class="sequence-prev"></div><!-- End sequence-prev-->
		<div class="sequence-next"></div><!-- End sequence-next-->
		<ul class="sequence-canvas">
			<li class="sequence-slide1">
				<div class="sequencebg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide1.png" alt="Slide 1 image" class="sequencebg-image">
				</div><!-- End .sequencebg -->
				<div class="sequence-container container">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide1_1.png" alt="Model 1" class="sequence-model">
					<div class="sequence-title">Special offer -25%</div>
					<div class="sequence-subtitle">Performance &amp; Design. Taken right to the edge.</div>
					<a href="#" class="btn btn-custom-2 btn-sequence">Learn More</a>
				</div><!-- End .sequence-container -->
			</li>

			<li class="sequence-slide2">
				<div class="sequencebg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide2.jpg" alt="Slide 2 image" class="sequencebg-image">
				</div><!-- End .sequencebg -->
				<div class="sequence-container container">
					<div class="sequence-price">$1150</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide2_2.png" alt="Model 2" class="sequence-model">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide2_1.png" alt="Model 1" class="sequence-model2">
					<div class="sequence-title">The next big thing...</div>
					<div class="sequence-subtitle">Take, view and share photos with the 13MP camera and stunning 5" display.</div>
					<a href="#" class="btn btn-custom-2 btn-sequence">Learn More</a>
				</div><!-- End .sequence-container -->
			</li>

			<li class="sequence-slide3">
				<div class="sequencebg">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide3.jpg" alt="Slide 3 image" class="sequencebg-image">
				</div><!-- End .sequencebg -->
				<div class="sequence-container container">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide3_1.png" alt="Model 3" class="sequence-model">
					<div class="sequence-title">Control. Navigate. Be Recognized.</div>
					<div class="sequence-subtitle">Smart Interaction lets you interact with your TV as never before.</div>
					<a href="#" class="btn btn-custom-2 btn-sequence">Learn More</a>
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide3_4.png" alt="Mobile phone" class="sequence-phone">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide3_2.png" alt="Tablet" class="sequence-tablet">
					<img src="<?php echo get_template_directory_uri(); ?>/images/homeslider/slide3_3.png" alt="Screen" class="sequence-screen">
				</div><!-- End .sequence-container -->
			</li>
		</ul>

		<ul class="sequence-pagination">
			<li>Frame 1</li>
			<li>Frame 2</li>
			<li>Frame 3</li>
		</ul>
	</div><!-- End #slider-sequence -->

	<div class="md-margin2x"></div><!-- Space -->
</section>

<?php
	get_footer();
?>