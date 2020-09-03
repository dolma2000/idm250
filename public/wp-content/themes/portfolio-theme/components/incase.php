<?php if (have_posts()) : ?>
    
    <ul>
        <?php while (have_posts()) : the_post(); ?> 
            
                <li>
                            
                    <h1 class="post-title"><?php the_title(); ?></h1>  
                    <?php the_post_thumbnail();?>
                    <?php the_excerpt(); ?>

                </li>
        
        <?php endwhile; ?> 
    </ul>

    <?php else: ?>
        <h2>sorry there are no results</h2>
    <?php endif; ?>