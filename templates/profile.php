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
                <h2>Good morning, Mikael</h2>
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
        <div class="profile__padding"> 
            <a href="#!" class="btn btn--secondary">See what we’ve collected for you</a>
</div>    
        </div>
        </article>
</main>
</div>
<?php get_footer(); ?>