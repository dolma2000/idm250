<?php get_header(); ?>

<main class="main-content">
    <?php while (have_posts()) : the_post(); ?>
        <div class="container">

            <!-- Main Content -->

            <div class="title-cat">
                <h1 class="post-title"><?php the_title(); ?></h1>     
                <p class="category"><?php the_category();?></p>
            </div>

            <div class="page-builder">
                <?php the_content(); ?>
            </div>

            <?php the_tags(); ?>

            <?php get_sidebar(); ?>

        </div>
    <?php endwhile; ?>
</main>

<?php get_footer();?>
<?php the_excerpt(); ?> - Use this for the result page that has an excerpt summary for each.



