<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/styles.css"> <!-- php replaces wp-content/themes/portfolio-theme/ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/hamburger-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/font.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >

<header class="header">

<div class="navigation-menu">
    <div class="hamburger-bg"></div> <!-- orange circle corner -->
    <div class="hamburger-button">
            <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
            </button>
    </div>
    
     <div class="navigation-menu-list">
        <?php wp_nav_menu (['theme_location' => 'mobile_menu',])?>
     </div>   
        


    </div>
</div>
    


    <?php //wp_nav_menu (['theme_location' => 'mobile_menu',])?>
    <!-- a div of class="menu-primary-menu-container" -->
    <?php wp_nav_menu (['theme_location' => 'primary_menu',])?>

</header>


<!--    
HEADER
- Home
- Portfolio
- Resume
(underlined microinteraction)

 -->