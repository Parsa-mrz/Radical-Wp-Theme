<?php get_header() ?>
<main class="main">
    <div class="container">
        <h1 class="story-title"><?php __(the_title(), 'radical') ?></h1>
        <div class="wr">
            <div class="left-box" id="left-box">
                <div class="content section" id="content">
                    <div class="widget Blog" data-version="1" id="Blog1">
                        <div class="blog-posts clear">
                            <div class="post">
                                <div class="post-body">
                                    <div class="clear post-head">
                                        <div class="postmeta">
                                            <span class="p-author">
                                                <i class="icon-font icon-calendar"></i><span class="author"><?php the_time(' F  Y  ') ?></span>
                                                <i class="icon-font icon-user"></i><span class="author"><?= the_author() ?></span>
                                            </span><span class="p-tags"> <?php
                                                                            $tags = get_the_tags();
                                                                            if (!empty($tags)) {
                                                                                foreach ($tags as $tag) {
                                                                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . ' / ' . '</a>';
                                                                                }
                                                                            }
                                                                            ?></span>
                                        </div>
                                    </div>
                                    <div class="articlebody clear cf" id="articlebody">
                                        <div class="separator" style="clear: both;">
                                            <a href="#" style="clear: left; display: block; float: left; text-align: center;">
                                                <?php the_post_thumbnail('medium_large', ['class' => 'home-img-src lazyload']) ?>
                                            </a>
                                        </div>
                                        <p>
                                            <?php __(the_content(), 'radical') ?>
                                        </p>
                                        <div class="stophere" id="hiddenH1"></div>
                                    </div>
                                    <!-- <script data-cfasync="false">
                                            var share_url = encodeURIComponent('https://thehackernews.com/2023/11/ai-solutions-are-new-shadow-it.html');
                                            var share_title = document.getElementsByTagName("title")[0].innerHTML;
                                            share_title = encodeURIComponent(share_title);
                                            </script> -->
                                    <meta content="4802841478634147276" name="blogId">
                                    <meta content="2003748480264791972" name="postId">
                                    <div class="schema_org"></div>
                                    <?php do_action('left_share_button_part_section') ?>
                                    <?php do_action('bottom_share_button_part_section') ?>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="latest-title cf"><?= __('Cybersecurity Resources', 'radical') ?></div>
        <div id="load-latest-2">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php do_action('category_slider_part_section'); ?>
                    <?php wp_link_pages(); ?>
                <?php endwhile; ?>
                <!-- Restore original post data -->
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<section class="below-post babsi cf">
    <div class="below-post-box cf">
        <div class="latest-title cf"><?= __('Cybersecurity Resources', 'radical') ?></div>
        <div id="load-latest-2">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>
                <?php
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php do_action('category_slider_part_section'); ?>
                    <?php wp_link_pages(); ?>
                <?php endwhile; ?>
                <!-- Restore original post data -->
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer() ?>