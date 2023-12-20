<?php wp_footer(); ?>
<!-- start email -->
<?php do_action('email_part_section'); ?>
<!-- end email -->
<footer class="footer cf">
    <div class="footer-box clear">
        <div class="footer-stuff clear cf">
            <div class="footer-box-h4" id="follow-us">
                <?= __('Connect with us!', 'radical') ?>
            </div>
            <div class="follow-box cf">
                <div class="social-box s-tw">
                    <a aria-label="twitter" href="<?= radical_get_option('twitter_url') ?>" rel=" " target="_blank"><i class="icon-font icon-twitter"></i>
                    </a>
                </div>
                <div class="social-box s-fb">
                    <a aria-label="facebook" href="<?= radical_get_option('facebook_url') ?>" rel=" " target="_blank"><i class="icon-font icon-facebook"></i>

                    </a>
                </div>
                <div class="social-box s-in">
                    <a aria-label="linkedin" href="<?= radical_get_option('linkedin_url') ?>" rel=" " target="_blank"><i class="icon-font icon-linkedin"></i>
                    </a>
                </div>
                <div class="social-box s-yt">
                    <a aria-label="youtube" href="<?= radical_get_option('youtube_url') ?>" rel=" " target="_blank"><i class="icon-font icon-youtube"></i>
                    </a>
                </div>
                <div class="social-box s-it">
                    <a aria-label="instagram" href="<?= radical_get_option('instagram_url') ?>" rel=" " target="_blank"><i class="icon-font icon-instagram"></i>
                    </a>
                </div>
                <div class="social-box s-tel">
                    <a aria-label="telegram" href="<?= radical_get_option('telegram_url') ?>" rel=" " target="_blank"><i class="icon-font icon-telegram"></i>
                    </a>
                </div>
            </div>
            <nav class="f-menu-box cf">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu-1',
                    'menu_class' => 'cf f-menu-list cf',
                    'container_class' => 'f-menu-cl-1 cf',
                )); ?>
                <div class="f-menu-cl-2 cf">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'menu_class' => 'cf f-menu-list cf',
                        'container_class' => 'f-menu-cl-1 cf',
                    )); ?>
                </div>
                <div class="f-menu-cl-3 cf">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-3',
                        'menu_class' => 'cf f-menu-list cf',
                        'container_class' => 'f-menu-cl-1 cf',
                    )); ?>
                </div>
                <div class="f-menu-cl-4 cf">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-4',
                        'menu_class' => 'cf f-menu-list cf',
                        'container_class' => 'f-menu-cl-1 cf',
                    )); ?>
                    <!-- <a class="f-m-b" href="#" rel=" " target="_blank">
                        <div class="f-menu-bt f-rss"><i class="icon-font icon-rss"></i> RSSFeeds</div>
                    </a>
                    <a class="f-m-b" href="#">
                        <div class="f-menu-bt"><i class="icon-font icon-mail-alt"></i>Contact Us</div>
                    </a> -->
                </div>
            </nav>
            <div class="footer-note cf">
                <?= __('© The Radical News, 2023. All Rights Reserved.', 'radical') ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>