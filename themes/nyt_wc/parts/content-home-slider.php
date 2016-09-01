<section id="content">
    <div id="slider-sequence" class="homeslider">
		<div class="sequence-prev"></div>
		<div class="sequence-next"></div>
		<ul class="sequence-canvas">
			<?php
				$count = 0;
	    		$args = array(
	    			'post_type' => 'home_slider',
	    			'orderby' => 'id',
	    			'order' => 'asc'
	    		);
	            $the_query = new WP_Query( $args );
	            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $count++;
	        ?>

            <li class="sequence-slide<?php echo $count; ?>">
            	<div class="sequencebg">
            		<img src="<?php the_post_thumbnail_url(); ?>" alt="Slide <?php echo $count; ?> image" class="sequencebg-image" alt="">
            	</div>
            	<div class="sequence-container container">
	        		<?php
	        			$sequence_models = json_decode(get_field('sequence_model'), true);
	        			foreach ($sequence_models as $model) {
	        				echo '<img src="' . get_template_directory_uri() . '/images/homeslider/' . $model['src'] . '" class="' . $model['class'] . '" alt="' . $model['alt'] . '">';
	        			}
	        		?>
					<div class="sequence-title"><?php the_title(); ?></div>
					<div class="sequence-subtitle"><?php the_content(); ?></div>
					<a href="<?php the_field('learn_more_link'); ?>" class="btn btn-custom-2 btn-sequence">Learn More</a>
				</div>
			</li>

			<?php endwhile; wp_reset_postdata(); endif; ?>
		</ul>

		<ul class="sequence-pagination">
		<?php while ( $count > 0 ) : $count--; ?>
			<li></li>
		<?php endwhile; ?>
		</ul>
	</div>

	<div class="md-margin2x"></div>
</section>