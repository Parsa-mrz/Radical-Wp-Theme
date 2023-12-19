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
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                                     <?php do_action('blog_box_part_section') ?>
                                 <?php endwhile; ?>
                                 <!-- Restore original post data -->
                                 <?php wp_reset_postdata(); ?>
                             <?php endif; ?>
                         </div>
                         <div class="blog-pager clear" id="blog-pager">
                             <span id="blog-pager-newer-link">
                                 <a class="blog-pager-newer-link-mobile" href="#" id="Blog1_blog-pager-newer-link" title="Newer Posts">
                                     <i class="icon-font icon-left-open"></i>Prev Page</a>
                             </span>
                             <span id="blog-pager-older-link">
                                 <a class="blog-pager-older-link-mobile" href="#" id="Blog1_blog-pager-older-link" title="Older Posts">Next Page
                                     <i class="icon-font icon-right-open"></i>
                                 </a>
                             </span>
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
         <div class="latest-title cf">Cybersecurity Resources</div>
         <div id="load-latest-2">
             <article class="latest cf"><a class="latest-link" href="https://thn.news/fyyz9lXL" rel="" target="_blank">
                     <div><img alt="SaaS Security" class="lazyload" decoding="async" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhnXejhLVjU-9QjTUw2Sh3Z-wdDRc8zbzye2iR9C8cNNYl8lIWm_XQ81VDrSPidWl7ZC0mcqGp6ohdxi1Z4dC9SOAJGzZqgcksihh5BK_B6k6vjF9QVidsbxfMd2WuXG-O6prgA2wQt0D4eKbeQtYokn8jaCuAhTInkJB27mtK3Uqi218MYtLumusryVGsA/s260-rw-ft-e30/sspm-report.jpg"></div>
                     <div>
                         <div class="latest-h3">600+ Experts Reveal Key SaaS Security Gaps</div>
                     </div>
                     <div class="latest-desc">SaaS Gaps You Don't Know Can Hurt You – Learn More in the AppOmni 2023 Report.</div>
                 </a></article>
             <article class="latest cf"><a class="latest-link" href="https://thn.news/Y2SndjHx" rel="" target="_blank">
                     <div><img alt="Threat Detection" class="lazyload" decoding="async" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhl38_h5uJy9-S89Fo0ibig9SSmhHGb_MuB-14GpSRySEsgX0y1ZKPiEl5C28V3WvdLs6elYfVKN_ujk-B2z91yz-h7j-sVj7ig6ztknl_EwOEjKk2PVVtm5fSUQZzhxRVMqBrM4prwweLbIKNk4ZQGfOgtZxFyDORidbcQuahTjgiHx2GoUnYReoarFeQC/s260-rw-ft-e30/ff.png"></div>
                     <div>
                         <div class="latest-h3">Discover Our Unparalleled Threat Detection Capabilities</div>
                     </div>
                     <div class="latest-desc">Try Fidelis Elevate for 30 days and discover threats your current provider missed.</div>
                 </a></article>
             <article class="latest cf"><a class="latest-link" href="https://thn.news/qtbi3PID" rel="" target="_blank">
                     <div><img alt="Mitigating Insider Risks" class="lazyload" decoding="async" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg3DdntBL7BdA90XY5-YpzJTlozW9BVL_jmEdvoOw4I5M5cfmLCe33zzQ-mw0TgBbu08lpkPXLFwYuU-DZzcjkBdB-eEVv9Cx-o1qpvcff6FM0B4Fr15jhMm_DE43ad91_wFQWmTqSj-PDHlp5_2g2kabb38EK0aq-py9Pib43sYWMrpM6g1Daj9LkfFadb/s260-rw-ft-e30/Wing.jpg"></div>
                     <div>
                         <div class="latest-h3">Ebook: Learn How SaaS Security Mitigates Insider Risks</div>
                     </div>
                     <div class="latest-desc">How to prevent inadequate offboarding and identify suspicious employee behavior with SSPM</div>
                 </a></article>
             <article class="latest cf"><a class="latest-link" href="https://thn.news/kWw7dRE3" target="_blank">
                     <div><img alt="Cybersecurity with Georgetown" class="lazyload" decoding="async" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEir4JPuHbPXO3LxZYWSU-xwpZg4_zEL8WEmn_cMABqSXnsyHcl7Pa7EvfG1Kla3qXvnUSZ9qKO72oMbQZKyg0L3POclOmCsiNUyseL-0hNS-1J4oAIZBb4Q8-qYvmDCRj0ONPwjCZTsd_KQAfhECg-PxAS7hu7qpCyzGYCYIMkNiY3jYafhkUXtwSn8QpT-/s260-rw-ft-e30/yy.jpg"></div>
                     <div>
                         <div class="latest-h3">Earn a Master's in Cybersecurity Risk Management</div>
                     </div>
                     <div class="latest-desc">Lead the future of cybersecurity risk management with an online Master's from Georgetown.</div>
                 </a></article>
         </div>
     </div>
 </section>


 <!-- start email -->
 <?php do_action('email_part_section'); ?>
 <!-- end email -->

 <?php get_footer() ?>