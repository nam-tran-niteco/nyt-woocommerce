<header class="content-title">
	<h2 class="title">Our Products</h2>
	<p class="title-desc">Save your money and time with our store. Here's the best part of our impressive assortment.</p>
</header>
<ul id="products-tabs-list" class="tab-style-1 clearfix">
	<li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>
	<li><a href="#featured" data-toggle="tab">Featured</a></li>
	<li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
</ul>

<div id="products-tabs-content" class="row tab-content">

	<div class="tab-pane active" id="latest">
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 6,
			'orderby' => 'modified',
			'order' => 'desc'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-md-4 col-sm-6 col-xs-12">

				<?php wc_get_template_part( 'content', 'product' ); ?>

			</div>

		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>

	<div class="tab-pane" id="featured">
		<?php
		$meta_query   = WC()->query->get_meta_query();
		$meta_query[] = array(
		    'key'   => '_featured',
		    'value' => 'yes'
		);

		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 6,
			'meta_query'  =>  $meta_query
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-md-4 col-sm-6 col-xs-12">

				<?php wc_get_template_part( 'content', 'product' ); ?>

			</div>

		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>

	<div class="tab-pane" id="bestsellers">
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 6,
			'meta_key' => 'total_sales',
				'orderby' => 'meta_value_num'
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-md-4 col-sm-6 col-xs-12">

				<?php wc_get_template_part( 'content', 'product' ); ?>

			</div>

		<?php endwhile; wp_reset_postdata(); endif; ?>
	</div>

</div>
