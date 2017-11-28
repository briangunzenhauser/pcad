<?php

// You will likely need to remove the open and close PHP at the top and bottom of each file.


// Add custom footer fields
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Footer Content',
		'menu_title'	=> 'Footer Content',
		'menu_slug' 	=> 'footer-content',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'themes.php',
		'redirect'		=> false
	));

}

?>