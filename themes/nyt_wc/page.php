<?php get_header(); ?>

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
                    <?php
                    // Start the loop.
                    while (have_posts()) : the_post();

                        the_content();

                    // End of the loop.
                    endwhile;
                    ?>
                    <?php //the_content(); ?>
                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section>

<?php get_footer(); ?>