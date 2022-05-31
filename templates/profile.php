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
        <article class="profile">
            <div class="profile__padding">
                <h2 id="message">Good morning, Mikael</h2>
                <p class="profile__greeting">How are you today? It’s good to see you again.</br>
                    Check out what we’ve collected for you.</p>
                <h3 class="profile__suggestion">We think you’ll like this</h3>
            </div>
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
                                    <span>200 DKK</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <div class="profile__sectionchange">
                <a href="#!" class="btn btn--secondary">See everything we’ve collected for you</a>
            </div>
            <div class="profile__padding">
                <h3 class="profile__suggestion">Upcoming releases</h3>
                <p>As a member, you enjoy early access to a number of releases and collaborations.</p>
                <ul class="profile__accesslist">
                    <a href="https://www.woodwood.com/da/product/9373/wmns-dunk-low">
                        <li>
                            <div class="profile__earlyaccess">
                                <p>Early access</p>
                                <p>12.06.2022</p>
                            </div>
                            <h4>Wmns Dunk Low</h4>
                        </li>
                    </a>
                    <a href="https://www.woodwood.com/da/product/9451/ua-og-style-31-lx">
                        <li>
                            <div class="profile__earlyaccess">
                                <p>Early access</p>
                                <p>21.06.2022</p>
                            </div>
                            <h4>UA OG Style 31 LX</h4>
                        </li>
                    </a>
                    <a href="https://www.woodwood.com/da/product/9511/wmns-aire-force-1-mid">
                        <li>
                            <div class="profile__earlyaccess">
                                <p>Early access</p>
                                <p>29.07.2022</p>
                            </div>
                            <h4>WMNS Aire Force 1 Mid</h4>
                        </li>
                    </a>
                    <a href="https://www.woodwood.com/da/product/9449/og-authentic-sp-lx">
                        <li>
                            <div class="profile__earlyaccess">
                                <p>Early access</p>
                                <p>29.07.2022</p>
                            </div>
                            <h4>OG Authentic SP LX</h4>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="profile__padding">
                <h3 class="profile__suggestion">Exclusive offers for members this week</h3>
            </div>
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
            <div class="profile__sectionchange">
                <a href="#!" class="btn btn--secondary">Shop all offers for members</a>
            </div>
        </article>
    </main>
</div>
<?php get_footer(); ?>