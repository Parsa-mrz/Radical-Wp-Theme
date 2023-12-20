<?php
class Email
{
    public $message;
    public function __construct()
    {
        add_action('email-part', [$this, 'store']);
        add_action('init', [$this, 'create_email_table']);
        add_action('admin_menu', [$this, 'show_subscribers']);
    }

    public function store()
    {
        if (isset($_POST['email'])) {
            $this->insert($_POST['email']);
        }
?>
        <div class="email-boxBg ">
            <div class="container">
                <?php if (isset($this->message)) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= $this->message ?>
                    </div> <?php endif; ?>
                <div class="email-box">
                    <form action="" class="clear cf" id="subform" method="POST" name="f1">
                        <div class="email-box-h3"><?= __('Join 120,000+ Professionals', 'radical') ?></div>
                        <p>
                            <?= __('Sign up for free and start receiving your daily dose of cybersecurity news, insights and tips.', 'radical') ?>
                        </p>
                        <div class="email-input">
                            <label class="visuallyhidden" for="input-email"><?= __('Email', 'radical') ?></label>
                            <input class="text" id="input-email" name="email" placeholder="<?= __('Your e-mail address', 'radical') ?>" required type="email" />
                            <button aria-label="Subscribe" name="submit-form" id="submitform" type="submit"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php
    }

    public function insert($email)
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'email_form';
        $data_to_insert = array(
            'email'         => $email,
        );
        $data_formats = array('%s');
        $wpdb->insert($table_name, $data_to_insert, $data_formats);
        $this->message = __('Subscribed successfully', 'radical');
    }
    public function create_email_table()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'email_form';

        // Check if the table exists
        $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'") === $table_name;

        // If the table doesn't exist, create it
        if (!$table_exists) {
            $sql = "CREATE TABLE {$table_name} (
        id INT NOT NULL AUTO_INCREMENT,
        email VARCHAR(120) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    )";
            $wpdb->query($sql);
        }
    }

    public function show_subscribers()
    {
        add_menu_page(
            __('Subscribers', 'radical'),
            __('Subscribers', 'radical'),
            'manage_options',
            'subscribers_user',
            [$this, 'show_subscribers_callback'],
            'dashicons-email-alt',
            1.5
        );
    }
    public function show_subscribers_callback()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'email_form';
        $items = $wpdb->get_results("SELECT * FROM {$table_name}", ARRAY_A);
        require(get_template_directory() . '/templates/parts/subscribers-part.php');
    }
}
new Email();
