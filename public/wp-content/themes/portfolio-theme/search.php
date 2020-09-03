<?php 
get_header(); 
get_template_part('components/subheader');
?>

<main>

    <main class="archive-content">

    

        <div class="archive_desc"><?php echo term_description(); ?></div>


        <div class="archive_container">

            

            <div class="archive_post">
            
                <?php if (have_posts()) : ?> <!-- if this page, the archive.php, have post -->


                <?php 
                    global $wp_query;
                    $posts_per_page = $wp_query->query_vars['posts_per_page'];
                    $posts_found    = $wp_query->found_posts;
                ?>

                <div class="archive_info">
                    <p><b><?php echo $posts_found  ?></b> search results for</p>
                    <h1 class="archive_title">"<?php the_search_query();?>"</h1>
                </div>

                <!-- you want it to show a list of content -->
                    <?php while (have_posts()) : the_post();?> 

                    
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


    
</main>

<?php get_footer(); ?>