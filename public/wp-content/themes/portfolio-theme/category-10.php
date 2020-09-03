<?php 
//GRAPHIC DESIGN ARCHIVE PAGE 
?>

<?php 
    get_header(); 
?>

<?php get_template_part('components/subheader'); ?>



<div class="gd-grid">

    <?php

    $queried_object = get_queried_object(); 
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id; 
    
    $featured_posts = get_field('column_1', $taxonomy . '_' . $term_id);

    if( $featured_posts ): ?>

    <div class="one">

    <?php foreach( $featured_posts as $post ): 
    // Setup this post for WP functions (variable must be named $post).
    setup_postdata($post); ?>

        <div class="gd_img">
            <?php the_post_thumbnail(); ?>
        </div>
    
    <?php endforeach; ?> 
    </div>
    <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>




    <?php 
    $featured_posts = get_field('column_2', $taxonomy . '_' . $term_id);

    if( $featured_posts ): ?>


    <div class="two">

        <?php foreach( $featured_posts as $post ): 
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>

        <div class="gd_img">
            <?php the_post_thumbnail(); ?>
        </div>

    <?php endforeach; ?> 
    </div>
    <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>    

    

    <?php
    $featured_posts = get_field('column_3', $taxonomy . '_' . $term_id);

    if( $featured_posts ): ?>

    <div class="three">

    <?php foreach( $featured_posts as $post ): 
    // Setup this post for WP functions (variable must be named $post).
    setup_postdata($post); ?>

        <div class="gd_img">
            <?php the_post_thumbnail(); ?>
        </div>

    <?php endforeach; ?> 
    </div>
    <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?> 


    </div>


<?php get_footer();?>