<?php
//* don't add this php tag to your file

//* Modify this section with width 515 and height 100 for an enlarge header image size
//* Add support for custom header 
add_theme_support( 'custom-header', array(
	'width'           => 515,
	'height'          => 100,
	'header-selector' => '.site-title a',
	'header-text'     => false,
) );

//* Add these last two section to the bottom of your functions.php file 


//* Move Primary Nav Menu Above Header 
	remove_action( 'genesis_after_header', 'genesis_do_nav' );
	add_action( 'genesis_before_header', 'genesis_do_nav' );

//* Enqueue header hiding javascript file
add_action( 'wp_enqueue_scripts', 'custom_enqueue_script' );
function custom_enqueue_script() {
	wp_enqueue_script( 'hide-header', get_bloginfo( 'stylesheet_directory' ) . '/js/hide-header.js', array( 'jquery' ), '', true );
}
