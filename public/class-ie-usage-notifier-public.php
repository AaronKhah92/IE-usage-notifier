<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://wwww.domain.tld
 * @since      1.0.0
 *
 * @package    Ie_Usage_Notifier
 * @subpackage Ie_Usage_Notifier/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ie_Usage_Notifier
 * @subpackage Ie_Usage_Notifier/public
 * @author     Aaron Ahmadi <test@domain.tld>
 */
class Ie_Usage_Notifier_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ie_Usage_Notifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ie_Usage_Notifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ie-usage-notifier-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ie_Usage_Notifier_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ie_Usage_Notifier_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ie-usage-notifier-public.js', array( 'jquery' ), $this->version, false );

	}

	function custom_content_after_body_open_tag() {

    ?>

    <p class="ie-notify">Observera, du använder webbläsaren Internet Explorer. Innehållet av denna sidan visas inte som det är tänkt på Internet Explorer, vi rekommederar att du använder en modern webbläsare som Chrome, Firefox eller Edge.</p>

    <?php

}

	public function set_content_acf()
	{
		wp_enqueue_style(
			'custom-style',
			plugin_dir_url(__FILE__) . 'css/ie-usage-notifier-public.css'
		);
		$custom_css = "
		@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
			.ie10up {
					background-color: red;
			}
			.ie-notify {
				display: block;
			}
	}
	@media \0screen\,screen\9 {
    .ie678 {
			background-color: red;
		}
		.ie-notify {
			display: block;
		}
}

@media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) { 
	@media {
			.safari6 { 
					background-color: red;
			}
			.ie-notify {
				display: block;
			}
	}
}";
		wp_add_inline_style('custom-style', $custom_css);
	}
	
}
