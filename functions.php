<?php

// // // // // // // // // // //
// ENQUEUE STYLES AND SCRIPTS //
// // // // // // // // // // //
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');
function enqueue_styles_and_scripts()
{
  $styles_dist_path = get_stylesheet_directory_uri() . '/assets/dist/styles/';
  $scripts_dist_path = get_stylesheet_directory_uri() . '/assets/dist/scripts/';

  // CSS
  
  wp_enqueue_style('tmc_developer_test_styles', $styles_dist_path . 'tmc-developer-test-styles.css', false, 'all');
  wp_enqueue_style('theme_style', $styles_dist_path . 'styles.min.css', false, 'all');
  wp_enqueue_style('dave_developer_test_styles', $styles_dist_path . 'index.css', false, 'all');
  

  // JS
  wp_enqueue_script('theme_script', $scripts_dist_path . 'main.min.js', array('jquery'), false, true);
}


// // // // // // // // // // //
// REGISTER GUTENBERG BLOCKS  //
// // // // // // // // // // //
function tmc_register_acf_gutenberg_blocks()
{
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array( // General Content
			'name'            => 'general-content',
			'title'           => __('General Content'),
			'description'     => __('Display the general content'),
			'render_template' => get_template_directory() . '/template-parts/gb/gb-general-content.php',
			'category'        => 'developer-test-theme',
			'keywords'        => array('general', 'content'),
			'mode'            => 'edit',
			'supports'        => array('mode' => false, 'align' => ['wide', 'full']),
		));
	}
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array( // text and media
			'name'            => 'text-media',
			'title'           => __('text and media'),
			'description'     => __('Display the text and media'),
			'render_template' => get_template_directory() . '/template-parts/gb/gb-text-media.php',
			'category'        => 'developer-test-theme',
			'icon' 			  => 'admin-media',
			'keywords'        => array('media', 'text'),
			'mode'            => 'edit',
			'supports'        => array('mode' => false, 'align' => [ 'left', 'right', 'wide', 'full']),
		));
	}
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array( // text and media
			'name'            => 'text-media-button',
			'title'           => __('text media button'),
			'description'     => __('Display the text media button'),
			'render_template' => get_template_directory() . '/template-parts/gb/gb-text-media-button.php',
			'category'        => 'developer-test-theme',
			'icon' 			  => 'admin-media',
			'keywords'        => array('media', 'text'),
			'mode'            => 'edit',
			'supports'        => array('mode' => false, 'align' => [ 'left', 'right', 'wide', 'full']),
		));
	}
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array( // flexible media
			'name'            => 'text-media-align',
			'title'           => __('Flexible Media'),
			'description'     => __('Display the text and media realign'),
			'render_template' => get_template_directory() . '/template-parts/gb/gb-text-media-align.php',
			'category'        => 'developer-test-theme',
			'icon' 			  => 'align-left',
			'keywords'        => array('media', 'text', 'align'),
			'mode'            => 'edit',
			'supports'        => array('mode' => false, 'align' => [ 'left', 'right', 'wide', 'full']),
		));
	}
}
add_action('acf/init', 'tmc_register_acf_gutenberg_blocks');

add_filter('allowed_block_types', 'theme_allowed_block_types', 10, 2);
function theme_allowed_block_types($allowed_blocks, $post)
{
	$allowed_blocks = array(
		'acf/general-content',
		'acf/text-media',
		'acf/text-media-align',
		'acf/text-media-button',
		// 'core/columns',
		// 'core/group',
		// 'core/row',
		// 'core/stack',
		// 'core/more',
		// 'core/nextpage',
		// 'core/separator',
		// 'core/spacer',
		// 'core/image',
	);
	return $allowed_blocks;
}