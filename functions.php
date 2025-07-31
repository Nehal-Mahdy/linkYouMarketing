<?php
/**
 * Bathe functions
 *
 * @package Bathe
 */

/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */


//Required Acf Blocks
require_once('acf-blocks.php');

//Required ACF Fields for About Us
require_once('inc/acf-pages/acf-fields-about-us.php');

//Required ACF Fields for Study in Canada
require_once('inc/acf-pages/acf-fields-study-canada.php');

//Required ACF Fields for Courses
require_once('inc/acf-fields-courses.php');

//Required ACF Fields for Education Referral
require_once('inc/acf-fields-education-referral.php');

//Education Referral Post Type
require_once('inc/post-types/education-referral.php');

//Required ACF Fields for Immigration Referral
require_once('inc/acf-fields-immigration-referral.php');

//Immigration Referral Post Type
require_once('inc/post-types/immigration-referral.php');

//Required ACF Fields for Immigration
require_once('inc/acf-pages/acf-fields-immigration.php');

//Required Walker Nav Menu Classes
require_once('includes/class-linkyou-walker-nav-menu.php');

add_action(
	'after_setup_theme',
	function () {
		load_theme_textdomain('bathe', get_theme_file_uri('languages'));

		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		// Hide admin bar for non-administrators
		if (!current_user_can('administrator')) {
			show_admin_bar(false);
		}
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);
		add_theme_support(
			'custom-background',
			apply_filters(
				'bathe_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 200,
				'width' => 50,
				'flex-width' => true,
				'flex-height' => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'bathe'),
			)
		);


	}
);

// Register Primary Menu Location
function linkyouacademy_register_menus()
{
	register_nav_menus(
		array(
			'primary' => __('Primary Menu', 'linkyouacademy'), // Custom menu location
		)
	);
}
add_action('after_setup_theme', 'linkyouacademy_register_menus');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action(
	'after_setup_theme',
	function () {
		$GLOBALS['content_width'] = apply_filters('bathe_content_width', 960);
	},
	0
);

/**
 * Register widget area.
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name' => __('Sidebar', 'bathe'),
				'id' => 'sidebar-1',
				'description' => '',
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
			)
		);
	}
);

/**
 * Enqueue scripts and styles.
 */

add_action(
	'wp_enqueue_scripts',
	function () {
		// Enqueue stylesheets
		wp_enqueue_style('bathe', get_theme_file_uri('assets/css/main.css'), array(), '3.0.1');
		wp_enqueue_style('tailwind', get_theme_file_uri('assets/css/tailwind.css'), array(), '3.3.2');

		// Enqueue the main script
		wp_enqueue_script('bathe', get_theme_file_uri('assets/js/main.js'), array(), '3.0.1', true);

		// Enqueue custom.js as a module
		wp_enqueue_script('custom-js', get_theme_file_uri('src/js/main.js'), array(), '1.0.0', true);

		// Ensure it's treated as a module
		wp_script_add_data('custom-js', 'type', 'module');

		// Pass home URL to the JS file
		wp_localize_script('custom-js', 'myThemeVars', array(
			'homeUrl' => home_url(),
		));
		// Enqueue external JS libraries (Flowbite, Swiper, AOS)
		wp_enqueue_script('flowbite', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.0/flowbite.min.js', array(), '2.1.0', true);
		wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
		wp_enqueue_script('aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '2.3.4', true);

		// Ensure comment-reply.js is loaded when needed for threaded comments
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
);


function linkyouacademy_enqueue_styles()
{
	wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', [], null);
}
add_action('wp_enqueue_scripts', 'linkyouacademy_enqueue_styles');

// Populate default values for About Us block Core Values
function populate_about_us_default_values($value, $post_id, $field)
{
	// Only populate if the field is empty and it's the about_values field
	if (empty($value) && $field['name'] == 'about_values') {
		$value = array(
			array(
				'value_icon' => 'shield-check',
				'value_title' => 'Integrity',
				'value_description' => 'We maintain the highest standards of honesty and transparency in all our interactions.',
			),
			array(
				'value_icon' => 'academic-cap',
				'value_title' => 'Excellence',
				'value_description' => 'We strive for excellence in every service we provide to ensure student success.',
			),
			array(
				'value_icon' => 'heart',
				'value_title' => 'Compassion',
				'value_description' => 'We understand the challenges of studying abroad and provide empathetic support.',
			),
			array(
				'value_icon' => 'globe',
				'value_title' => 'Global Perspective',
				'value_description' => 'We embrace diversity and promote cross-cultural understanding and learning.',
			),
		);
	}
	return $value;
}

// Separate Student Users from WordPress Admin Access
// Hide admin bar for non-administrators
add_action('wp_loaded', function () {
	if (!current_user_can('administrator')) {
		show_admin_bar(false);
	}
});

// Redirect non-admin users away from wp-admin (except for AJAX requests)
add_action('admin_init', function () {
	if (!current_user_can('administrator') && !wp_doing_ajax()) {
		wp_redirect(home_url());
		exit;
	}
});

// Remove admin bar for students completely
add_filter('show_admin_bar', function ($show) {
	if (!current_user_can('administrator')) {
		return false;
	}
	return $show;
});

// Hide unnecessary admin menu items for non-admin users (just in case they access admin)
add_action('admin_menu', function () {
	if (!current_user_can('administrator')) {
		// Remove menu pages that students shouldn't access
		remove_menu_page('index.php');          // Dashboard
		remove_menu_page('edit.php');           // Posts
		remove_menu_page('upload.php');         // Media
		remove_menu_page('edit.php?post_type=page'); // Pages
		remove_menu_page('edit-comments.php');  // Comments
		remove_menu_page('themes.php');         // Appearance
		remove_menu_page('plugins.php');        // Plugins
		remove_menu_page('users.php');          // Users
		remove_menu_page('tools.php');          // Tools
		remove_menu_page('options-general.php'); // Settings
	}
});
add_filter('acf/load_value/name=about_values', 'populate_about_us_default_values', 10, 3);

// Prevent logged-in users from accessing authentication pages
add_action('template_redirect', function () {
	if (is_user_logged_in()) {
		global $wp_query;

		// Get current URL path
		$current_url = $_SERVER['REQUEST_URI'];

		// Check if current page is an authentication page
		$auth_pages = array('/login/', '/register/', '/retrieve-password/');
		$is_auth_page = false;

		foreach ($auth_pages as $auth_page) {
			if (strpos($current_url, $auth_page) !== false) {
				$is_auth_page = true;
				break;
			}
		}

		// Also check by page slug
		if (!$is_auth_page && is_page()) {
			$page_slug = get_post_field('post_name', get_post());
			$auth_slugs = array('login', 'register', 'retrieve-password');
			if (in_array($page_slug, $auth_slugs)) {
				$is_auth_page = true;
			}
		}

		// Check for Tutor LMS login/register actions
		if (
			!$is_auth_page && (
				(isset($_GET['tutor_action']) && in_array($_GET['tutor_action'], array('login', 'register', 'retrieve-password'))) ||
				(isset($_POST['tutor_action']) && in_array($_POST['tutor_action'], array('login', 'register', 'retrieve-password')))
			)
		) {
			$is_auth_page = true;
		}

		// Redirect if on authentication page
		if ($is_auth_page) {
			wp_redirect(home_url('/dashboard/'));
			exit;
		}
	}
});

// Also handle login page redirects specifically
add_action('login_init', function () {
	if (is_user_logged_in() && !isset($_GET['action']) || (isset($_GET['action']) && $_GET['action'] === 'login')) {
		wp_redirect(home_url('/dashboard/'));
		exit;
	}
});
