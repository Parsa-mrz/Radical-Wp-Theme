<?php

class OptionController
{
    public function __construct()
    {

        add_action('after_setup_theme', [$this, 'radical_theme_setup']);
        add_action('widgets_init', [$this, 'radical_widgets']);
        
        // Activate Classic Editor
        add_filter('use_block_editor_for_post', '__return_false');
        add_filter('use_widgets_block_editor', '__return_false');
    }
    /**
     * @since 1.0.0
     *
     * @hook after_setup_theme
     *
     * @return
     */
    public function radical_theme_setup()
    {
        /** automatic feed link*/
        add_theme_support('automatic-feed-links');
        /** tag-title **/
        add_theme_support('title-tag');
        // woocommerce
        add_theme_support('woocommerce');
        /** post thumbnail **/
        add_theme_support('post-thumbnails');
        // logo
        add_theme_support('custom-logo', array(
            'height' => 60,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }
    /**
     * @since 1.0.0
     *
     * @hook widgets_init
     *
     * @return
     */
    public function radical_widgets()
    {
        register_sidebar(array(
            'name' => __('blog', 'Hiisun-domain'),
            'id' => 'hiisun_blog',
            'before_widget' => '<div class="single-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => __('shop', 'Hiisun-domain'),
            'id' => 'hiisun_shop',
            'before_widget' => '<div class="single-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => __('widget-1', 'Hiisun-domain'),
            'id' => 'widget-1',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
        register_sidebar(array(
            'name' => __('widget-2', 'Hiisun-domain'),
            'id' => 'widget-2',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
        register_sidebar(array(
            'name' => __('widget-3', 'Hiisun-domain'),
            'id' => 'widget-3',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
    }
}
new OptionController();
