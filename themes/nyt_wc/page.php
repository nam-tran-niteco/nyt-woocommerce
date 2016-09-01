<?php get_header(); ?>

<!--<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h1>This is a page</h1>
        <?php
        // Start the loop.
        while (have_posts()) : the_post();

            // Include the page content template.
            get_template_part('template-parts/content', 'page');

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }

        // End of the loop.
        endwhile;
        ?>

    </main> .site-main 
</div> .content-area -->

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Shopping Cart</h1>
                    <p class="title-desc">Just this week, you can use the free premium delivery.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <div class="row">
                    <?php the_content();?>
                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section>

<?php get_footer(); ?>