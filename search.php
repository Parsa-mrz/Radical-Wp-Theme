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
                                    }
                                } else {
                                    ?>
                                    <div class=" container" style='text-align: center;'>
                                        <h3><?= __('There is no result for your search', 'radical') ?></h3>
                                        <a href='<?= home_url() ?>'><?= __('Back To Home', 'radical') ?></a>
                                    </div>
                                <?php
                                } ?>
                            </div>
                            <div class="pagination">
                                <?php echo paginate_links(); ?>
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