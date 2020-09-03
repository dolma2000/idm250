<?php 
//FINEARTS ARCHIVE PAGE 
?>

<?php 
    get_header(); 
?>

<?php get_template_part('components/subheader'); ?>

<div class="fineart_cat" id="fineart_mobile">

    <!-- CAROUSEL IMAGE -->
    <div class="carousel">

    <?php

    $queried_object = get_queried_object(); 
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id; 
    

    $featured_posts = get_field('carousel_image', $taxonomy . '_' . $term_id);

    if( $featured_posts ): ?>

        <div class="glide">
            <div class="glide__track" data-glide-el="track">
            
            <ul class="glide__slides">
            <?php foreach( $featured_posts as $post ): 
            
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?> 

                <li class="glide__slide">
                    <a href="<?php echo the_permalink() ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </li>
            
            <?php endforeach; ?>  
            </ul>

            </div>
        </div>


    </div>

    <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- DESCRIPTION -->
    <div class="fineart_desc" id="metamorphosis">
        <h1>Metamorphosis</h1>
        <p>For my AS Level Coursework, my theme is "Metamorphosis" where I explored the transition from teenagehood to adulthood. This theme is important to me as I was a teenage during this time thinking about college admissions and making big and important decisions for my future. Facing the reality and hardship of becoming an adulthood, carrying bigger responsibilities and supposedly becoming less free is difficult, but this is a transition all human being must undergo to truly start the path of independance and living life the way one wants. This coursework explores different symbolisms of this transition, the biggest being the butterfly that undergoes metamorphosis from a caterpillar to a beautiful grown butterfly.</p>
    </div>

</div>


<div class="fineart_cat fineartopposite">

    <!-- CAROUSEL IMAGE -->
    <div class="carousel">

    <?php

    $queried_object = get_queried_object(); 
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id; 
    

    $featured_post = get_field('carousel_image_2', $taxonomy . '_' . $term_id);

    if( $featured_post ): ?>

        <div class="glide newglide">
            <div class="glide__track" data-glide-el="track">
            
            <ul class="glide__slides">
            <?php foreach( $featured_post as $post ): 
            
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?> 

                <li class="glide__slide">
                    <a href="<?php echo the_permalink() ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </li>
            
            <?php endforeach; ?>  
            </ul>

            </div>
        </div>


    </div>

    <?php 
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>

    <!-- DESCRIPTION -->
    <div class="fineart_desc" id="reminiscence">
        <h1>Reminiscence</h1>
        <p>For my A2 Level coursework, the theme "Reminiscence" is essentially a sequel to the previous theme "Metamorphosis" where one in adulthood reminesence the days of their childhood, evoking a strong sense of nostalgia. My main subject matter is "Alice" from Alice in Wonderland because she is a character I loved as a child, but as I research the concept of "Wonderland" and the role Alice play in this world, I began to learn that the whole story is about Alice searching and understanding herself as she is an imaginative child filled with curiosity and creativity, a skill a child tends to be better at compared to adults. For me, looking back at my childhood is a way to remind that even I am adult now and have sacrificed a lot of my desires to fit myself into the current society, I can still dream and imagine and hope.</p>
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
const config = { 
  type: 'carousel',
  startAt: 3,
  perView: 2,
  focusAt: 1,
  breakpoints: {
    600: { perView: 2 },
    1000: { perView: 2.5 }
    }
}
    new Glide('.glide', config).mount()

    new Glide('.newglide', config).mount()

</script>


<?php get_footer();?>