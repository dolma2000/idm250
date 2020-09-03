<?php get_header(); ?>

<div class="error_page_container">

    <div class="error_page">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/404.png" alt="">
        <div class="error_msg">
            <p>Sorry, this page does not exist!</p>
            <a href="<?php echo home_url(); ?>">Go Back Home</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>
