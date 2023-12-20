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
<div class="float-share cf" style="visibility: visible;">
    <span class="fs-note">SHARE</span>
    <a class="float-share-li fs-fb" data-sm="facebook" href="<?= $facebookURL ?>" rel="nofollow noopener" target="_blank"><i class="icon-font icon-facebook"></i></a>
    <a class="float-share-li fs-tw" data-sm="twitter" href="<?= $twitterURL ?>" rel="nofollow noopener" target="_blank"><i class="icon-font icon-twitter"></i></a>
    <a class="float-share-li fs-ln" data-sm="linkedin" href="<?= $linkedinURL ?>" rel="nofollow noopener" target="_blank"><i class="icon-font icon-linkedin"></i></a>
</div>