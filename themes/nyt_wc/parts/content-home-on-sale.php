<div class="hot-items carousel-wrapper">
	<header class="content-title">
		<div class="title-bg">
			<h2 class="title">On Sale</h2>
		</div>
		<p class="title-desc">Only with us you can get a new model with a discount.</p>
	</header>

    <div class="carousel-controls">
        <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
        </div>
        <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
        </div>
    </div>

    <div class="hot-items-slider owl-carousel">
        <?php
        $args = array(
			'post_type' => 'product',
			'meta_query' => WC()->query->get_meta_query(),
			'post__in' => array_merge( array( 0 ), wc_get_product_ids_on_sale() )
		);
		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				wc_get_template_part( 'content', 'product' );
			}
			wp_reset_postdata();
		} ?>
	</div>
</div>