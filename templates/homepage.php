<?php
/**
 * Template Name: Home
*/
get_header();?>
<div class="site-content">
    <main class="main">
        <div class="hero">
            <div class="hero__wrapper">
                <h2 class="hero__title">Are you ready for Wood Woods club?</h2>
                <p class="hero__paragraph">Enjoy benefits, sales, pre-access to new collections and events hosted for our loyal customers</p>
            </div>
        </div>
        <div class="events">
            <div class="events__wrapper">
                <h2>Exclusive events</h2>
                <div class="events__list">
                    <a class="events__element" href="#!">
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
                    </a>
                    <a class="events__element" href="#!">
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
                    </a>
                    <a class="events__element" href="#!">
                        <span>28.04.22</span>
                        <h3>The North Face x Online Ceramics</h3>
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