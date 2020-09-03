<main class="archive-content">

    

    <div class="archive_desc"><?php echo term_description(); ?></div>


    <div class="archive_container">

        <div class="archive_info">
            <p><b>2</b> search results for</p>
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