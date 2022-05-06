<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo the_title();?></title>
        <meta name="description" content="<?php echo get_bloginfo();?>">
    <?php wp_head();?>
</head>
<body>
<header>
    <nav aria-label="Mobile navigation" class="nav__wrapper">
        <div>
            <button type="button" class="nav__toggle" aria-controls="nav" aria-expanded="false">
		    </button>
            <a href="#" class="nav__icon--search nav__icon" aria-label="Search"></a>
        </div>
        <a class="nav__logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri();?>/app/images/logo.svg" alt="Wood Wood" width="212" height="22">
        </a>
         <?php wp_nav_menu(array( 'menu' => 'mobile_nav', 'container'=> false, 'menu_class' => 'nav__list hide-for-desktop', 'menu_id' => false));?>
        <div>
            <a href="#" class="nav__icon--profile nav__icon" title="Profile"  aria-label="Profile"></a>
            <a href="#" class="nav__icon--cart nav__icon" title="Cart" aria-label="Cart"></a>
        </div>
    </nav>
    <!-- <nav aria-label="Navigation">
        <?php wp_nav_menu(array( 'menu' => 'nav', 'container'=> false, 'menu_class' => 'nav__desktop hide-for-mobile', 'menu_id' => false));?>
    </nav> -->
</head>