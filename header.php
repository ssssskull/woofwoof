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
<header class="nav">
    <nav aria-label="Mobile navigation" class="nav__wrapper">
        <div>
            <button type="button" class="nav__toggle" aria-controls="nav" aria-expanded="false">
		    </button>
            <a href="#" class="nav__icon--search nav__icon hide-for-desktop" aria-label="Search"></a>
        </div>
        <a class="nav__logo" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri();?>/app/images/logo.svg" alt="Wood Wood" width="212" height="22">
        </a>
         <?php wp_nav_menu(array( 'menu' => 'mobile_nav', 'container'=> false, 'menu_class' => 'nav__list hide-for-mobile', 'menu_id' => false));?>
        <div>
            <button href="#" class="nav__icon--lang nav__icon nav__icon--button hide-for-mobile" title="Lang" aria-label="Lang">
                <span>EN</span>
            </button>
            <a href="profile" class="nav__icon--profile nav__icon" title="Profile"  aria-label="Profile"></a>
            <button href="#" class="nav__icon--heart nav__icon nav__icon--button hide-for-mobile" title="Heart" aria-label="Heart"></button>
            <button href="#" class="nav__icon--search nav__icon nav__icon--button hide-for-mobile" title="Search" aria-label="Search"></button>
            <button href="#" class="nav__icon--cart nav__icon nav__icon--button" title="Cart" aria-label="Cart">
                <span>1</span>
            </button>
        </div>
    </nav>
    <!-- <nav aria-label="Navigation">
        <?php wp_nav_menu(array( 'menu' => 'nav', 'container'=> false, 'menu_class' => 'nav__desktop hide-for-mobile', 'menu_id' => false));?>
    </nav> -->
</header>