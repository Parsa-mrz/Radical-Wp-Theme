<?php
require_once(__DIR__ . '/app/Boot/bootstrap.php');

// ================ Add layout controller 
require_once(__DIR__ . '/app/Controllers/LayoutController.php');

// ================ Add option controller 
require_once(__DIR__ . '/app/Controllers/OptionController.php');

// ================ Add option controller 
require_once(__DIR__ . '/app/Controllers/EmailController.php');

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function radical_get_option($key = '', $default = false)
{
    if (function_exists('cmb2_get_option')) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option('radical_options', $key, $default);
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option('radical_options', $default);

    $val = $default;

    if ('all' == $key) {
        $val = $opts;
    } elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
        $val = $opts[$key];
    }

    return $val;
}
