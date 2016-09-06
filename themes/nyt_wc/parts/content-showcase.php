<div class="row">
<?php
	$args = array(
		'post_type' => 'page',
		'id' => 151,
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div class="col-md-7 col-sm-7 col-xs-12">

		<header class="content-title">
            <h2 class="title"><?php the_title(); ?></h2>
        </header>
		<p><?php the_content(); ?></p>
        
	</div>

	<div class="col-md-5 col-sm-5 col-xs-12">
        <div class="sm-margin visible-xs"></div>
		<img src="<?php the_post_thumbnail_url(); ?>" alt="Showcase Venedor" class="img-responsive">
	</div>
	<?php endif; ?>
</div>
