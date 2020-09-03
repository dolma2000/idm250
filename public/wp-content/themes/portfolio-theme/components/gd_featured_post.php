<div class="section_title" id="section_title_after">
    <h1>Graphic Design Work</h1>


        <?php 
    $terms = get_field('graphic_design_link');
        if( $terms ): ?>
            <ul>
            <?php foreach( $terms as $term ): ?>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">SEE ALL</a>
            <?php endforeach; ?>
            </ul>
    <?php endif; ?>
</div>


<div class="gd_featured_container">

<?php
$featured_posts = get_field('graphic_design_project');
if( $featured_posts ): ?>

    <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        
        <a class="gd_featured_grid" href="<?php the_permalink() ?>">
            
                <div class="gd_featured_img">
                    <?php the_post_thumbnail(); ?>                         
                </div>
                <div class="gd_featured_title">
                    <h1><?php the_title(); ?></h1>
                </div>

        </a>
    <?php endforeach; ?>
    
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>


</div>