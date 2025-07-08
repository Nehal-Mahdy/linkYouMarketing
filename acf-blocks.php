<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
	// Check function exists.
	if (function_exists('acf_register_block_type')) {
		// register a Example block.
		acf_register_block_type(array(
			'name' => 'example-block',
			'title' => __('LinkYouMarketing Example Section'),
			'description' => __('A Example block.'),
			'render_template' => 'template-parts/blocks/example-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Example', 'Home'),
		));



		acf_register_block_type(array(
			'name' => 'hero-home-block',
			'title' => __('LinkYouMarketing Hero-Home Section'),
			'description' => __('A Hero-Home block.'),
			'render_template' => 'template-parts/blocks/hero-home-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Hero-Home', 'Home'),
		));


		acf_register_block_type(array(
			'name' => 'services-block',
			'title' => __('LinkYouMarketing services-Home Section'),
			'description' => __('A Services-Home block.'),
			'render_template' => 'template-parts/blocks/services-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Purpose', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'featured-in-block',
			'title' => __('LinkYouMarketing Feauterd-In-Home Section'),
			'description' => __('A Featured In block.'),
			'render_template' => 'template-parts/blocks/featured-in-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Featured-In', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'Previous-Projects-block',
			'title' => __('LinkYouMarketing Previous Projects Section'),
			'description' => __('A Previous Projects block.'),
			'render_template' => 'template-parts/blocks/portfolio/previousProjects-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Portfolio', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'Previous-Clients-block',
			'title' => __('LinkYouMarketing Previous Clients Section'),
			'description' => __('A Previous Clients block.'),
			'render_template' => 'template-parts/blocks/portfolio/previousClients-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Portfolio', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'Service-block-Page',
			'title' => __('LinkYouMarketing Services Grid Section'),
			'description' => __('A Services block.'),
			'render_template' => 'template-parts/blocks/services/services-grid-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Services', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'single-page-hero-block',
			'title' => __('LinkYouMarketing Hero Single Page'),
			'description' => __('A Hero block.'),
			'render_template' => 'template-parts/blocks/single-page/hero-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Hero', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'about-us-block',
			'title' => __('LinkYouMarketing About Us Page'),
			'description' => __('A complete About Us page block with hero, company info, services, and CTA sections.'),
			'render_template' => 'template-parts/blocks/aboutUs/about-us-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-users',
			'keywords' => array('About', 'Company', 'Team', 'Services'),
		));
	}


}
