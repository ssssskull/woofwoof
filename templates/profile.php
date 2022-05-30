<?php
/**
 * Template Name: Profile
*/
get_header();?>
<div class="site-content site-content--third">
    <nav aria-label="Sidebar" class="sidebar">
        <?php wp_nav_menu(array( 'menu' => 'profile', 'container'=> false, 'menu_class' => 'document-list', 'menu_id' => false));?>
    </nav>
    <main class="main main--third">
        <article class="document profile">
            <h1 class="document__title">Hey smukke!</h1>
            <div class="document__content">
                <h2 class="document__subheading profile__title">My benefits</h2>
                <p>Wow all these benefits omg</p>
            </div>
        </article>
</main>
</div>
<?php get_footer(); ?>