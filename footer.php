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
    </div>
</footer>
</body>
</html>