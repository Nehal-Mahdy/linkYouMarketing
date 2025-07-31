<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
	// Check function exists.
	if (function_exists('acf_register_block_type')) {
		// register a Example block.
		acf_register_block_type(array(
			'name' => 'example-block',
			'title' => __('linkyouacademy Example Section'),
			'description' => __('A Example block.'),
			'render_template' => 'template-parts/blocks/example-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Example', 'Home'),
		));



		acf_register_block_type(array(
			'name' => 'hero-home-block',
			'title' => __('linkyouacademy Hero-Home Section'),
			'description' => __('A Hero-Home block.'),
			'render_template' => 'template-parts/blocks/hero-home-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Hero-Home', 'Home'),
		));


		acf_register_block_type(array(
			'name' => 'services-block',
			'title' => __('linkyouacademy services-Home Section'),
			'description' => __('A Services-Home block.'),
			'render_template' => 'template-parts/blocks/services-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Purpose', 'Home'),
		));


		acf_register_block_type(array(
			'name' => 'Testimonials-block',
			'title' => __('linkyouacademy Testimonials-Home Section'),
			'description' => __('A Testimonials In block.'),
			'render_template' => 'template-parts/blocks/testimonials-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Testimonials', 'Home'),
		));


		acf_register_block_type(array(
			'name' => 'Universities-block',
			'title' => __('linkyouacademy Universities-Home Section'),
			'description' => __('A Universities In block.'),
			'render_template' => 'template-parts/blocks/universities-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Universities', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'featured-in-block',
			'title' => __('linkyouacademy Feauterd-In-Home Section'),
			'description' => __('A Featured In block.'),
			'render_template' => 'template-parts/blocks/featured-in-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Featured-In', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'Previous-Projects-block',
			'title' => __('linkyouacademy Previous Projects Section'),
			'description' => __('A Previous Projects block.'),
			'render_template' => 'template-parts/blocks/portfolio/previousProjects-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Portfolio', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'Courses-Preview-block',
			'title' => __('linkyouacademy Courses Preview Section'),
			'description' => __('A Courses Preview block.'),
			'render_template' => 'template-parts/blocks/coursesPreview/courses-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Portfolio', 'Home'),
		));


		acf_register_block_type(array(
			'name' => 'Service-block-Page',
			'title' => __('linkyouacademy Services Grid Section'),
			'description' => __('A Services block.'),
			'render_template' => 'template-parts/blocks/services/services-grid-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Services', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'single-page-hero-block',
			'title' => __('linkyouacademy Hero Single Page'),
			'description' => __('A Hero block.'),
			'render_template' => 'template-parts/blocks/single-page/hero-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-media',
			'keywords' => array('Hero', 'Home'),
		));

		acf_register_block_type(array(
			'name' => 'about-us-block',
			'title' => __('linkyouacademy About Us Page'),
			'description' => __('A complete About Us page block with hero, company info, services, and CTA sections.'),
			'render_template' => 'template-parts/blocks/aboutUs/about-us-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-users',
			'keywords' => array('About', 'Company', 'Team', 'Services'),
		));

		acf_register_block_type(array(
			'name' => 'contact-us-block',
			'title' => __('linkyouacademy Contact Us Page'),
			'description' => __('A complete contact Us page'),
			'render_template' => 'template-parts/blocks/contactUs/contact-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'admin-users',
			'keywords' => array('Contact'),
		));

		acf_register_block_type(array(
			'name' => 'education-referral-form',
			'title' => __('Education Referral Form'),
			'description' => __('Complete education referral form with file uploads and email notifications'),
			'render_template' => 'template-parts/blocks/educationReferral/education-referral-form.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'forms',
			'keywords' => array('Form', 'Referral', 'Education', 'Application'),
		));

		acf_register_block_type(array(
			'name' => 'thank-you-referral',
			'title' => __('Thank You Referral Page'),
			'description' => __('Thank you page for completed referral forms'),
			'render_template' => 'template-parts/blocks/educationReferral/thank-you-page.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'yes-alt',
			'keywords' => array('Thank You', 'Success', 'Referral'),
		));

		acf_register_block_type(array(
			'name' => 'immigration-referral-form',
			'title' => __('Immigration Referral Form'),
			'description' => __('Complete immigration referral form with file uploads, CAPTCHA, and email notifications'),
			'render_template' => 'template-parts/blocks/immigrationReferral/immigration-referral-form.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'flag',
			'keywords' => array('Form', 'Immigration', 'Referral', 'Application', 'Visa'),
		));

		acf_register_block_type(array(
			'name' => 'thank-you-immigration',
			'title' => __('Thank You Immigration Page'),
			'description' => __('Thank you page for completed immigration referral forms'),
			'render_template' => 'template-parts/blocks/immigrationReferral/thank-you-immigration.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'yes-alt',
			'keywords' => array('Thank You', 'Success', 'Immigration', 'Referral'),
		));



		acf_register_block_type(array(
			'name' => 'Login-block',
			'title' => __('Login Block'),
			'description' => __('A simple login block.'),
			'render_template' => 'template-parts/blocks/auth/login-block.php',
			'category' => 'formatting',
			'mode' => 'edit',
			'icon' => 'yes-alt',
			'keywords' => array('Login', 'Auth', 'User'),
		));
	}


}
