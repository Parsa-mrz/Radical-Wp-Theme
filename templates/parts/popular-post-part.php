<div class="PopularPosts">
  <div class="latest-title cf"><?= __('Popular Resources', 'radical') ?></div>
  <div class="widget-content popular-posts">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
      'meta_key' => 'radical_post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
      <?php
      while ($query->have_posts()) : $query->the_post(); ?>

        <div class="cf pop-article clear">
          <a class="pop-link cf" href="https://thn.news/eQGLvlxS" rel="" target="_blank">
            <div class="side-pop-image">
              <figure class="pop-image">
                <?php the_post_thumbnail('thumbnail', ['class' => 'lazyload']) ?>
              </figure>
            </div>
            <div class="pop-desc">
              <div class="pop-title"><?php __(the_title(), 'radical') ?></div>
            </div>
          </a>
        </div>
        <?php wp_link_pages(); ?>
      <?php endwhile; ?>

      <!-- Restore original post data -->
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <!--  -->
  </div>
</div>