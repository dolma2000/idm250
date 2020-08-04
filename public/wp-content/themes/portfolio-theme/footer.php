
<footer class="footer-container">
    <div class='footer'>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/footer-desktop.svg" alt="Footer Image"> -->

        
        <picture>
            <source media="(min-width :62.5em)" srcset="<?php echo get_template_directory_uri(); ?>/assets/footer-desktop.svg"/>  
            <source media="(min-width :37.5em)" srcset="<?php echo get_template_directory_uri(); ?>/assets/footer-desktop.svg"/>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/footer-mobile.svg" alt="Fine Arts"/>  
        </picture>



        <!-- <div class="footer-menu">
            <?php wp_nav_menu(['theme_location' => 'footer_menu'])?>
        </div> -->

        <div class="footer-content">
            <div class="social-menu">
                <?php wp_nav_menu(['theme_location' => 'social_menu']) ?>   
            </div>
            <p>&copy; Dolma Yangchen Sherpa 2020</p>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>
</body>
</html>