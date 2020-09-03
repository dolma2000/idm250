<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?> | <?php wp_title(); ?></title>
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
