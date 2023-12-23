<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?= wp_title() ?>
    </title>
    <link rel="icon" type="image/png" href="<?= radical_get_option('radical_favicon') ?>" />
</head>
<?php wp_head() ?>

<body <?php body_class() ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <header class="header">
        <!-- top bar -->
        <div class="topBar">
            <div class="container">
                <div class="topBarLeft">
                </div>
                <div class="topBarRight">
                    <span class="fTag"><?= __('Followed by 4.50+ million', 'radical') ?></span>
                    <a href="<?= radical_get_option('twitter_url') ?>"><i class="icon-font icon-twitter"></i></a>
                    <a href="<?= radical_get_option('linkedin_url') ?>"><i class="icon-font icon-linkedin"></i></a>
                    <a href="<?= radical_get_option('facebook_url') ?>"><i class="icon-font icon-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="logoArea">
            <div class="container">
                <div class="logoBox">
                    <a href="<?= home_url() ?>">
                        <img alt="The Hacker News Logo" class="logoBoxImg" fetchpriority="high" src="<?= radical_get_option('radical_logo') ?>" />
                    </a>
                </div>
                <div class="wrapper">
                    <div class="logoAreaSearchIconMobile" id="moboSearch">
                        <i class="icon-font icon-search"></i>
                    </div>
                    <div id="mobHamMenu" class="hamburgerMenuMobile">
                        <i class="icon-font icon-menu m-m-icon"></i>
                    </div>
                </div>
                <a class="sub-button" href="#newsletter">
                    <div class="sub-style">
                        <i class="icon-font icon-mail-alt"></i>
                        <?= __('Get the
                        Free Newsletter', 'radical') ?>
                    </div>
                </a>
            </div>
        </div>
        <!-- <ul class="m-menu-ul mobileMenuUl">
            <li>
                <a href="/"><i class="icon-font icon-home"></i> Home</a>
            </li>
            <li>
                <a href="#email-outer"><i class="icon-font icon-mail-alt"></i> Newsletter</a>
            </li>
            <li>
                <a href="#" rel=" " target="_blank"><i class="icon-font icon-basket"></i> Webinars</a>
            </li>
        </ul> -->
        <div class="searchMenu">
            <div class="container">
                <div class="desktopMenu menu-box cf">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'cf show-menu',
                        'container_class' => 'cf menu-ul',
                    )); ?>
                    <div id="desHamMenu" class="button menu-more">
                        <a class="btn-open"><i class="icon-font icon-menu"></i></a>
                    </div>
                    <div id="desSeaech" class="search-here">
                        <i class="icon-font icon-search"></i>
                    </div>
                </div>
            </div>
            <aside id="searchBox" class="searchBox">
                <div class="container">
                    <div class="searchB">
                        <form action="<?php home_url("/"); ?>" id="searchform" method="get">
                            <input autocomplete="off" id="s" name="s" value="<?php the_search_query(); ?>" placeholder="Search Here..." type="text" />
                        </form>
                        <!-- <span class="underline"></span> -->
                    </div>
                </div>
            </aside>
        </div>
        <!--  -->
        <aside id="hamMenu" class="overlay slide-up-fade-in cf" id="overlay" style="display: block;">
            <div class="wrap cf">
                <div class="o-top cf">
                    <a id="btn-close" class="btn-close" href="javascript:void(0)"><i class="icon-font icon-cancel close-m-i"></i></a>
                </div>
                <nav class="o-menu-box cf">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'popup-menu-left',
                        'menu_class' => 'o-menu',
                        'container_class' => 'o-menu-left',
                    )); ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'popup-menu-right',
                        'menu_class' => 'o-menu',
                        'container_class' => 'o-menu-right',
                    )); ?>
                </nav>
                <div class="gap"></div>
                <div class="o-h5"><?= __('Contact/Tip Us', 'radical') ?></div>
                <div class="o-contact">
                    <a href="<?= radical_get_option('contact_url') ?>">
                        <div class="o-contact-icon"><i class="icon-font icon-mail-alt"></i></div>
                        <span><?= __('Reach out to get featured—contact us to send your exclusive story idea, research, hacks, or ask us a question or leave a comment/feedback!', 'radical') ?></span>
                    </a>
                </div>
                <div class="gap"></div>
                <div class="o-h5"><?= __('Follow Us On Social Media', 'radical') ?></div>
                <div class="o-follow cf">
                    <a href="<?= radical_get_option('facebook_url') ?>" rel=" " target="_blank"><i class="icon-font icon-facebook"></i></a>
                    <a href="<?= radical_get_option('twitter_url') ?>" rel=" " target="_blank"><i class="icon-font icon-twitter"></i></a>
                    <a href="<?= radical_get_option('linkedin_url') ?>" rel=" " target="_blank"><i class="icon-font icon-linkedin"></i></a>
                    <a href="<?= radical_get_option('youtube_url') ?>" rel=" " target="_blank"><i class="icon-font icon-youtube"></i></a>
                    <a href="<?= radical_get_option('telegram_url') ?>" rel=" " target="_blank"><i class="icon-font icon-instagram"></i></a>
                </div>
                <div class="o-sub cf">
                    <a href="<?= radical_get_option('rss_url') ?>" rel=" " target="_blank"><i class="icon-font icon-rss"></i> RSS Feeds</a>
                    <a href="<?= radical_get_option('email_alerts_url') ?>"><i class="icon-font icon-bell-alt"></i> Email Alerts</a>
                    <a href="<?= radical_get_option('telegram_chanel_url') ?>" rel=" " target="_blank"><i class="icon-font icon-telegram"></i> Telegram Channel</a>
                </div>
            </div>
        </aside>
    </header>
    <?php do_action("banner_part_section") ?>