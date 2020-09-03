<?php
/**
 * To show what all the elements will look like if they use it
 * GLobal componenets/styles/ to create pages.
 */

?>

<?php 
    get_header(); 
?>



<!-- MAIN CONTENT -->
<main class="main-content">
    <?php while (have_posts()) : the_post(); ?> <!-- THE LOOP: Check to see if it has any content -->
        <div class="container">

            <!-- Main Content -->

            <div class="title-section">

                <div class="title-category">
                    <h1 class="post-title"><?php the_title(); ?></h1> <!-- Page Title -->  
                    
                    <?php the_category();?>
                </div>

                <div class="singlepost_tag">
                    <?php the_tags(' ', ' ', ' '); ?>
                </div>
            </div>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
                <figcaption>
                    <p>
                        <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
                    </p>
                </figcaption>
            </div>

            <div class="page-builder">
                <?php the_content(); ?> <!-- Main Article Content-->
            </div>

           

            <?php //get_sidebar(); ?>

        </div>
    <?php endwhile; ?> <!-- End of LOOP -->
</main>

<?php get_footer();?>
<?php the_excerpt(); ?> - Use this for the result page that has an excerpt summary for each.
