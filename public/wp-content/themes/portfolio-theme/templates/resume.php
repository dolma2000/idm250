<?php
/**
 * Template Name: Resume
 */
?>

<?php 
    get_header(); 
?>

<div class="resume">

    <div class="resume_container">

        <div class="resume_name">
            <?php echo get_field('resume_name') ?>
        </div>

        <div class="resume_content">
            <?php echo get_field('education') ?>
        </div>

        <div class="resume_content">
            <h1><?php echo get_field('experience') ?></h1>
            
            <div class="resume_experience">
                <?php echo get_field('experience_1') ?>
            </div>

            <div class="resume_experience">
                <?php echo get_field('experience_2') ?>
            </div>

            <div class="resume_experience">
                <?php echo get_field('experience_3') ?> 
            </div>
        </div>

        <div class="resume_content">
            <?php echo get_field('skills') ?> 
        </div>

        <div class="resume_content">
            <?php echo get_field('honors_awards') ?> 
        </div>

        <div class="resume_content">
            <?php echo get_field('activities') ?> 
        </div>

    </div>

</div>



<?php get_footer();?>