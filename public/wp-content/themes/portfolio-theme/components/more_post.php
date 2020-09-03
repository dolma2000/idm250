<div class="more_post">

    <div class="section_title">
        <h1>More Posts</h1>
    </div>

    <?php
        //The Query
        //Link : https://developer.wordpress.org/reference/classes/wp_query/#author-parameters

        $args = [
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        ];
        $the_query = new WP_Query($args);
    ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> <!-- THE LOOP: Check to see if it has any content -->
            <h1><?php the_title(); ?></h1>
        <?php endwhile; ?>
    <?php else : ?>

    <?php endif; ?>

</div>