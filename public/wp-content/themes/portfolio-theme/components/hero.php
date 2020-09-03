<section class="hero">
    <div class="hero_container">

        <?php //if (the_field('hero_heading')):?> <!-- check whether it exists or not -->
            <h1><?php the_field('hero_heading'); ?></h1>
        <?php //endif; ?>

        <hr>

        <?php //if (the_field('hero_sub_heading')):?> <!-- check whether it exists or not -->
            <h2><?php the_field('hero_sub_heading'); ?></h2>
        <?php //endif; ?>

        
        <?php 
            $cta=get_field('hero_cta'); 
            if ($cta): ?>

            <a class="cta_btn" target="<?php echo $cta['target']; ?>" href="<?php echo $cta['url'] ?>">
                <p><?php echo $cta['title'] ?></p>
            </a>
        <?php endif; ?>
    </div>
</section>