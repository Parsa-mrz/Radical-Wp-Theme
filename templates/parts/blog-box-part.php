<div class="body-post clear">
    <a class="story-link" href="<?= get_permalink() ?>">
        <div class="clear home-post-box cf">
            <div class="home-img clear">
                <div class="img-ratio">
                    <?php the_post_thumbnail('thumbnail', ['class' => 'home-img-src lazyload']) ?>
                </div>
            </div>
            <div class="clear home-right">
                <h2 class="home-title">
                    <?php __(the_title(), 'radical') ?>
                </h2>
                <div class="item-label">
                    <span class="h-datetime">
                        <i class="icon-font icon-calendar"></i><?php the_time(' M j, Y') ?>
                    </span>
                    <span class="h-tags">
                        <?php
                        $tags = get_the_tags();
                        if (!empty($tags)) {
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '   ' . '</a>';
                            }
                        }
                        ?>
                    </span>
                </div>
                <div class="home-desc">
                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
        </div>
    </a>
</div>