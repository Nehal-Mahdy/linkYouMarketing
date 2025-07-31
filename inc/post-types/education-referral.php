<?php
/**
 * Education Referral Post Type
 * 
 * Custom post type to store referral submissions
 */

// Register Education Referral Post Type
function register_education_referral_post_type() {
    $labels = array(
        'name'                  => 'Education Referrals',
        'singular_name'         => 'Education Referral',
        'menu_name'             => 'Referrals',
        'name_admin_bar'        => 'Referral',
        'archives'              => 'Referral Archives',
        'attributes'            => 'Referral Attributes',
        'parent_item_colon'     => 'Parent Referral:',
        'all_items'             => 'All Referrals',
        'add_new_item'          => 'Add New Referral',
        'add_new'               => 'Add New',
        'new_item'              => 'New Referral',
        'edit_item'             => 'Edit Referral',
        'update_item'           => 'Update Referral',
        'view_item'             => 'View Referral',
        'view_items'            => 'View Referrals',
        'search_items'          => 'Search Referrals',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into referral',
        'uploaded_to_this_item' => 'Uploaded to this referral',
        'items_list'            => 'Referrals list',
        'items_list_navigation' => 'Referrals list navigation',
        'filter_items_list'     => 'Filter referrals list',
    );

    $args = array(
        'label'                 => 'Education Referral',
        'description'           => 'Education referral submissions',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-forms',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'capabilities'          => array(
            'create_posts' => false, // Removes support for the "Add New" function
        ),
        'map_meta_cap'          => true,
    );

    register_post_type('education_referral', $args);
}
add_action('init', 'register_education_referral_post_type', 0);

// Add custom columns to the referrals list
function education_referral_custom_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['referral_email'] = 'Email';
    $new_columns['referral_program'] = 'Program';
    $new_columns['referral_start_date'] = 'Start Date';
    $new_columns['referral_whatsapp'] = 'WhatsApp';
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_education_referral_posts_columns', 'education_referral_custom_columns');

// Populate custom columns
function education_referral_custom_column_content($column, $post_id) {
    switch ($column) {
        case 'referral_email':
            echo get_post_meta($post_id, '_referral_email', true);
            break;
        case 'referral_program':
            echo get_post_meta($post_id, '_referral_program', true);
            break;
        case 'referral_start_date':
            $start_date = get_post_meta($post_id, '_referral_start_date', true);
            if ($start_date) {
                echo date('M j, Y', strtotime($start_date));
            }
            break;
        case 'referral_whatsapp':
            echo get_post_meta($post_id, '_referral_whatsapp', true);
            break;
    }
}
add_action('manage_education_referral_posts_custom_column', 'education_referral_custom_column_content', 10, 2);

// Make columns sortable
function education_referral_sortable_columns($columns) {
    $columns['referral_email'] = 'referral_email';
    $columns['referral_program'] = 'referral_program';
    $columns['referral_start_date'] = 'referral_start_date';
    
    return $columns;
}
add_filter('manage_edit-education_referral_sortable_columns', 'education_referral_sortable_columns');

// Add meta boxes for referral details
function education_referral_add_meta_boxes() {
    add_meta_box(
        'education_referral_details',
        'Referral Details',
        'education_referral_details_callback',
        'education_referral',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'education_referral_add_meta_boxes');

// Meta box callback function
function education_referral_details_callback($post) {
    $name = get_post_meta($post->ID, '_referral_name', true);
    $email = get_post_meta($post->ID, '_referral_email', true);
    $whatsapp = get_post_meta($post->ID, '_referral_whatsapp', true);
    $program = get_post_meta($post->ID, '_referral_program', true);
    $start_date = get_post_meta($post->ID, '_referral_start_date', true);
    $files = get_post_meta($post->ID, '_referral_files', true);
    $consent = get_post_meta($post->ID, '_referral_consent', true);
    $ip = get_post_meta($post->ID, '_referral_ip', true);
    $referral_date = get_post_meta($post->ID, '_referral_date', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label>Full Name</label></th>
            <td><?php echo esc_html($name); ?></td>
        </tr>
        <tr>
            <th><label>Email Address</label></th>
            <td><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></td>
        </tr>
        <tr>
            <th><label>WhatsApp Number</label></th>
            <td>
                <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $whatsapp)); ?>" target="_blank">
                    <?php echo esc_html($whatsapp); ?>
                </a>
            </td>
        </tr>
        <tr>
            <th><label>Program Interest</label></th>
            <td><?php echo esc_html($program); ?></td>
        </tr>
        <tr>
            <th><label>Preferred Start Date</label></th>
            <td><?php echo esc_html($start_date ? date('F j, Y', strtotime($start_date)) : 'Not specified'); ?></td>
        </tr>
        <tr>
            <th><label>Consent Given</label></th>
            <td><?php echo $consent ? 'Yes' : 'No'; ?></td>
        </tr>
        <tr>
            <th><label>Submission Date</label></th>
            <td><?php echo esc_html($referral_date ? date('F j, Y g:i A', strtotime($referral_date)) : 'Not available'); ?></td>
        </tr>
        <tr>
            <th><label>IP Address</label></th>
            <td><?php echo esc_html($ip); ?></td>
        </tr>
        <?php if (!empty($files) && is_array($files)): ?>
        <tr>
            <th><label>Uploaded Files</label></th>
            <td>
                <?php foreach ($files as $file): ?>
                    <div style="margin-bottom: 5px;">
                        <a href="<?php echo esc_url($file['url']); ?>" target="_blank">
                            <?php echo esc_html($file['name']); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </td>
        </tr>
        <?php endif; ?>
    </table>
    <?php
}
?>
