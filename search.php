<?php get_header(); ?>
<main class="main">
    <div class="container">
        <div class="wr">
            <section class="left-box">
                <div class="content section" id="content">
                    <div class="widget Blog" data-version="1" id="Blog1">
                        <div class="blog-posts clear">
                            <div class="category-post">
                                <?php if (have_posts()) {
                                    while (have_posts()) {
                                        the_post(); ?>
                                        <?php do_action('blog_box_part_section') ?>

                                    <?php
                                    } ?>
                                    <div class="pagination">
                                        <div class="blog-pager clear" id="blog-pager">
                                            <div class="pagination">
                                                <span id="blog-pager-newer-link">
                                                    <?php if (get_previous_posts_link() && is_paged()) : ?>
                                                        <div class="blog-pager-newer-link-mobile">
                                                            <i class="icon-font icon-left-open"></i>
                                                            <?= previous_posts_link('Prev Page'); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </span>
                                                <span id="blog-pager-older-link">
                                                    <div class="blog-pager-newer-link-mobile">
                                                        <?php if (next_posts_link()) : ?>
                                                            <?= next_posts_link('Next Page') ?>
                                                            <i class="icon-font icon-right-open"></i>
                                                        <?php endif; ?>
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class=" container" style='text-align: center;'>
                                        <h3><?= __('There is no result for your search', 'radical') ?></h3>
                                        <a href='<?= home_url() ?>'><?= __('Back To Home', 'radical') ?></a>
                                    </div>
                                <?php
                                } ?>
                            </div>


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>