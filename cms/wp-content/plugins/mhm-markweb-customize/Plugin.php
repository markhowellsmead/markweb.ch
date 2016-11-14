<?php
/*
Plugin Name: Customization for markweb.ch
Plugin URI: #
Description: General non-layout-based customization for markweb.ch.
Text Domain: mhm-markweb-customize
Author: Mark Howells-Mead
Version: 1.0
Author URI: http://permanenttourist.ch/
*/

namespace MHM\MarkwebCustomize;
class Plugin {

	public $wpversion = '4.6';

	public function __construct(){
		
		register_activation_hook( __FILE__, array( $this, 'check_version' ) );
		add_action( 'admin_init', array( $this, 'check_version' ) );
 		add_filter( 'excerpt_more', array($this, 'new_excerpt_more'), 10, 1);
		$this->key = basename(__DIR__);

	}

	public function check_version() {
		// Check that this plugin is compatible with the current version of WordPress
		if ( ! $this->compatible_version() ) {
			if ( is_plugin_active( plugin_basename( __FILE__ ) ) ) {
				deactivate_plugins( plugin_basename( __FILE__ ) );
				add_action( 'admin_notices', array( $this, 'disabled_notice' ) );
				if ( isset( $_GET['activate'] ) ) {
					unset( $_GET['activate'] );
				}
			}
		}
	}
	
	public function disabled_notice() {
		echo '<div class="notice notice-error is-dismissible">
			<p>' .sprintf( __('The plugin “%1$s” requires WordPress %2$s or higher!', $this->key), 
				_x('Customization for markweb.ch', 'Plugin name', $this->key), 
				$this->wpversion). '</p>
		</div>';
	}

	private function compatible_version() {
		if ( version_compare( $GLOBALS['wp_version'], $this->wpversion, '<' ) ) {
			return false;
		}
		return true;
	}
	
	public function load_textdomain(){
		load_plugin_textdomain( $this->key, false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
	}

	//////////////////////////////////////////////////
	// actual functionality from here

    public function new_excerpt_more($more) {
    	return '…';
    }

	

}

new Plugin();