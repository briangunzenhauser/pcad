<?php

// Callback function to insert 'styleselect' into the $buttons array
if ( ! function_exists( 'wysiwyg_buttons' ) ) :
function wysiwyg_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'wysiwyg_buttons');
endif;

// Callback function to filter the MCE settings
if ( ! function_exists( 'mce_insert_formats' ) ) :

function mce_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Test Style',  
			'inline' => 'span',  
			'classes' => 'test-style',
			'wrapper' => false,
			
		),

	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats); 
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'mce_insert_formats' );  
endif;


// Enable custom style sheet for TinyMCE (wysiwyg)
if ( ! function_exists( 'mce_add_editor_styles' ) ) :
function mce_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'mce_add_editor_styles' );
endif;

?>