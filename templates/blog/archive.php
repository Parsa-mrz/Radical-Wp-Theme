<?php get_header(); ?>
<main class="main">
    <div class="container">
        <div class="wr">
            <section class="left-box">
                <div class="content section" id="content">
                    <div class="widget Blog" data-version="1" id="Blog1">
                        <div class="blog-posts clear">
                            <div class="category-post">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page'    => 10,
                                    'paged'             => $paged,
                                    'orderby'           => 'date',
                                    'order'             => 'DESC'

                                );
                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post(); ?>
                                        <?php do_action('blog_box_part_section') ?>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class=" container" style='text-align: center;'>
                                        <h3><?= __('There is no posts', 'radical') ?></h3>
                                        <a href='<?= home_url() ?>'><?= __('Back To Home', 'radical') ?></a>
                                    </div>
                                <?php
                                } ?>
                            </div>
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
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <section class="right-box">
                <?php do_action('sidebar_banner_part_section') ?>
                <aside class="right-box" id="right-box">
                    <div class="clear section" id="pop-sidebar">
                        <?php do_action('trending_post_part_section') ?>
                    </div>
                    <section class="clear section babsi side_res">
                        <?php do_action('popular_post_part_section') ?>
                    </section>
                </aside>
            </section>
        </div>
    </div>
</main>
<section class="below-post babsi cf">
    <div class="below-post-box cf">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'category_name'  => radical_get_option('home_post_taxonomy_select'),
        );
        $category = get_category_by_slug($args['category_name']);
        ?>
        <div class="latest-title cf"><?= __($category->name, 'radical') ?></div>
        <div id="load-latest-2">
            <?php
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php do_action('category_slider_part_section'); ?>
                    <?php wp_link_pages(); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>o