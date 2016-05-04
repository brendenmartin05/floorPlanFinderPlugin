
<?php
/**
 * Load the style sheet from the parent theme.
 *
 */
function theme_name_parent_styles() {
	wp_enqueue_style( 'theme-name-parent-style', get_stylesheet_directory_uri() . '/css/finder.css', array(), '0.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_parent_styles' );
?>