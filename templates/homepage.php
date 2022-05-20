<?php
/**
 * Template Name: Home
*/
get_header();?>
<div>
    <main class="main">
        <section class="hero">
            <div class="hero__wrapper">
                <h2 class="hero__title">Are you ready<br>for Wood Woods club?</h2>
                <p class="hero__paragraph">Enjoy benefits, sales, pre-access to new collections and events hosted for our loyal customers</p>
            </div>
        </section>
        <div class="banner">
            <p class="banner__title">How it works</p>
        </div>
        <section class="container">
            <div class="wrapper how__wrapper">
                <figure class="how__illustration">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/app/images/how-it-works-800w.avif 800w">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/how-it-works-800w.webp 800w">
                        <img src="<?php echo get_template_directory_uri();?>/app/images/how-it-works-800w.jpg" alt=" " loading="lazy" decoding="async" height="602">
                    </picture>
                </figure>
                <div class="how__content">
                    <h2 class="how__title">Become a part of the Wood Wood family</h2>
                    <ul class="how__list">
                        <li>Sign up in store or online.</li>
                        <li>Connect your card to your account. Exclusive member offers will automatically be discounted at check out in-store.<br>Remember to sign in when shopping online to make use of the offers.</li>
                        <li>Receive notifications about offers, invitations to events, and pre-access to curated collections straight in your inbox.</li>
                        <li>Enjoy the perks of being a member of the WW family!</li>
                    </ul>
                    <div class="how__actions">
                        <a href="#!" class="btn--primary">Become a member</a>
                        <a href="#!" class="btn--secondary">Or sign in here.</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="banner">
            <p class="banner__title">Benefits</p>
        </div>
        <section class="benefits container">
            <div class="wrapper">
                <div class="benefits__content">
                    <h2>Enjoy the best Wood Wood has to offer – and more</h2>
                    <ul class="benefits__list">
                        <li class="benefits__elem">Get free shipping and returns</li>
                        <li class="benefits__elem">Gain pre-access to new releases</li>
                        <li class="benefits__elem">Receive personalised offers</li>
                        <li class="benefits__elem">Get digital receipts</li>
                        <li class="benefits__elem">Get invited to exclusive events</li>
                    </ul>
                </div>
                <figure class="benefits__illustration">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/app/images/benefit-bg-1000w.avif 1000w">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/benefit-bg-1000w.webp 1000w">
                        <img src="<?php echo get_template_directory_uri();?>/app/images/benefit-bg-1000w.jpg" alt=" " loading="lazy" decoding="async" height="798">
                    </picture>
                </figure>
            </div>
        </section>
        <div class="banner">
            <p class="banner__title">Exclusive offers</p>
        </div>
        <section class="container headline">
            <div class="wrapper">
                <h2>Exclusive offers for members</h2>
            </div>
        </section>
        <section class="offer swiper mySwiper">
            <div class="offer__list swiper-wrapper">
                <div class="swiper-slide">
                    <a class="offer__el">
                        <figure class="offer__image">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                        </figure>
                        <div class="offer__info">
                            <div class="offer__details">
                                <div class="offer__content">
                                    <h4>Wood Wood</h4>
                                    <p>Bobby beach wedding T-shirt</p>
                                </div>
                                <button class="offer__heart"></button>
                            </div>
                            <div class="offer__price">
                                <del>500 DKK</del>
                                <span>200 DKK</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="offer__el">
                        <figure class="offer__image">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                        </figure>
                        <div class="offer__info">
                            <div class="offer__details">
                                <div class="offer__content">
                                    <h4>Wood Wood</h4>
                                    <p>Bobby beach wedding T-shirt</p>
                                </div>
                                <button class="offer__heart"></button>
                            </div>
                            <div class="offer__price">
                                <del>500 DKK</del>
                                <span>200 DKK</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="offer__el">
                        <figure class="offer__image">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                        </figure>
                        <div class="offer__info">
                            <div class="offer__details">
                                <div class="offer__content">
                                    <h4>Wood Wood</h4>
                                    <p>Bobby beach wedding T-shirt</p>
                                </div>
                                <button class="offer__heart"></button>
                            </div>
                            <div class="offer__price">
                                <del>500 DKK</del>
                                <span>200 DKK</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="offer__el">
                        <figure class="offer__image">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                        </figure>
                        <div class="offer__info">
                            <div class="offer__details">
                                <div class="offer__content">
                                    <h4>Wood Wood</h4>
                                    <p>Bobby beach wedding T-shirt</p>
                                </div>
                                <button class="offer__heart"></button>
                            </div>
                            <div class="offer__price">
                                <del>500 DKK</del>
                                <span>200 DKK</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="events">
            <div class="events__wrapper">
                <p>Exclusive events</p>
                <div class="events__list">
                    <a class="events__element" href="#!" data-img="1" title="The North Face x Online Ceramics event">
                        <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-1-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-1-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-1-600w.jpg" alt="The North Face x Online Ceramics illustration" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="2" title="WOOD WOOD Life Store opening event">
                        <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-2-400w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-2-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-2-400w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-2-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-2-600w.jpg" alt="WOOD WOOD Life Store opening illustration" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>WOOD WOOD Life Store™ opening</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="3" title="Biking through Copenhagen event">
                         <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-3-400w.avif 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-3-600w.avif 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-3-400w.webp 400w,
                                <?php echo get_template_directory_uri();?>/app/images/event-3-600w.webp 600w"
                                sizes="(max-width: 1024px) 100vw, 640px">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-3-600w.jpg" alt="Biking through Copenhagen illustration" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>06.06.22</span>
                        <h3>Biking through Copenhagen</h3>
                    </a>
                </div>
            </div>
        </section>
        <section class="signup">
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
                    <div class="signup__actions">
                        <button>Sign up</button>
                        <a href="#!" class="btn--secondary">Or sign in here.</a>
                    </div>
                </form>
            </div>
        </section>
        <div class="banner banner--large">
            <p class="banner__title">Frequently asked questions</p>
        </div>
        <section class="faq">
            <div class="faq__wrapper">
                <h3 class="faq__title">FAQ</h3>
                <div class="faq__content">
                    <details>
                        <summary>What if an item I want is out of stock?</summary>
                        <main>
                            <p>Since all of the garments are second hand, chances are they are limited and sometimes one-offs. If the item you want is out of stock in your size, you can sign up to be notified when your size is available again. Just register to be notified by emailing us.</p>
                        </main>
                    </details>
                    <details>
                        <summary>What is your returns & cancellation policy?</summary>
                        <main>
                            <p>If you're not happy with your purchase or think your goods arrived damaged, you can send any unworn* item back to us within 14 days of the delivery date. It can take up to 14 days for your return to be fully processed. Your original payment method will be refunded. It may take 2-3 days to clear depending on your bank.</p>
                        </main>
                    </details>
                    <details>
                        <summary>Are there any requirements?</summary>
                        <main>
                            <p>Our terms and conditions that you accept at time of sign up and/or order give us this consent.<br>*Products may be purchased for use by individuals under 18 years of age, but we sell only to adults, who may purchase the products with a payment card or other approved payment method.</p>
                        </main>
                    </details>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>