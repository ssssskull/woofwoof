<?php
/**
 * Template Name: Profile
*/
get_header();?>
<div class="site-content site-content--split">
    <nav aria-label="Sidebar" class="sidebar">
        <?php wp_nav_menu(array( 'menu' => 'profile', 'container'=> false, 'menu_class' => 'document-list', 'menu_id' => false));?>
    </nav>
    <main class="main main--split">
        <article class="document">
            <h1 class="document__title">Hey Mathilde!</h1>
            <div class="document__content">
                <h2 class="document__subheading">My benefits</h2>
                <p>benefit</p>
            </div>
        </article>
</main>
</div>
<?php get_footer(); ?>