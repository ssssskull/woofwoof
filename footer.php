<footer>
    <div class="footer__container">
        <div class="footer__customer">
            <a href="/en/customer/viewprofile" class="footer__customer-link">Account</a>
            <a href="/en/customer/viewprofile" class="footer__customer-link">CSR</a>
            <a href="/en/customer/viewprofile" class="footer__customer-link">Account</a>
            <div class="nav__lang">
                <strong>Language</strong>
                <ul>
                    <li>
                        <a href="">DA</a>
                    </li>
                    <li>
                        <a href="">DE</a>
                    </li>
                    <li>
                        <a href="">EN</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__links">
            <?php wp_nav_menu(array( 'menu' => 'footer', 'container'=> false, 'menu_class' => 'document-list', 'menu_id' => false));?>
        </div>
        <div class="footer__links">
            <?php wp_nav_menu(array( 'menu' => 'footer_secondary', 'container'=> false, 'menu_class' => 'document-list', 'menu_id' => false));?>
        </div>
        <form class="footer__newsletter">
            <p>Sign up for email updates and promotions.</p>
            <button>Button</button>
        </form>
        <div class="footer__campaign">
            <a href="#!" class="footer__campaign-link">
                <span>Muzak 70: AFFIX</span>
            </a>
        </div>
        <div class="footer__end">
            <p class="footer__copyright">© 2022 Wood Wood</p>
            <ul class="footer__some">
                <li>
                    <a href="https://www.twitter.com/w00dw00d" class="footer__icon footer__icon--twitter" target="_blank" rel="noopener noreferrer">
                        <span class="footer__icon-label">Twitter</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/w00dw00d" class="footer__icon footer__icon--facebook" target="_blank" rel="noopener noreferrer">
                        <span class="footer__icon-label">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/w00dw00d" class="footer__icon footer__icon--instagram" target="_blank" rel="noopener noreferrer">
                        <span class="footer__icon-label">Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="https://vimeo.com/w00dw00d" class="footer__icon footer__icon--vimeo" target="_blank" rel="noopener noreferrer">
                        <span class="footer__icon-label">Vimeo</span>
                    </a>
                </li>
                <li>
                    <a href="https://open.spotify.com/user/m9mrcpfhkkyyp8ce3fi5exbk9" class="footer__icon footer__icon--spotify" target="_blank" rel="noopener noreferrer">
                        <span class="footer__icon-label">Spotify</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>