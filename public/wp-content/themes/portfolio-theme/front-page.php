<div class="big_wheel_wrapper">
        <div class="big_wheel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/wheel_big.png" alt="">
        </div>
</div>

<?php
get_header();
?>


<!-- blue border -->
<div class="blue-border-container">
    <div class="blue-border"></div>
</div>

<?php get_template_part('components/hero'); ?>

<!-- HERO WHEEL  -->
    <?php 
        $image=get_field('hero_image');
        if (!empty($image)):?>

        <div class="wheel_wrapper">
            <div class="wheel">
                <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        </div>

    <?php endif;  ?>

<!-- featured post -->  


<?php get_template_part('components/featured_post'); ?>


<!-- more (recent) post --> 
<?php get_template_part('components/featured_work'); ?>



<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
const config = { 
  type: 'carousel',
  startAt: 3,
  perView: 3.5,
  focusAt: 2,
  breakpoints: {
    600: { perView: 2 },
    1000: { perView: 2.5 }
    }
}
    new Glide('.glide', config).mount()

</script>

<?php get_footer(); ?>