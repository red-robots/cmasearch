<?php
/*
 * Template Name: Custom Search 
 */

get_header();
?>

<main id="site-content" role="main">

    <?php

    $args = array();

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {

        while ( $query->have_posts() ) {
            $query->the_post();

           
        }
        wp_reset_query();
    }

    ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>