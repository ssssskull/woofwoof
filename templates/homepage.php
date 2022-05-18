<?php
/**
 * Template Name: Home
*/
get_header();?>
<div class="site-content">
    <main class="main">
        <div class="hero">
            <div class="hero__wrapper">
                <h2 class="hero__title">Are you ready<br>for Wood Woods club?</h2>
                <p class="hero__paragraph">Enjoy benefits, sales, pre-access to new collections and events hosted for our loyal customers</p>
            </div>
        </div>
        <div class="benefits">
            <div class="benefits__wrapper">
                <div class="benefits__content">
                    <h2>Enjoy the best Wood Wood has to offer – and more</h2>
                    <ul class="benefits__list">
                        <li class="benefits__elem">
                            <p>Get free shipping and returns</p>
                        </li>
                        <li class="benefits__elem">
                            <p>Gain pre-access to new releases</p>
                        </li>
                        <li class="benefits__elem">
                            <p>Receive personalised offers</p>
                        </li>
                        <li class="benefits__elem">
                            <p>Get digital receipts</p>
                        </li>
                        <li class="benefits__elem">
                            <p>Get invited to exclusive events</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="events">
            <div class="events__wrapper">
                <h2>Exclusive events</h2>
                <div class="events__list">
                    <a class="events__element" href="#!" data-img="1">
                        <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-1-400w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-1-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-1-400w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-1-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-1-600w.jpg" alt="Hjemmelavede boller og kaffe" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="2">
                        <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-2-400w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-2-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-2-400w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-2-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-2-600w.jpg" alt="Hjemmelavede boller og kaffe" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>WOOD WOOD Life Store™ opening</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="3">
                         <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-3-400w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-3-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-3-400w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-3-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-3-600w.jpg" alt="Hjemmelavede boller og kaffe" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>06.06.22</span>
                        <h3>Biking through Copenhagen</h3>
                    </a>
                </div>
            </div>
        </div>
        <div class="signup">
            <div class="signup__wrapper">
                <h3>Sign up now.</h3>
                <form class="signup__form">
                    <div class="footer__newsletter-fields">
                        <div class="footer__newsletter-field">
                            <label for="name" class="footer__newsletter-label">First name</label>
                            <input type="text" id="name" name="name" class="footer__newsletter-input" value="">
                        </div>
                    </div>
                    <div class="footer__newsletter-fields">
                        <div class="footer__newsletter-field">
                            <label for="loyalty-mail" class="footer__newsletter-label">Email address</label>
                            <input type="email" id="loyalty-mail" name="email" class="footer__newsletter-input" value="">
                        </div>
                    </div>
                    <div class="footer__newsletter-fields">
                        <div class="footer__newsletter-field">
                            <label for="password" class="footer__newsletter-label">Password</label>
                            <input type="password" id="password" name="password" class="footer__newsletter-input" value="">
                        </div>
                    </div>
                    <button>Sign up</button>
                </form>
        </div>
    </div>
</main>
</div>
<?php get_footer(); ?>