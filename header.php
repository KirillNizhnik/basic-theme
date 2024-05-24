<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body class="body" >
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="header" class="header">
        <div class="container">
            <div class="header__inner">

                <a href="<?= get_home_url() ?>" class="header-title">Liuba Numerologia</a>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'container' => 'ul',
                    'menu_class' => 'header-nav-menu',
                    'menu_id' => '',
                ));
                ?>
                <button class="burger-menu">
                    <svg class="burger-menu-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                        <path d="M 3 9 A 1.0001 1.0001 0 1 0 3 11 L 47 11 A 1.0001 1.0001 0 1 0 47 9 L 3 9 z M 3 24 A 1.0001 1.0001 0 1 0 3 26 L 47 26 A 1.0001 1.0001 0 1 0 47 24 L 3 24 z M 3 39 A 1.0001 1.0001 0 1 0 3 41 L 47 41 A 1.0001 1.0001 0 1 0 47 39 L 3 39 z"></path>
                    </svg>
                </button>
            </div>

        </div>
    </header>


   <div class="header-mobile-menu">
       <div class="container">
           <svg class="header-close-svg" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
               <path fill="#fff" d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"></path>
           </svg>
           <?php wp_nav_menu(array(
               'theme_location' => 'menu-1',
               'container' => 'ul',
               'menu_class' => 'header-mobile-nav-menu',
               'menu_id' => '',
           )); ?>
       </div>
   </div>

