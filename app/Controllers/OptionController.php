<?php

class OptionController
{
    public function __construct()
    {

        add_action('after_setup_theme', [$this, 'radical_theme_setup']);
        add_action('widgets_init', [$this, 'radical_widgets']);
        add_action('init', [$this, 'register_menu']);
        add_action('admin_notices', [$this, 'radical_activation_notice']);
        add_action('cmb2_admin_init', [$this, 'radical_setting']);


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
    public function register_menu()
    {
        register_nav_menus(
            array(
                'main-menu' => __('Main Header', 'radical'),
                'popup-menu-left' => __('Popup Header left', 'radical'),
                'popup-menu-right' => __('Popup Header right', 'radical'),
                'footer-menu-1' => __('Footer 1', 'radical'),
                'footer-menu-2' => __('Footer 2', 'radical'),
                'footer-menu-3' => __('Footer 3', 'radical'),
                'footer-menu-4' => __('Footer 4', 'radical'),
            )
        );
    }
    public function radical_activation_notice()
    {
        // Check if WooCommerce plugin is not active
        if (!is_plugin_active('cmb2/init.php')) {
            $cmb2_install_url = admin_url('plugin-install.php?s=cmb2&tab=search&type=term');
            $message = sprintf(
                __('<strong>Radical Theme</strong> requires <a href="%s">Cmb2</a> to be activated.', 'radical'),
                esc_url($cmb2_install_url)
            );

            echo '<div class="notice notice-warning is-dismissible"><p>' . $message . '</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">' . __('Dismiss this notice', 'radical') . '</span></button></div>';
        }
    }
    public function radical_setting()
    {

        /**
         * Registers options page menu item and form.
         */
        $cmb_options = new_cmb2_box(array(
            'id'           => 'radical_option_metabox',
            'title'        => esc_html__('Radical Settings', 'radical'),
            'object_types' => array('options-page'),

            /*
             * The following parameters are specific to the options-page box
             * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
             */

            'option_key'      => 'radical_options', // The option key and admin menu page slug.
            'icon_url'        => 'dashicons-nametag', // Menu icon. Only applicable if 'parent_slug' is left empty.
            'menu_title'      => esc_html__('Radical', 'radical'), // Falls back to 'title' (above).
            // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
            'capability'      => 'manage_options', // Cap required to view options-page.
            'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
            // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
            // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
            // 'save_button'     => esc_html__( 'Save Theme Options', 'radical' ), // The text for the options-page save button. Defaults to 'Save'.
        ));

        /*
         * Options fields ids only need
         * to be unique within this box.
         * Prefix is not needed.
         */
        // social media liks 
        $cmb_options->add_field(array(
            'name' => __('Instagram URL', 'radical'),
            'id'   => 'instagram_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Twitter URL', 'radical'),
            'id'   => 'twitter_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Facebook URL', 'radical'),
            'id'   => 'facebook_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('linkedin URL', 'radical'),
            'id'   => 'linkedin_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Youtube URL', 'radical'),
            'id'   => 'youtube_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Telegram URL', 'radical'),
            'id'   => 'telegram_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('RSS Feeds URL', 'radical'),
            'id'   => 'rss_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Email Alerts URL', 'radical'),
            'id'   => 'email_alerts_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Telegram Chanel URL', 'radical'),
            'id'   => 'telegram_chanel_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Newsletter URL', 'radical'),
            'id'   => 'newsletter_url',
            'type' => 'text_url',
        ));
        $cmb_options->add_field(array(
            'name' => __('Contact/Tip Us URL', 'radical'),
            'id'   => 'contact_url',
            'type' => 'text_url',
        ));
        // theme logo 
        $cmb_options->add_field(array(
            'name'    => __('Site Logo', 'radical'),
            'desc'    => __('Upload logo', 'radical'),
            'id'      => 'radical_logo',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => __('Add Logo', 'radical') // Change upload button text. Default: "Add or Upload File"
            ),
            'preview_size' => 'medium', // Image size to use when previewing in the admin.
        ));
        // theme favicon 
        $cmb_options->add_field(array(
            'name'    => __('Site Favicon', 'radical'),
            'desc'    => __('Upload favicon', 'radical'),
            'id'      => 'radical_favicon',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => __('Add Favicon', 'radical') // Change upload button text. Default: "Add or Upload File"
            ),
            'preview_size' => 'medium', // Image size to use when previewing in the admin.
        ));
        // header Banner 
        $cmb_options->add_field(array(
            'name'    => __('Header Banner', 'radical'),
            'desc'    => __('Upload Banner', 'radical'),
            'id'      => 'radical_header_banner',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => __('Add Banner', 'radical') // Change upload button text. Default: "Add or Upload File"
            ),
            'preview_size' => 'medium', // Image size to use when previewing in the admin.
        ));
        $cmb_options->add_field(array(
            'name' => __('Header Banner Link', 'radical'),
            'id'   => 'header_banner_link',
            'type' => 'text_url',
        ));

        $cmb_options->add_field(array(
            'name'    => __('Sidebar Banner Up', 'radical'),
            'desc'    => __('Upload Banner', 'radical'),
            'id'      => 'radical_sidebar_banner_up',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => __('Add Banner', 'radical') // Change upload button text. Default: "Add or Upload File"
            ),
            'preview_size' => 'medium', // Image size to use when previewing in the admin.
        ));
        $cmb_options->add_field(array(
            'name' => __('Sidebar Banner Up Link', 'radical'),
            'id'   => 'sidebar_banner_up_link',
            'type' => 'text_url',
        ));

        $cmb_options->add_field(array(
            'name'    => __('Sidebar Banner Down', 'radical'),
            'desc'    => __('Upload Banner', 'radical'),
            'id'      => 'radical_sidebar_banner_down',
            'type'    => 'file',
            // Optional:
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => __('Add Banner', 'radical') // Change upload button text. Default: "Add or Upload File"
            ),
            'preview_size' => 'medium', // Image size to use when previewing in the admin.
        ));
        $cmb_options->add_field(array(
            'name' => __('Sidebar Banner Down Link', 'radical'),
            'id'   => 'sidebar_banner_down_link',
            'type' => 'text_url',
        ));
    }


}
new OptionController();
