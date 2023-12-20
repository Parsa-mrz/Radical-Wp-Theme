<article class="latest cf"><a class="latest-link" href="<?= get_permalink() ?>" rel="" target="_blank">
        <div><?php the_post_thumbnail('thumbnail', ['class' => 'lazyload']) ?></div>
        <div>
            <div class="latest-h3"><?php __(the_title(), 'radical') ?></div>
        </div>
        <div class="latest-desc"><?php __(the_excerpt(), 'radical') ?></div>
    </a></article>