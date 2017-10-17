/**
 * Load the theme stylesheets
 */
function theme_styles()  { 

	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

}
add_action('wp_enqueue_scripts', 'theme_styles');