<?php
/**
 * Exit if accessed directly.
 *
 * @link       https://posimyth.com/
 * @since      6.4.1
 *
 * @package    Theplus
 * @subpackage ThePlus/Notices
 * */

namespace Tp\Notices\Tp_Widget_Promotion;

/**
 * Exit if accessed directly.
 * */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Tp_Widget_Promotion' ) ) {

	/**
	 * This class used for only load widget notice
	 *
	 * @since 6.4.1
	 */
	class Tp_Widget_Promotion {

		/**
		 * Instance
		 *
		 * @since 6.4.1
		 * @access private
		 * @static
		 * @var instance of the class.
		 */
		private static $instance = null;

		/**
		 * Instance
		 *
		 * Ensures only one instance of the class is loaded or can be loaded.
		 *
		 * @since 6.4.1
		 * @access public
		 * @static
		 * @return instance of the class.
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Constructor
		 *
		 * Perform some compatibility checks to make sure basic requirements are meet.
		 *
		 * @since 5.2.3
		 * @version 6.4.1
		 */
		public function __construct() {

			add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'wdkit_widgets_elementor_editor_sripts' ) );
		}

		public function wdkit_widgets_elementor_editor_sripts() {

			$tpae_promo_widgets = array(
				array(
					'name'       => 'tp-audio-player-adv',
					'title'      => 'Audio Player',
					'icon'       => 'theplus-i-audio-player',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/audio-player/',
				),
				array(
					'name'       => 'tp-advanced-typography-adv',
					'title'      => 'Advanced Typography',
					'icon'       => 'theplus-i-advanced-tpography',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/advanced-typography/',
				),
				array(
					'name'       => 'tp-advanced-buttons-adv',
					'title'      => 'Advanced Buttons',
					'icon'       => 'theplus-i-advanced-buttons',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/advanced-buttons/',
				),
				array(
					'name'       => 'tp-advertisement-banner-adv',
					'title'      => 'Advertisement Banner',
					'icon'       => 'theplus-i-advertisement-banner',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/banner-widget/',
				),
				array(
					'name'       => 'tp-animated-service-boxes-adv',
					'title'      => 'Animated Service Boxes',
					'icon'       => 'theplus-i-animated-service-boxes',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/animated-service-boxes/',
				),
				array(
					'name'       => 'tp-before-after-adv',
					'title'      => 'Before After',
					'icon'       => 'theplus-i-before-after',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/before-after-slider/',
				),
				array(
					'name'       => 'tp-dynamic-smart-showcase-adv',
					'title'      => 'Dynamic Smart Showcase',
					'icon'       => 'theplus-i-dynamic-smart-showcase',
					'categories' => array( 'plus-listing' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-listing/#plus-magazine-post-styles/',
				),
				array(
					'name'       => 'tp-wp-bodymovin-adv',
					'title'      => 'LottieFiles Animation',
					'icon'       => 'theplus-i-lottiefiles-animation',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/lottiefiles-animation/',
				),
				array(
					'name'       => 'tp-carousel-remote-adv',
					'title'      => 'Carousel Remote',
					'icon'       => 'theplus-i-carousel-remote',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/carousel-remote-sync/',
				),
				array(
					'name'       => 'tp-cascading-image-adv',
					'title'      => 'Image Cascading',
					'icon'       => 'theplus-i-cascading-image',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/image-cascading/',
				),
				array(
					'name'       => 'tp-chart-adv',
					'title'      => 'Chart',
					'icon'       => 'theplus-i-chart',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/advanced-charts/',
				),
				array(
					'name'       => 'tp-circle-menu-adv',
					'title'      => 'Circle Menu',
					'icon'       => 'theplus-i-circle-menu',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/circle-menu/',
				),
				array(
					'name'       => 'tp-coupon-code-adv',
					'title'      => 'Coupon Code',
					'icon'       => 'theplus-i-coupon-code',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/coupon-code/',
				),
				array(
					'name'       => 'tp-design-tool-adv',
					'title'      => 'Design Tool',
					'icon'       => 'theplus-i-design-tool',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-extras/grid-design-tool/',
				),
				array(
					'name'       => 'tp-draw-svg-adv',
					'title'      => 'Draw SVG',
					'icon'       => 'theplus-i-draw-svg',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/draw-animated-svg-icon/',
				),
				array(
					'name'       => 'tp-dynamic-listing-adv',
					'title'      => 'Dynamic Listing',
					'icon'       => 'theplus-i-dynamic-listing',
					'categories' => array( 'plus-listing' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-listing/dynamic-listing/',
				),
				array(
					'name'       => 'tp-custom-field-adv',
					'title'      => 'Custom Field',
					'icon'       => 'theplus-i-tp-custom-field',
					'categories' => array( 'plus-listing' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/grid-builder/acf-repeater-field/',
				),
				array(
					'name'       => 'tp-dynamic-device-adv',
					'title'      => 'Dynamic Device',
					'icon'       => 'theplus-i-dynamic-device',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/dynamic-device-mockups/',
				),
				array(
					'name'       => 'tp-google-map-adv',
					'title'      => 'Google Map',
					'icon'       => 'theplus-i-google-map',
					'categories' => array( 'plus-adapted' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/google-map/',
				),
				array(
					'name'       => 'tp-hotspot-adv',
					'title'      => 'Hotspot',
					'icon'       => 'theplus-i-hotspot',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/hotspot/',
				),
				array(
					'name'       => 'tp-horizontal-scroll-advance-adv',
					'title'      => 'Horizontal Scroll',
					'icon'       => 'theplus-i-horizontal-scroll',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/horizontal-scroll/',
				),
				array(
					'name'       => 'tp-image-factory-adv',
					'title'      => 'Creative Image',
					'icon'       => 'theplus-i-creative-image',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/creative-images',
				),
				array(
					'name'       => 'tp-mailchimp-adv',
					'title'      => 'MailChimp',
					'icon'       => 'theplus-i-mailchimp',
					'categories' => array( 'plus-forms' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/mailchimp-form/',
				),
				array(
					'name'       => 'tp-mobile-menu-adv',
					'title'      => 'Mobile Menu',
					'icon'       => 'theplus-i-mobile-menu',
					'categories' => array( 'plus-header' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/header-builder/mobile-menu/',
				),
				array(
					'name'       => 'tp-morphing-layouts-adv',
					'title'      => 'Morphing Layouts',
					'icon'       => 'theplus-i-morphing-layouts',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/morphing-sections',
				),
				array(
					'name'       => 'tp-mouse-cursor-adv',
					'title'      => 'Mouse Cursor',
					'icon'       => 'theplus-i-mouse-cursor',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/mouse-cursor/',
				),
				array(
					'name'       => 'tp-navigation-menu-adv',
					'title'      => 'Navigation Menu',
					'icon'       => 'theplus-i-navigation-menu',
					'categories' => array( 'plus-header' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/header-builder/navigation-menu/',
				),
				array(
					'name'       => 'tp-off-canvas-adv',
					'title'      => 'Popup Builder / Off Canvas',
					'icon'       => 'theplus-i-popup-builder-offcanvas',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/popup-builder/',
				),
				array(
					'name'       => 'tp-pre-loader-adv',
					'title'      => 'Pre Loader',
					'icon'       => 'theplus-i-pre-loader',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/preloader-and-page-transition/',
				),
				array(
					'name'       => 'tp-pricing-list-adv',
					'title'      => 'Pricing List',
					'icon'       => 'theplus-i-pricing-list',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/price-list/',
				),
				array(
					'name'       => 'tp-product-listout-adv',
					'title'      => 'Product Listing',
					'icon'       => 'theplus-i-product-listing',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-listing/woocommerce-product/',
				),
				array(
					'name'       => 'tp-protected-content-adv',
					'title'      => 'Protected Content',
					'icon'       => 'theplus-i-protected-content',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/protected-content/',
				),
				array(
					'name'       => 'tp-row-background-adv',
					'title'      => 'Row Background',
					'icon'       => 'theplus-i-row-background',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/section-background/',
				),
				array(
					'name'       => 'tp-scroll-sequence-adv',
					'title'      => 'Scroll Sequence',
					'icon'       => 'theplus-i-scroll-sequence',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/image-scroll-sequence/',
				),
				array(
					'name'       => 'tp-search-filter-adv',
					'title'      => 'Search Filter',
					'icon'       => 'theplus-i-search-filters',
					'categories' => array( 'plus-listing' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/ajax-filters',
				),
				array(
					'name'       => 'tp-search-bar-adv',
					'title'      => 'Search Bar',
					'icon'       => 'theplus-i-search-bar',
					'categories' => array( 'plus-listing' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/ajax-search-bar',
				),
				array(
					'name'       => 'tp-site-logo-adv',
					'title'      => 'Site Logo',
					'icon'       => 'theplus-i-site-logo',
					'categories' => array( 'plus-header' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/header-builder/site-logo-for-elementor/',
				),
				array(
					'name'       => 'tp-shape-divider-adv',
					'title'      => 'Advanced Separators',
					'icon'       => 'theplus-i-advanced-separators',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/advanced-separators',
				),
				array(
					'name'       => 'tp-social-feed-adv',
					'title'      => 'Social Feed',
					'icon'       => 'theplus-i-social-feed',
					'categories' => array( 'plus-social' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/combined-filterable-social-feed/',
				),
				array(
					'name'       => 'tp-social-reviews-adv',
					'title'      => 'Social Reviews',
					'icon'       => 'theplus-i-social-reviews',
					'categories' => array( 'plus-social' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/social-reviews-badges/',
				),
				array(
					'name'       => 'tp-social-sharing-adv',
					'title'      => 'Social Sharing',
					'icon'       => 'theplus-i-social-sharing',
					'categories' => array( 'plus-social' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/social-sharing-buttons/',
				),
				array(
					'name'       => 'tp-table-content-adv',
					'title'      => 'Table of Content',
					'icon'       => 'theplus-i-table-of-content',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/table-of-contents/',
				),
				array(
					'name'       => 'tp-timeline-adv',
					'title'      => 'Timeline',
					'icon'       => 'theplus-i-timeline',
					'categories' => array( 'plus-creatives' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/timeline/',
				),
				array(
					'name'       => 'tp-unfold-adv',
					'title'      => 'Unfold',
					'icon'       => 'theplus-i-unfold',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/unfold/',
				),
				array(
					'name'       => 'tp-woo-cart-adv',
					'title'      => 'Woo Cart',
					'icon'       => 'theplus-i-woo-cart',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/cart-page/',
				),
				array(
					'name'       => 'tp-woo-checkout-adv',
					'title'      => 'Woo Checkout',
					'icon'       => 'theplus-i-woo-checkout',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/checkout-page/',
				),
				array(
					'name'       => 'tp-woo-compare-adv',
					'title'      => 'Woo Compare',
					'icon'       => 'theplus-i-woo-compare',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/product-compare/',
				),
				array(
					'name'       => 'tp-wp-quickview-adv',
					'title'      => 'Woo Quickview',
					'icon'       => 'theplus-i-quick-view',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/quick-view/',
				),
				array(
					'name'       => 'tp-woo-multi-step-adv',
					'title'      => 'Woo Multi Step',
					'icon'       => 'theplus-i-woo-multi-step',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/multi-step-checkout/',
				),
				array(
					'name'       => 'tp-woo-myaccount-adv',
					'title'      => 'Woo My Account',
					'icon'       => 'theplus-i-woo-my-account',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/my-account-page/',
				),
				array(
					'name'       => 'tp-woo-order-track-adv',
					'title'      => 'Woo Order Track',
					'icon'       => 'theplus-i-woo-order-track',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/order-track-page/',
				),
				array(
					'name'       => 'tp-woo-single-basic-adv',
					'title'      => 'Woo Single Basic',
					'icon'       => 'theplus-i-woo-single-basic',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/',
				),
				array(
					'name'       => 'tp-woo-single-image-adv',
					'title'      => 'Woo Single Image',
					'icon'       => 'theplus-i-woo-product-images',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/',
				),
				array(
					'name'       => 'tp-woo-single-pricing-adv',
					'title'      => 'Woo Single Pricing',
					'icon'       => 'theplus-i-woo-single-pricing',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/',
				),
				array(
					'name'       => 'tp-woo-single-tabs-adv',
					'title'      => 'Woo Single Tabs',
					'icon'       => 'theplus-i-woo-single-tabs',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/',
				),
				array(
					'name'       => 'tp-woo-thank-you-adv',
					'title'      => 'Woo Thank You',
					'icon'       => 'theplus-i-woo-thank-you',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/thank-you-page/',
				),
				array(
					'name'       => 'tp-woo-wishlist-adv',
					'title'      => 'Woo Wishlist',
					'icon'       => 'theplus-i-woo-wishlist',
					'categories' => array( 'plus-woo-builder' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-builder/woocommerce-builder/',
				),
				array(
					'name'       => 'tp-wp-login-register-adv',
					'title'      => 'WP Login Register',
					'icon'       => 'theplus-i-wp-login-register',
					'categories' => array( 'plus-essential' ),
					'promo_url'  => 'https://theplusaddons.com/pricing/',
					'demo_url'   => 'https://theplusaddons.com/elementor-widget/login-form/',
				),
			);

			wp_enqueue_style( 'tp-permotions', L_THEPLUS_URL . 'modules/widget-promotion/tp-widget-promotion/tp-promotion.css', array(), L_THEPLUS_VERSION );

				wp_enqueue_script(
					'tp-widgets-panel-js',
					L_THEPLUS_URL . 'modules/widget-promotion/tp-widget-promotion/tp-widgets-load.js',
					array( 'jquery', 'wp-i18n' ),
					L_THEPLUS_VERSION,
					true
				);

				wp_localize_script(
					'tp-widgets-panel-js',
					'tpPanelSettings',
					array(
						'tp_pro_widgets' => $tpae_promo_widgets,
						'nonce'          => wp_create_nonce( 'tp_wdkit_preview_popup' ),
						'ajax_url'       => admin_url( 'admin-ajax.php' ),
					)
				);
		}
	}

	Tp_Widget_Promotion::instance();
}
