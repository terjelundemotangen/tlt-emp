<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://profiles.wordpress.org/terjelundemotangen/
 * @since      1.0.0
 *
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Tlt_Emp
 * @subpackage Tlt_Emp/admin
 * @author     Terje Lundemo Tangen <terjelundemotangen@me.com>
 */
class Tlt_Emp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Adding the meta box for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function add_meta_box() {

		$post_types = array( 'tribe_events' );

		foreach ( $post_types as $post_type ) {

				add_meta_box(
						'tlt-emp-event-contact-meta-box',
						__( 'Primary contact for this event', 'tlt-emp' ),
						array( $this, 'render_meta_box' ),
						$post_type
				);
		}
	}

	/**
	 * Rendering the meta box for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function render_meta_box( $post ) {

		require_once plugin_dir_path( __FILE__ ) . 'partials/tlt-emp-meta-box.php';
	}

	public function save_meta_box( $post_id ) {

		if( ! isset( $_POST[ 'emp_meta_box_nonce' ] ) ) return;

		if( ! wp_verify_nonce( $_POST['emp_meta_box_nonce'], 'emp_nonce_check' ) ) return;

		if ( wp_is_post_autosave( $post_id ) ) return;


		// contact name
		if ( array_key_exists( 'event-contact-meta-box', $_POST ) ) {

				update_post_meta(
						$post_id,
						'_event_contact',
						sanitize_text_field( $_POST[ 'event-contact-meta-box' ] )
				);
		}
		// contact phone
		if ( array_key_exists( 'event-contact-phone-meta-box', $_POST ) ) {

				update_post_meta(
						$post_id,
						'_event_contact_phone',
						sanitize_text_field( $_POST[ 'event-contact-phone-meta-box' ] )
				);
		}
		// contact email
		if ( array_key_exists( 'event-contact-email-meta-box', $_POST ) ) {

				update_post_meta(
						$post_id,
						'_event_contact_email',
						sanitize_text_field( $_POST[ 'event-contact-email-meta-box' ] )
				);
		}
	}

}
