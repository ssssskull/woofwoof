<?php
/**
 * Template Name: Home
*/
get_header();?>
<div class="scroll-tracker"></div>
<div>
    <section class="hero">
        <main class="main">
            <div class="hero__wrapper">
                <h2 class="hero__title">Join us in the<br>WOOD WOOD community.</h2>
                <p class="hero__paragraph">Explore the world of WOOD WOOD and enjoy all the perks we have to offer – all for free.</p>
            </div>
        </section>
        <div class="banner">
            <p class="banner__title">Benefits</p>
        </div>
        <section class="benefits container reveal-container">
            <div class="wrapper">
                <div class="benefits__content">
                    <h2>As a member, you enjoy benefits such as</h2>
                    <ul class="benefits__list">
                        <li class="benefits__elem" data-reveal="1">Free shipping and returns on all orders.</li>
                        <li class="benefits__elem" data-reveal="2">Pre-access to new releases. </li>
                        <li class="benefits__elem" data-reveal="3">Personalised offers.                    </li>
                        <li class="benefits__elem" data-reveal="4">Exclusive events for members only.</li>
                        <li class="benefits__elem" data-reveal="5">Digital receipts on your phone.</li>
                    </ul>
                    <div class="benefits__actions">
                        <a href="<?php the_field('create_account_cta'); ?>" class="btn btn--primary btn--arrow">Become a member</a>
                        <a href="#!" class="btn--secondary">Or discover more</a>
                    </div>
                </div>
                <div class="benefits__illustration">
                    <figure class="benefits__illustration-image reveal-image"></figure>
                </div>
            </div>
        </section>
        <div class="banner banner--divider">
            <p class="banner__title">How it works</p>
        </div>
        <section class="container">
            <div class="wrapper how__wrapper">
                <figure class="how__illustration">
                    <picture>
                        <source type="image/avif" srcset="
                        <?php echo get_template_directory_uri();?>/app/images/how-it-works-600w.avif 600w">
                        <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/how-it-works-600w.webp 600w">
                        <img src="<?php echo get_template_directory_uri();?>/app/images/how-it-works-600w.jpg" alt=" " loading="lazy" decoding="async" height="800">
                    </picture>
                </figure>
                <div class="how__content">
                    <h2 class="how__title">Here’s how it works.</h2>
                    <ul class="how__list">
                        <li>Sign up for free in store or online.</li>
                        <li>Connect your card to your account – we’ll show you how once you’re signed in.<br>Exclusive member offers will automatically be discounted at check out in-store if your card is connected.<br>Remember to sign in when shopping online to make use of the offers.</li>
                        <li>Receive notifications about exclusive offers, invitations to events, and pre-access to curated campaigns straight to your inbox.</li>
                        <li>Sit back and enjoy the full WOOD WOOD experience.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="signup">
             <div class="banner">
                <p class="banner__title">Become a member</p>
            </div>
            <div class="container">
                <div class="signup__wrapper">
                    <h2>Tap into the essence of WOOD WOOD.<br>Join the community.</h2>
                    <a href="<?php the_field('create_account_cta'); ?>" class="btn btn--primary btn--arrow">Become a member for free</a>
                    <h3>If you’re still curious, you can check out this weeks exclusive offers and <br>recent collaborations. They’re right <span>below</span> here.</h3>
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
                                <?php echo get_template_directory_uri();?>/app/images/event-1-400w.avif 400w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-1-400w.webp 400w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-1-400w.jpg" alt="The North Face x Online Ceramics illustration" loading="lazy" decoding="async" height="500">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="2" title="WOOD WOOD Life Store opening event">
                        <figure class="events__img">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-2-400w.avif 400w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-2-400w.webp 400w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-2-400w.jpg" alt="WOOD WOOD Life Store opening illustration" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>28.04.22</span>
                        <h3>WOOD WOOD Life Store™ opening</h3>
                    </a>
                    <a class="events__element" href="#!" data-img="3" title="Biking through Copenhagen event">
                         <figure class="events__img">
                             <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/event-3-400w.avif 400w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/event-3-400w.webp 400w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/event-3-400w.jpg" alt="Biking through Copenhagen illustration" loading="lazy" decoding="async" height="428">
                            </picture>
                        </figure>
                        <span>06.06.22</span>
                        <h3>Biking through Copenhagen</h3>
                    </a>
                </div>
            </div>
        </section>
        <div class="banner">
            <p class="banner__title">Exclusive offers</p>
        </div>
        <section class="container headline">
            <div class="wrapper">
                <h2>Browse members’ exclusive offers</h2>
            </div>
        </section>
        <section class="offer swiper mySwiper">
            <div class="offer__list swiper-wrapper">
                <div class="swiper-slide">
                    <a class="offer__el">
                        <figure class="offer__image" data-product="1">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760" >
                            </picture>
                            <picture class="offer__image--back">
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-back-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-back-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-back-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760" class="offer__image--back">
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
                        <figure class="offer__image" data-product="2">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-2-front-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-2-front-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-2-front-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                            <picture class="offer__image--back">
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-2-back-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-2-back-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-2-back-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760" class="offer__image--back">
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
                        <figure class="offer__image" data-product="3">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-3-front-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-3-front-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-3-front-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                            <picture class="offer__image--back">
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-3-back-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-3-back-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-3-back-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760" class="offer__image--back">
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
                        <figure class="offer__image" data-product="4">
                            <picture>
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-4-front-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-4-front-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-4-front-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760">
                            </picture>
                            <picture class="offer__image--back">
                                <source type="image/avif" srcset="
                                <?php echo get_template_directory_uri();?>/app/images/product-4-back-600w.avif 600w">
                                <source type="image/webp" srcset="<?php echo get_template_directory_uri();?>/app/images/product-4-back-600w.webp 600w">
                                <img src="<?php echo get_template_directory_uri();?>/app/images/product-4-back-600w.jpg" alt="Wood Wood T-shirt" loading="lazy" decoding="async" height="760" class="offer__image--back">
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
        <div class="banner banner--dark">
            <p class="banner__title">Pre-access</p>
        </div>
        <section class="collabs benefits container">
            <div class="wrapper">
                <div class="benefits__content">
                    <h2>Gain pre-access to new releases.</h2>
                    <ul class="benefits__list collabs__container">
                        <li class="benefits__elem" data-reveal="6">Garfield by WOOD WOOD</li>
                        <li class="benefits__elem" data-reveal="7">Solovair for WOOD WOOD</li>
                        <li class="benefits__elem" data-reveal="8">Hermansen by WOOD WOOD</li>
                        <li class="benefits__elem" data-reveal="9">Wood Wood x Rune Glifberg </li>
                        <li class="benefits__elem" data-reveal="10">Roskilde Festival 2021</li>
                        <li class="benefits__elem" data-reveal="11">Joe Pilkington for Wood Wood</li>
                    </ul>
                </div>
                <div class="collabs__illustration">
                    <figure class="collabs__illustration-image reveal-image"></figure>
                </div>
            </div>
        </section>
        <div class="banner banner--large">
            <p class="banner__title">FAQ</p>
        </div>
        <section class="faq">
            <div class="faq__wrapper">
                <h3 class="faq__title">Frequently Asked Questions</h3>
                <p class="faq__lead">Here you can find the most commonly asked questions about our loyalty programme.<br> If you didn’t find an answer, you can always contact us. We’re happy to help.</p>
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