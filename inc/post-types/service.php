<?php

// Register Custom Post Type
function service_custom_post_type()
{

    $labels = array(
        'name'                  => __('Service', 'Post Type General Name', 'linkYouMarketing'),
        'singular_name'         => __('Service', 'Post Type Singular Name', 'linkYouMarketing'),
        'menu_name'             => __('Services', 'linkYouMarketing'),
        'name_admin_bar'        => __('Service', 'linkYouMarketing'),
        'archives'              => __('Item Archives', 'linkYouMarketing'),
        'attributes'            => __('Item Attributes', 'linkYouMarketing'),
        'parent_item_colon'     => __('Parent Item:', 'linkYouMarketing'),
        'all_items'             => __('All Items', 'linkYouMarketing'),
        'add_new_item'          => __('Add New Item', 'linkYouMarketing'),
        'add_new'               => __('Add New', 'linkYouMarketing'),
        'new_item'              => __('New Item', 'linkYouMarketing'),
        'edit_item'             => __('Edit Item', 'linkYouMarketing'),
        'update_item'           => __('Update Item', 'linkYouMarketing'),
        'view_item'             => __('View Item', 'linkYouMarketing'),
        'view_items'            => __('View Items', 'linkYouMarketing'),
        'search_items'          => __('Search Item', 'linkYouMarketing'),
        'not_found'             => __('Not found', 'linkYouMarketing'),
        'not_found_in_trash'    => __('Not found in Trash', 'linkYouMarketing'),
        'featured_image'        => __('Featured Image', 'linkYouMarketing'),
        'set_featured_image'    => __('Set featured image', 'linkYouMarketing'),
        'remove_featured_image' => __('Remove featured image', 'linkYouMarketing'),
        'use_featured_image'    => __('Use as featured image', 'linkYouMarketing'),
        'insert_into_item'      => __('Insert into item', 'linkYouMarketing'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'linkYouMarketing'),
        'items_list'            => __('Items list', 'linkYouMarketing'),
        'items_list_navigation' => __('Items list navigation', 'linkYouMarketing'),
        'filter_items_list'     => __('Filter items list', 'linkYouMarketing'),
    );
    $rewrite = array(
        'slug'                  => 'service',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __('Service', 'linkYouMarketing'),
        'description'           => __('Service Post Type', 'linkYouMarketing'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),

        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'          => true,
        'taxonomies'            => array('Categories', 'Tags'),
        'has_archive'           => true, // only this is required to enable archive page else 404 error will occur
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type('service', $args);
    register_taxonomy(
        'service-category',
        'service',
        array(
            'label' => 'Service Categories',
            'rewrite' => array('slug' => 'service-category'),
            'hierarchical' => true,
            'supports'       => array('title', 'editor', 'thumbnail', 'excerpt'),
        )
    );

    register_taxonomy(
        'service-tag',
        'service',
        array(
            'labels' => array(
                'name' => __('Service Tags', 'linkYouMarketing'),
                'edit_item' => __('Edit Tag'),
                'update_item' => __('Update Tag'),
                'add_new_item' => __('Add New Tag'),
                'new_item_name' => __('New Tag Name'),
                'add_or_remove_items' => __('Add or remove tags'),
                'choose_from_most_used' => __('Choose from the most used tags'),
                'menu_name' => __('Service Tags'),
            ),
            'rewrite' => array('slug' => 'service-tag'),
            'hierarchical' => true,
            'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        ),
    );
}
add_action('init', 'service_custom_post_type', 0);
