<?php 
// UI / UX ARCHIVE PAGE 
?>

<?php 
    get_header(); 
?>

<?php get_template_part('components/subheader'); ?>


        <?php
        // The Query
        // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters

        $args = [
            'post_type'      => 'projects',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'cat' => 15
        ];
        $the_query = new WP_Query($args);
        ?>

<div class="uiux_container">
 
<?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> 
    
        <div class="uiux_content"> 

        
        <div class="uiux_img">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="uiux_desc_container">
            <div class="uiux_desc">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <div class="singlepost_tag">
                            <?php the_tags(' ', ' ', ' '); ?>
                </div>
                
                <a class="casestudy_link" target="blank" href="<?php echo get_field('external_link')['url']?>"> 
                    <div class="casestudy_button">
                       <p>Casestudy</p> 
                    </div> 
                </a>
                
            </div>
        </div>
        
      </div> 

      <?php endwhile; ?>
      <?php else : ?>
      <h2>Sorry, no results</h2>
      <?php endif; ?>
</div> 





    


<?php get_footer();?>