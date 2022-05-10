<?php
get_header();?>
<section class="rescue">
    <div class="rescue__container">
            <div class="rescue__inner">
                <h1 class="rescue__title">Page not found</h1>
                <div class="rescue__content">
                    <p>The page you tried to access does not exist.</p>
                    <a class="rescue__btn" href="<?php echo home_url()?>" title="Go to startpage">Go to startpage</a>
                </div>
            </div>
    </div>
</section>
<?php get_footer(); ?>