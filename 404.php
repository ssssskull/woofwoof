<?php
get_header();?>
<div class="site-content">
    <section class="rescue">
        <h1 class="rescue__title">Page not found</h1>
        <div class="rescue__content">
            <p>The page you tried to access does not exist.</p>
            <a class="btn--secondary" href="<?php echo home_url()?>" title="Go to startpage">Go to startpage</a>
        </div>
    </section>
</div>
<?php get_footer(); ?>