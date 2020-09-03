
<div class="section_title">
    <h1>UI/UX Case Studies</h1>


        <?php 
    $terms = get_field('see_all_link');
        if( $terms ): ?>
            <ul>
            <?php foreach( $terms as $term ): ?>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">SEE ALL</a>
            <?php endforeach; ?>
            </ul>
    <?php endif; ?>
</div>




<div class="featured">

<?php
$featured_posts = get_field('featured_projects');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li>
            <div class="featured_image">
                <?php the_post_thumbnail(); ?>
            </div>
            
            <div class="featured_text">
                <h1><?php the_title(); ?></h1>
                <p><?php the_excerpt(); ?></p>
                <div class="singlepost_tag">
                    <?php the_tags(' ', ' ', ' '); ?>
                </div>

                <a href="<?php echo get_field('external_link')['url']?>" class="featured_cta">
                    <div>
                        <h2>View Process</h2>
                    </div>
                </a>
            </div>
    
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>


</div>

