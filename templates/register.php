<?php
/**
 * Template Name: Create account
*/
get_header();?>
<div class="site-content site-content--split register">
    <div class="sidebar">
        <h2 class="register__title"> Create an account to make easier purchases and enjoy privileged access to exclusive shopping features.</h2>
        <ul class="how__list">
            <li>Complete checkout more quickly</li>
            <li>Review order information and tracking</li>
            <li>Use the wishlist to save your favourite products</li>
        </ul>
        <div class="register__notice">
            <p>By activating the loyalty button you become a member of the Wood Wood community. It’s free and you’ll gain access to a number of exclusive benefits.</p>
            <a href="<?php echo home_url()?>" class="btn btn--secondary">Read more about them here.</a>
        </div>
    </div>
    <main class="main main--split">
        <article class="document">
            <h1 class="document__title">Create account</h1>
            <form class="register__form">
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
                <div class="register__checkbox">
                    <label for="loyalty_program">Yes, sign me up for the Wood Wood community. I agree to Wood Wood’s <a href="#!" class="btn--secondary">privacy policy.</a></label>
                    <input type="checkbox" id="loyalty_program" />
                    <span aria-hidden="true"></span>
                </div>
                <button class="register__submit" data-link="<?php the_field('my_profile_cta'); ?>">Sign up</button>
            </form>
            <div class="register__actions">
                <a href="#!" class="btn btn--secondary">Or sign in here.</a>
            </div>
    </article>
</main>
</div>
<?php get_footer(); ?>