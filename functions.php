<?php
/**
 * Enqueue scripts and styles
 */
function cold_beer_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic,300|Open+Sans+Condensed:300|Merriweather:400,400italic' );
	wp_enqueue_style( 'cold-beer-custom', get_stylesheet_directory_uri() . '/css/custom.css', array('bootstrap'), '0.0.1' );

	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'cold_beer_scripts' );

/**
 * WooCommerce integration
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'cooldbeer_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'cooldbeer_wrapper_end', 10);

function cooldbeer_wrapper_start() {
  echo '<section id="content">';
}

function cooldbeer_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {

	/**
	 * Get the product thumbnail for the loop.
	 *
	 * @subpackage	Loop
	 */
	function woocommerce_template_loop_product_thumbnail() {
		echo woocommerce_get_product_thumbnail();
	}
}


?>
