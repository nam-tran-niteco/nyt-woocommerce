<?php
	require_once('plugins/get-the-image.php');
	require_once('plugins/get-the-breadcrumbs.php');
	require_once('plugins/get-the-pagination.php');
	
	add_theme_support('post-thumbnails');
	
	register_nav_menus(
		array(
		  'top_menu' => 'Top Menu',
		  'footer_menu' => 'Footer Menu'
		)
	);
	
	register_sidebar(array(
		'name' 			=> 'Sidebar',
		'id' 			=> 'sidebar',
		'description' 	=> 'Widgets in this area will be shown on the sidebar.',
		'before_widget'	=> '<div class="%1$s %2$s widget clearfix">',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h2 class="widget_title">',
		'after_title' 	=> '</h2>'
	));
?>