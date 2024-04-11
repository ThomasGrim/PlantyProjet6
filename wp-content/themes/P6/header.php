<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="Lorem ipsum dolor sit amet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap">
    <?php wp_head(); ?>
</head>
<body>
<header>
<div class="header-container">
    <div class="logo-container">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.png" alt="Logo planty" id="logo"/>
        </a>
    </div>
    <div class="menu-container">
        <?php 
            wp_nav_menu(array(
                'menu' => 'Menu 1',
                'theme_location' => 'primary',
                'depth' => 2,
            ));
        ?>
    </div>
</div>

</header>
<main>