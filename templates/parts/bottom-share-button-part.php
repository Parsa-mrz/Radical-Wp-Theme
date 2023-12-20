<?php
if (is_singular() && is_main_query()) {
    // The URLs to share on respective platforms
    $url = urlencode(get_permalink());
    $title = urlencode(get_the_title());

    // Construct the social media sharing links
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
    $twitterURL = 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title;
    $linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title;
}
?>
<div class="sharebelow clear">
    <div class="sharebelow-twitter"><a data-sm="twitter" href="<?= $twitterURL ?>" rel="nofollow noopener" target="_blank"><span><i class="icon-font icon-twitter"></i>Tweet</span></a></div>
    <div class="sharebelow-linkedin"><a data-sm="linkedin" href="<?= $linkedinURL ?>" rel="nofollow noopener" target="_blank"><span><i class="icon-font icon-linkedin"></i>Linkedin</span></a></div>
    <div class="sharebelow-facebook"><a data-sm="facebook" href="<?= $facebookURL ?>" rel="nofollow noopener" target="_blank"><span><i class="icon-font icon-facebook"></i>Facebook</span></a></div>
</div>