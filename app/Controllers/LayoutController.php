<?php
class Layout
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'add_styles']);
        add_action('wp_enqueue_scripts', [$this, 'add_scripts']);
        add_action('email_part_section', [$this, 'email_part']);
        add_action('banner_part_section', [$this, 'banner_part']);
        add_action('blog_box_part_section', [$this, 'blog_box']);
        add_action('trending_post_part_section', [$this, 'trending_post']);
        add_action('popular_post_part_section', [$this, 'popular_post']);
        add_action('sidebar_banner_part_section', [$this, 'sidebar_banner']);

    }
    public function add_styles()
    {
        // !require css files 
        wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
        wp_enqueue_style('etc', get_template_directory_uri() . '/assets/css/etc.css');
        wp_enqueue_style('grid', get_template_directory_uri() . '/assets/css/grid.css');
        wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css');
        wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    }
    public function add_scripts()
    {
        // !require JS files 
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true);
    }

    public function email_part()
    {
        require(get_template_directory() . '/templates/parts/email-part.php');
    }
    public function banner_part()
    {
        require(get_template_directory() . '/templates/parts/banner-part.php');
    }
    public function blog_box()
    {
        require(get_template_directory() . '/templates/parts/blog-box-part.php');
    }
    public function trending_post()
    {
        require(get_template_directory() . '/templates/parts/trending-post-part.php');
    }
    public function popular_post()
    {
        require(get_template_directory() . '/templates/parts/popular-post-part.php');
    }
    public function sidebar_banner()
    {
        require(get_template_directory() . '/templates/parts/sidebar-banner-part.php');
    }
}
new Layout();
