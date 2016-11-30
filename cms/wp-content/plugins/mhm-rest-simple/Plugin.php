<?php
/*
Plugin Name: Simple article viewer
Plugin URI: #
Description: Uses the REST API to load articles from a WordPress installation.
Author: Mark Howells-Mead
Version: 1.3.0
Author URI: https://markweb.ch/
Text Domain: mhm-rest-simple
Domain Path: /Resources/Private/Language
*/

namespace MHM\RestSimple;

class Plugin
{
    private $wpversion = '4.6';
    private $version;

    public function dump($var, $die = false)
    {
        echo '<pre>'.print_r($var, 1).'</pre>';
        if ($die) {
            die();
        }
    }

    public function __construct()
    {
        $this->version = $this->pluginVersion();

        add_action('plugins_loaded', array($this, 'loadTextDomain'));
        add_action('wp_enqueue_scripts', array($this, 'addScripts'));
    }

    public function addScripts()
    {
        global $post;
        wp_enqueue_script('mhm-rest-simple', plugins_url('Resources/Public/JavaScript/ui.js', __FILE__), array('jquery'), $this->version, true);
        wp_localize_script('mhm-rest-simple', 'wpApiSettings', array(
            'root' => esc_url_raw(rest_url()),
            'nonce' => wp_create_nonce('wp_rest'),
        ));
    }

    /**
     * Check that this plugin is compatible with the indicated version of WordPress.
     * Automatically deactivates the plugin if not, and shows a warning in wp-admin.
     */
    public function checkVersion()
    {
        // Check that this plugin is compatible with the current version of WordPress
        if (!$this->compatibleVersion()) {
            if (is_plugin_active(plugin_basename(__FILE__))) {
                deactivate_plugins(plugin_basename(__FILE__));
                add_action('admin_notices', array($this, 'disabledNotice'));
                if (isset($_GET['activate'])) {
                    unset($_GET['activate']);
                }
            }
        }
    }

    /**
     * Compare required version with curren version of WordPress.
     *
     * @return bool Whether the versions match.
     */
    private function compatibleVersion()
    {
        if (version_compare($GLOBALS['wp_version'], $this->wpversion, '<')) {
            return false;
        }

        return true;
    }

    /**
     * Output an error message in wp-admin.
     */
    public function disabledNotice()
    {
        echo '<div class="notice notice-error is-dismissible">
            <p>'.
            sprintf(
                __('The plugin “%1$s” requires WordPress %2$s or higher!', 'mhm-rest-simple'),
                __('Edit profile', 'mhm-rest-simple'),
                $this->wpversion
            ).'</p>
        </div>';
    }

    /**
     * Load translation files from the indicated directory.
     */
    public function loadTextDomain()
    {
        load_plugin_textdomain('mhm-rest-simple', false, dirname(plugin_basename(__FILE__)).'/Resources/Private/Language');
    }

    /**
     * Returns current plugin version.
     *
     * @return string Plugin version
     */
    public function pluginVersion()
    {
        if (!function_exists('get_plugins')) {
            require_once ABSPATH.'wp-admin/includes/plugin.php';
        }
        $plugin_folder = get_plugins('/'.plugin_basename(dirname(__FILE__)));
        $plugin_file = basename((__FILE__));

        return $plugin_folder[$plugin_file]['Version'];
    }
}

new Plugin();
