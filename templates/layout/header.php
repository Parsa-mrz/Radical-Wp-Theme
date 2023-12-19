<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        me
    </title>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri() . '/assets/images/favIcon/favicon.ico' ?>" />
    <link href="https://thehackernews.com/downloads/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
                    <span class="">#1 Trusted Cybersecurity News Platform</span>
                </div>
                <div class="topBarRight">
                    <span class="fTag">Followed by 4.50+ million</span>
                    <a href="#"><i class="icon-font icon-twitter"></i></a>
                    <a href="#"><i class="icon-font icon-linkedin"></i></a>
                    <a href="#"><i class="icon-font icon-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="logoArea">
            <div class="container">
                <div class="logoBox">
                    <a href="/">
                        <img alt="The Hacker News Logo" class="logoBoxImg" fetchpriority="high" src="assets/images/logo/download.png" />
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
                <a class="sub-button" href="#email-outer">
                    <div class="sub-style">
                        <i class="icon-font icon-mail-alt"></i> Get the
                        Free Newsletter
                    </div>
                </a>
            </div>
        </div>
        <ul class="m-menu-ul mobileMenuUl">
            <li>
                <a href="/"><i class="icon-font icon-home"></i> Home</a>
            </li>
            <li>
                <a href="#email-outer"><i class="icon-font icon-mail-alt"></i> Newsletter</a>
            </li>
            <li>
                <a href="#" rel=" " target="_blank"><i class="icon-font icon-basket"></i> Webinars</a>
            </li>
        </ul>
        <div class="searchMenu">
            <!-- <div class="container"> -->
            <div class="desktopMenu menu-box cf">
                <ul class="cf menu-ul">
                    <li class="show-menu">
                        <a href="/" itemprop="url">Home</a>
                    </li>
                    <li class="eight_plus">
                        <a href="#">Data Breaches</a>
                    </li>
                    <li class="show-menu">
                        <a href="#">Cyber Attacks</a>
                    </li>
                    <li class="show-menu">
                        <a href="#">Vulnerabilities</a>
                    </li>
                    <li class="eight_plus">
                        <a href="#">Webinars</a>
                    </li>
                    <li class="show-menu">
                        <a href="#" rel=" " target="_blank">Store</a>
                    </li>
                    <li class="show-menu">
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <div id="desHamMenu" class="button menu-more">
                    <a class="btn-open"><i class="icon-font icon-menu"></i></a>
                </div>
                <div id="desSeaech" class="search-here">
                    <i class="icon-font icon-search"></i>
                </div>
            </div>
            <!-- </div> -->
            <aside id="searchBox" class="searchBox">
                <div class="container">
                    <div class="searchB">
                        <form action="" id="searchform" method="get">
                            <input autocomplete="off" id="s" name="q" placeholder="Search Here..." type="text" />
                            <input name="cx" type="hidden" value="partner-pub-7983783048239650:3179771210" />
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
                    <div class="o-menu-left">
                        <div class="o-menu-h5">Resources</div>
                        <ul class="o-menu">
                            <li><a href="#" rel=" " target="_blank">Webinars</a></li>
                            <li><a href="#" rel=" " target="_blank">THN Store</a></li>
                            <li><a href="#" rel=" " target="_blank">Free eBooks</a></li>
                        </ul>
                    </div>
                    <div class="o-menu-right">
                        <div class="o-menu-h5">About Site</div>
                        <ul class="o-menu">
                            <li><a href="#">About THN</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Advertise with us</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="gap"></div>
                <div class="o-h5">Contact/Tip Us</div>
                <div class="o-contact">
                    <a href="#">
                        <div class="o-contact-icon"><i class="icon-font icon-mail-alt"></i></div>
                        <span>Reach out to get featured—contact us to send your exclusive story idea, research, hacks, or ask us a question or leave a comment/feedback!</span>
                    </a>
                </div>
                <div class="gap"></div>
                <div class="o-h5">Follow Us On Social Media</div>
                <div class="o-follow cf">
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-facebook"></i></a>
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-twitter"></i></a>
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-linkedin"></i></a>
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-youtube"></i></a>
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-instagram"></i></a>
                </div>
                <div class="o-sub cf">
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-rss"></i> RSS Feeds</a>
                    <a href="#email-outer"><i class="icon-font icon-bell-alt"></i> Email Alerts</a>
                    <a href="#" rel=" " target="_blank"><i class="icon-font icon-telegram"></i> Telegram Channel</a>
                </div>
            </div>
        </aside>
    </header>
    <?php do_action("banner_part_section") ?>