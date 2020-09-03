


<div class="section_title" id="section_title_after">
    <h1>More Projects</h1>
</div>


<div class="carousel" id="frontpage_carousel">

    <?php $featured_posts = get_field('other_featured_work_post');
    if( $featured_posts ): ?>

    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides" id="frontpage_slide">
            <?php foreach( $featured_posts as $post ): 

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            
                <li class="glide__slide" >
                        <a href="<?php echo the_permalink() ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>


</div>