    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-info">
                        <h3>METATONEHEN</h3>
                        <p>μετὰ τὸ νέἕν</p>
                        <p>Spiritual education platform for personal transformation</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'container'      => false,
                                'menu_class'     => 'footer-menu',
                                'fallback_cb'    => '__return_false',
                                'depth'          => 1,
                            ));
                        ?>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Stay updated with our latest offerings and wisdom</p>
                        <form action="#" method="post" class="newsletter-form">
                            <input type="email" name="email" placeholder="Your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">
                    &copy; <?php echo date('Y'); ?> METATONEHEN. All Rights Reserved.
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
