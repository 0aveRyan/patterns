<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://dryanpress.net
 * @since      1.0.0
 *
 * @package    Patterns
 * @subpackage Patterns/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Patterns
 * @subpackage Patterns/admin
 * @author     David Ryan <dryanpress@chat.wordpress.org>
 */
class Patterns_Admin {

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
	 * Register Overview Page (Top-Level Page)
	 */
	public function register_overview_page() {
		add_menu_page(
			__( 'WordPress Admin Patterns Overview', $this->plugin_name ),
			__( 'Patterns', $this->plugin_name ),
			'read',
			'admin-patterns',
			array( $this, 'include_overview_partial' ),
			'dashicons-wordpress-alt',
			9999
		);
	}

	/**
	 * Include Overview Partial
	 */
	public function include_overview_partial() {
		include_once( PATTERNS_PATH . 'admin/partials/patterns-overview.php' );
	}


	/**
	 * Register Base Patterns Page
	 */
	public function register_base_patterns_page() {
		add_submenu_page(
			'admin-patterns',
			__( 'Base Patterns', $this->plugin_name ),
			__( 'Base Patterns', $this->plugin_name ),
			'read',
			'base-patterns',
			array( $this, 'base_patterns_grand_central_station' )
		);
	}

	/**
	 * Register Base Patterns Page
	 */
	public function register_layout_patterns_page() {
		add_submenu_page(
			'admin-patterns',
			__( 'Layout Patterns', $this->plugin_name ),
			__( 'Layout Patterns', $this->plugin_name ),
			'read',
			'layout-patterns',
			array( $this, 'layout_patterns_grand_central_station' )
		);
	}

	/**
	 * Build Array of Base Pattern Views with slugs and Tab Titles
	 *
	 * @since    1.0.0
	 * @return   array    $pattern_views
	 */
	public function get_base_patterns_views() {

		$base_pattern_views = array(
			'colors' => 'Colors',
			'buttons' => 'Buttons',
			'cards' => 'Cards',
			'tabs' => 'Tabs',
			'notices' => 'Notices',
			'tables' => 'Tables',
			'forms' => 'Forms',
			'misc'  => 'Miscellaneous'
		);

		return $base_pattern_views;

	}

	/**
	 * Handles Base Patterns Tab Routing
	 *
	 * Builds each tab with a header and footer, highlighting current tab.
	 *
	 * @see $this->register_pattern_page() that points to this function
	 */
	public function base_patterns_grand_central_station() {

		$base_views = $this->get_base_patterns_views();
		$base_views = array_keys( $base_views );
		$current_base_view = isset( $_GET['view'] ) ? $_GET['view'] : '';
		$default_base_view = 'colors';

		if ( ! empty( $current_base_view ) && is_array( $base_views ) ) {
			foreach ( $base_views as $base_view ) {
				if ( $current_base_view == $base_view ) {
					$this->base_patterns_header( $base_view );
					include_once ( PATTERNS_PATH . 'admin/partials/patterns-'. $base_view .'.php');
					$this->base_patterns_footer();
				}
			}
		} elseif ( empty ( $current_base_view ) ) {
			$this->base_patterns_header( $default_base_view );
			include_once ( PATTERNS_PATH . 'admin/partials/patterns-'. $default_base_view .'.php');
			$this->base_patterns_footer();
		}

	}

	/**
	 * Top of Pages with Page Title and Navigation Tabs
	 **
	 * @since       1.0.0
	 * @param      string $selected_view Slug for active tab passed through in
	 *                                   $this->patterns_grand_central_station()
	 */
	public function base_patterns_header( $selected_base_view ) {

		$base_views = $this->get_base_patterns_views();
		$active_class = ' nav-tab-active';
		$base_url = admin_url('admin.php?page=base-patterns&view=');

		if ( ! empty( $selected_base_view ) && is_array( $base_views ) ) {
			foreach ( $base_views as $base_view => $base_view_title ) {
				${"active_$base_view"}  = '';

				if ( $selected_base_view == $base_view ) {
					${"active_$base_view"} = $active_class;
				}
			}
		}
		elseif ( empty( $selected_base_view ) ) {
			$active_colors = $active_class;
		}

		ob_start(); ?>

		<div class="wrap patterns-wrap">

			<h1><?php _e('Base Patterns', $this->plugin_name ); ?></h1>

			<h2 class="nav-tab-wrapper">
				<?php foreach( $base_views as $base_view => $base_view_title ) {
					echo '<a href=' . $base_url . $base_view . ' class="nav-tab' .
					     ${"active_$base_view"} .'">'. $base_view_title . '</a>';
				} ?>
			</h2>
			<br />
		<?php
		echo ob_get_clean();

	}

	public function base_patterns_footer() {
		ob_start(); ?>
			</div> <!-- end .patterns-wrap -->
			<script type="text/javascript">
				Prism.plugins.NormalizeWhitespace.setDefaults({
					'remove-trailing': true,
					'remove-indent': true,
					'left-trim': true,
					'right-trim': true,
					'break-lines': 100,
					'indent': 0,
					'tabs-to-spaces': 2,
					'spaces-to-tabs': 2
				});
			</script>
		<?php
		echo ob_get_clean();
	}


	/**
	 * Build Array of Base Pattern Views with slugs and Tab Titles
	 *
	 * @since    1.0.0
	 * @return   array    $pattern_views
	 */
	public function get_layout_patterns_views() {

		$layout_pattern_views = array(
			'rgrid'  => 'Release Grid',
			'pgroup' => 'People Group',
			'wpanel' => 'Welcome Panel',
			'filternav' => 'Filter Navbar',
			'plugingrid' => 'Plugin Grid'
		);

		return $layout_pattern_views;

	}

	/**
	 * Handles Layout Patterns Tab Routing
	 *
	 * Builds each tab with a header and footer, highlighting current tab.
	 *
	 * @see $this->register_pattern_page() that points to this function
	 */
	public function layout_patterns_grand_central_station() {

		$layout_views = $this->get_layout_patterns_views();
		$layout_views = array_keys( $layout_views );
		$current_layout_view = isset( $_GET['view'] ) ? $_GET['view'] : '';
		$default_layout_view = 'rgrid';

		if ( ! empty( $current_layout_view ) && is_array( $layout_views ) ) {
			foreach ( $layout_views as $layout_view ) {
				if ( $current_layout_view == $layout_view ) {
					$this->layout_patterns_header( $layout_view );
					include_once ( PATTERNS_PATH . 'admin/partials/patterns-'. $layout_view .'.php');
					$this->layout_patterns_footer();
				}
			}
		} elseif ( empty ( $current_layout_view ) ) {
			$this->layout_patterns_header( $default_layout_view );
			include_once ( PATTERNS_PATH . 'admin/partials/patterns-'. $default_layout_view .'.php');
			$this->layout_patterns_footer();
		}

	}

	/**
	 * Top of Pages with Page Title and Navigation Tabs
	 **
	 * @since       1.0.0
	 * @param      string $selected_view Slug for active tab passed through in
	 *                                   $this->patterns_grand_central_station()
	 */
	public function layout_patterns_header( $selected_layout_view ) {

		$layout_views = $this->get_layout_patterns_views();
		$active_class = ' nav-tab-active';
		$layout_url = admin_url('admin.php?page=layout-patterns&view=');

		if ( ! empty( $selected_layout_view ) && is_array( $layout_views ) ) {
			foreach ( $layout_views as $layout_view => $layout_view_title ) {
				${"active_$layout_view"}  = '';

				if ( $selected_layout_view == $layout_view ) {
					${"active_$layout_view"} = $active_class;
				}
			}
		}
		elseif ( empty( $selected_layout_view ) ) {
			$active_rgrid = $active_class;
		}

		ob_start(); ?>

			<div class="wrap patterns-wrap">

				<h1><?php _e('Layout Patterns', $this->plugin_name ); ?></h1>

				<h2 class="nav-tab-wrapper">
					<?php foreach( $layout_views as $layout_view => $layout_view_title ) {
						echo '<a href=' . $layout_url . $layout_view . ' class="nav-tab' .
						     ${"active_$layout_view"} .'">'. $layout_view_title . '</a>';
					} ?>
				</h2>
				<br />

		<?php
		echo ob_get_clean();
	}

	public function layout_patterns_footer() {
		ob_start(); ?>
			</div> <!-- end .patterns-wrap -->
			<script type="text/javascript">
				Prism.plugins.NormalizeWhitespace.setDefaults({
					'remove-trailing': true,
					'remove-indent': true,
					'left-trim': true,
					'right-trim': true,
					'break-lines': 100,
					'indent': 0,
					'tabs-to-spaces': 2,
					'spaces-to-tabs': 2
				});
			</script>
			<?php
		echo ob_get_clean();
	}


	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

//		$screen = get_current_screen();
//
//		if ( $screen->id == 'admin-patterns' ) {
			wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/prism.css', array(), $this->version, 'all' );

//		}

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
//		$screen = get_current_screen();
//
//		if ( $screen->id == 'admin-patterns' ) {
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/prism.js', $this->version, false );
//		}
	}

}
