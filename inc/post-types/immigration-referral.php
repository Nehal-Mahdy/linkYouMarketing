<?php
/**
 * Immigration Referral Post Type
 * 
 * Custom post type to store immigration referral submissions
 */

// Register Immigration Referral Post Type
function register_immigration_referral_post_type()
{
    $labels = array(
        'name' => 'Immigration Referrals',
        'singular_name' => 'Immigration Referral',
        'menu_name' => 'Immigration Referrals',
        'name_admin_bar' => 'Immigration Referral',
        'archives' => 'Immigration Referral Archives',
        'attributes' => 'Immigration Referral Attributes',
        'parent_item_colon' => 'Parent Immigration Referral:',
        'all_items' => 'All Immigration Referrals',
        'add_new_item' => 'Add New Immigration Referral',
        'add_new' => 'Add New',
        'new_item' => 'New Immigration Referral',
        'edit_item' => 'Edit Immigration Referral',
        'update_item' => 'Update Immigration Referral',
        'view_item' => 'View Immigration Referral',
        'view_items' => 'View Immigration Referrals',
        'search_items' => 'Search Immigration Referrals',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into immigration referral',
        'uploaded_to_this_item' => 'Uploaded to this immigration referral',
        'items_list' => 'Immigration referrals list',
        'items_list_navigation' => 'Immigration referrals list navigation',
        'filter_items_list' => 'Filter immigration referrals list',
    );

    $args = array(
        'label' => 'Immigration Referral',
        'description' => 'Immigration referral submissions',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'custom-fields'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-flag',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => false,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => false,
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false, // Removes support for the "Add New" function
        ),
        'map_meta_cap' => true,
    );

    register_post_type('immigration_referral', $args);
}
add_action('init', 'register_immigration_referral_post_type', 0);

// Add custom columns to admin list
function immigration_referral_admin_columns($columns)
{
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = __('Applicant Name');
    $new_columns['email'] = __('Email');
    $new_columns['phone'] = __('Phone/WhatsApp');
    $new_columns['immigration_type'] = __('Immigration Type');
    $new_columns['target_country'] = __('Target Country');
    $new_columns['current_status'] = __('Current Status');
    $new_columns['submission_date'] = __('Submission Date');
    $new_columns['status'] = __('Application Status');

    return $new_columns;
}
add_filter('manage_immigration_referral_posts_columns', 'immigration_referral_admin_columns');

// Populate custom columns
function immigration_referral_admin_column_content($column, $post_id)
{
    switch ($column) {
        case 'email':
            echo get_post_meta($post_id, 'applicant_email', true);
            break;
        case 'phone':
            $phone = get_post_meta($post_id, 'applicant_phone', true);
            $whatsapp = get_post_meta($post_id, 'applicant_whatsapp', true);
            if ($phone)
                echo $phone;
            if ($whatsapp && $whatsapp !== $phone) {
                echo $phone ? '<br>WhatsApp: ' . $whatsapp : $whatsapp;
            }
            break;
        case 'immigration_type':
            echo get_post_meta($post_id, 'immigration_type', true);
            break;
        case 'target_country':
            echo get_post_meta($post_id, 'target_country', true);
            break;
        case 'current_status':
            echo get_post_meta($post_id, 'current_status', true);
            break;
        case 'submission_date':
            echo get_the_date('M j, Y g:i a', $post_id);
            break;
        case 'status':
            $status = get_post_meta($post_id, 'application_status', true);
            $status_class = '';
            switch ($status) {
                case 'pending':
                    $status_class = 'pending';
                    $status_text = 'Pending Review';
                    break;
                case 'in_progress':
                    $status_class = 'in-progress';
                    $status_text = 'In Progress';
                    break;
                case 'contacted':
                    $status_class = 'contacted';
                    $status_text = 'Contacted';
                    break;
                case 'completed':
                    $status_class = 'completed';
                    $status_text = 'Completed';
                    break;
                default:
                    $status_text = 'New';
                    $status_class = 'new';
            }
            echo '<span class="status-badge status-' . $status_class . '">' . $status_text . '</span>';
            break;
    }
}
add_action('manage_immigration_referral_posts_custom_column', 'immigration_referral_admin_column_content', 10, 2);

// Make columns sortable
function immigration_referral_sortable_columns($columns)
{
    $columns['email'] = 'email';
    $columns['immigration_type'] = 'immigration_type';
    $columns['target_country'] = 'target_country';
    $columns['current_status'] = 'current_status';
    $columns['submission_date'] = 'date';
    $columns['status'] = 'status';

    return $columns;
}
add_filter('manage_edit-immigration_referral_sortable_columns', 'immigration_referral_sortable_columns');

// Handle sorting
function immigration_referral_orderby($query)
{
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    $orderby = $query->get('orderby');

    if ('email' == $orderby) {
        $query->set('meta_key', 'applicant_email');
        $query->set('orderby', 'meta_value');
    } elseif ('immigration_type' == $orderby) {
        $query->set('meta_key', 'immigration_type');
        $query->set('orderby', 'meta_value');
    } elseif ('target_country' == $orderby) {
        $query->set('meta_key', 'target_country');
        $query->set('orderby', 'meta_value');
    } elseif ('current_status' == $orderby) {
        $query->set('meta_key', 'current_status');
        $query->set('orderby', 'meta_value');
    } elseif ('status' == $orderby) {
        $query->set('meta_key', 'application_status');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'immigration_referral_orderby');

// Add status filter dropdown
function immigration_referral_admin_filters()
{
    global $typenow;

    if ($typenow == 'immigration_referral') {
        $selected = isset($_GET['application_status']) ? $_GET['application_status'] : '';
        ?>
        <select name="application_status">
            <option value="">All Statuses</option>
            <option value="new" <?php selected($selected, 'new'); ?>>New</option>
            <option value="pending" <?php selected($selected, 'pending'); ?>>Pending Review</option>
            <option value="in_progress" <?php selected($selected, 'in_progress'); ?>>In Progress</option>
            <option value="contacted" <?php selected($selected, 'contacted'); ?>>Contacted</option>
            <option value="completed" <?php selected($selected, 'completed'); ?>>Completed</option>
        </select>
        <?php
    }
}
add_action('restrict_manage_posts', 'immigration_referral_admin_filters');

// Handle status filter
function immigration_referral_filter_query($query)
{
    global $pagenow;

    if (is_admin() && $pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'immigration_referral' && isset($_GET['application_status']) && $_GET['application_status'] != '') {
        $query->query_vars['meta_key'] = 'application_status';
        $query->query_vars['meta_value'] = $_GET['application_status'];
    }
}
add_filter('parse_query', 'immigration_referral_filter_query');

// Add custom CSS for status badges
function immigration_referral_admin_css()
{
    global $typenow;
    if ($typenow == 'immigration_referral') {
        ?>
        <style>
            .status-badge {
                padding: 4px 8px;
                border-radius: 3px;
                font-size: 11px;
                font-weight: bold;
                text-transform: uppercase;
            }

            .status-new {
                background: #f0f0f1;
                color: #646970;
            }

            .status-pending {
                background: #fff3cd;
                color: #856404;
            }

            .status-in-progress {
                background: #cce5ff;
                color: #0056b3;
            }

            .status-contacted {
                background: #d1ecf1;
                color: #0c5460;
            }

            .status-completed {
                background: #d4edda;
                color: #155724;
            }
        </style>
        <?php
    }
}
add_action('admin_head', 'immigration_referral_admin_css');

// Add meta boxes for detailed view
function immigration_referral_meta_boxes()
{
    add_meta_box(
        'immigration_referral_details',
        'Immigration Referral Details',
        'immigration_referral_details_callback',
        'immigration_referral',
        'normal',
        'high'
    );

    add_meta_box(
        'immigration_referral_documents',
        'Uploaded Documents',
        'immigration_referral_documents_callback',
        'immigration_referral',
        'side',
        'default'
    );

    add_meta_box(
        'immigration_referral_status',
        'Application Status',
        'immigration_referral_status_callback',
        'immigration_referral',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'immigration_referral_meta_boxes');

// Details meta box callback
function immigration_referral_details_callback($post)
{
    $details = get_post_meta($post->ID);
    ?>
    <table class="form-table">
        <tr>
            <th><label>Full Name:</label></th>
            <td><?php echo esc_html($details['applicant_name'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>Email:</label></th>
            <td><a
                    href="mailto:<?php echo esc_attr($details['applicant_email'][0] ?? ''); ?>"><?php echo esc_html($details['applicant_email'][0] ?? ''); ?></a>
            </td>
        </tr>
        <tr>
            <th><label>Phone:</label></th>
            <td><?php echo esc_html($details['applicant_phone'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>WhatsApp:</label></th>
            <td>
                <?php if (!empty($details['applicant_whatsapp'][0])): ?>
                    <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $details['applicant_whatsapp'][0])); ?>"
                        target="_blank">
                        <?php echo esc_html($details['applicant_whatsapp'][0]); ?>
                    </a>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th><label>Immigration Type:</label></th>
            <td><?php echo esc_html($details['immigration_type'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>Target Country:</label></th>
            <td><?php echo esc_html($details['target_country'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>Current Status:</label></th>
            <td><?php echo esc_html($details['current_status'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>Additional Information:</label></th>
            <td><?php echo wp_kses_post($details['additional_info'][0] ?? ''); ?></td>
        </tr>
        <tr>
            <th><label>Submission Date:</label></th>
            <td><?php echo get_the_date('F j, Y g:i a', $post->ID); ?></td>
        </tr>
        <tr>
            <th><label>Consent Given:</label></th>
            <td><?php echo !empty($details['consent_given'][0]) ? 'Yes' : 'No'; ?></td>
        </tr>
    </table>
    <?php
}

// Documents meta box callback
function immigration_referral_documents_callback($post)
{
    $documents = get_post_meta($post->ID, 'uploaded_documents', true);

    if (!empty($documents) && is_array($documents)) {
        echo '<ul>';
        foreach ($documents as $doc) {
            $file_url = wp_get_attachment_url($doc);
            $file_name = get_the_title($doc);
            echo '<li><a href="' . esc_url($file_url) . '" target="_blank">' . esc_html($file_name) . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No documents uploaded.</p>';
    }
}

// Status meta box callback
function immigration_referral_status_callback($post)
{
    $current_status = get_post_meta($post->ID, 'application_status', true) ?: 'new';
    wp_nonce_field('immigration_referral_status', 'immigration_referral_status_nonce');
    ?>
    <select name="application_status" style="width: 100%;">
        <option value="new" <?php selected($current_status, 'new'); ?>>New</option>
        <option value="pending" <?php selected($current_status, 'pending'); ?>>Pending Review</option>
        <option value="in_progress" <?php selected($current_status, 'in_progress'); ?>>In Progress</option>
        <option value="contacted" <?php selected($current_status, 'contacted'); ?>>Contacted</option>
        <option value="completed" <?php selected($current_status, 'completed'); ?>>Completed</option>
    </select>
    <p class="description">Update the application status as you process the referral.</p>
    <?php
}

// Save status meta box
function save_immigration_referral_status($post_id)
{
    if (!isset($_POST['immigration_referral_status_nonce']) || !wp_verify_nonce($_POST['immigration_referral_status_nonce'], 'immigration_referral_status')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['application_status'])) {
        update_post_meta($post_id, 'application_status', sanitize_text_field($_POST['application_status']));
    }
}
add_action('save_post_immigration_referral', 'save_immigration_referral_status');
?>