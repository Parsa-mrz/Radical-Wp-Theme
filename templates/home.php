 <?php get_header() ?>

 <main class="main">
     <div class="container">
         <div class="wr">
             <section class="left-box">
                 <div class="content section" id="content">
                     <div class="widget Blog" data-version="1" id="Blog1">
                         <div class="blog-posts clear">
                             <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 10,
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : ?>
                                 <?php
                                    while ($query->have_posts()) : $query->the_post(); ?>

                                     <?php do_action('blog_box_part_section') ?>
                                     <?php wp_link_pages(); ?>
                                 <?php endwhile; ?>

                                 <!-- Restore original post data -->
                                 <?php wp_reset_postdata(); ?>
                         </div>
                         <div class="blog-pager clear" id="blog-pager">
                             <span id="blog-pager-newer-link">
                                 <a class="blog-pager-newer-link-mobile" href="<?= next_posts_link() ?>" id="Blog1_blog-pager-newer-link" title="Newer Posts">
                                     <i class="icon-font icon-left-open"></i>Prev Page</a>
                             </span>
                             <span id="blog-pager-older-link">
                                 <a class="blog-pager-older-link-mobile" href="<?= previous_posts_link() ?>" id="Blog1_blog-pager-older-link" title="Older Posts">Next Page
                                     <i class="icon-font icon-right-open"></i>
                                 </a>
                             </span>
                         </div>
                     <?php endif; ?>
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
         <div class="latest-title cf">Cybersecurity Resources</div>
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