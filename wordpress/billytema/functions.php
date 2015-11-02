<?php

	if (function_exists('register_sidebars'))
		register_sidebar(array(
			'before_widget' => '<div class="widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));
?>

<?php 
	add_theme_support('post_thumbnails');
	set_post_thumbnail_size( 120, 120 );


	function custom_theme_setup() {
	add_theme_support( $feature, $arguments );
	}
	add_action( 'after_setup_theme', 'custom_theme_setup' );

?>
