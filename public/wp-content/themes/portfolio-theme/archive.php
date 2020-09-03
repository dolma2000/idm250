<!-- 
The template for displaying archive page.
Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/ 
-->

<?php 

    get_header(); 
    get_template_part('components/subheader');
    global $wp_query;

    // Checking to see if Tag vs Default Category 
    if(is_tag()) {

        // Do special query for custom post type with this tag
        $current_tag = $wp_query->query_vars['tag'];
            
            // var_dump($wp_query);

            $args = [
                'post_type'      => 'projects',
                'post_status'    => 'publish',
                'posts_per_page' => -1,
                'tag' => $current_tag
            ];
            $wp_query = new WP_Query($args);

            $posts_per_page = $wp_query->query_vars['posts_per_page'];
            $posts_found = $wp_query->found_posts;
    } else{
        $posts_per_page = $wp_query->query_vars['posts_per_page'];
        $posts_found    = $wp_query->found_posts;
    }
    

?>

<main class="archive-content">

    
    <div class="archive_desc"><?php echo term_description(); ?></div>


    <div class="archive_container">


        <div class="archive_info">
            <p><b><?php echo $posts_found ?></b> posts related to</p>
            <h1 class="archive_title">"<?php echo single_term_title(); ?>"</h1>
        </div>

        <div class="archive_post">
        
            <?php if (have_posts()) : ?> <!-- if this page, the archive.php, have post -->
            <!-- you want it to show a list of content -->
                <?php while (have_posts()) : the_post(); ?> 

                    <article>

                        <a href="<?php the_permalink();?>">
                            
                            <div class="archive_thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            
                            <div class="archive_maininfo">
                                <h2><?php the_title(); ?></h2>
                                
                                <div class="archive_post_tag">
                                    <?php the_tags(' ', ' ', ' ');  ?>  
                                </div>
                                
                                <div class="archive_excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                            </div>
                        </a>  

                    </article>
                     
                <?php endwhile; ?> 

            <?php else: ?>
                <p>Sorry, no post found</p>
            <?php endif; ?>
        
        </div>


    </div>

</main>

<?php
    get_footer();
?>
