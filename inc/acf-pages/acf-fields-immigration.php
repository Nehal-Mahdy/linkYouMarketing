<?php
/**
 * ACF Fields for Immigration Block
 * 
 * This file registers all ACF fields for the Immigration Services block
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_immigration_block',
        'title' => 'Immigration Block',
        'fields' => array(
            // Hero Section
            array(
                'key' => 'field_immigration_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Immigration Services',
                'placeholder' => 'Enter hero title...',
            ),
            array(
                'key' => 'field_immigration_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'Your Pathway to a New Life',
                'placeholder' => 'Enter hero subtitle...',
            ),
            array(
                'key' => 'field_immigration_hero_description',
                'label' => 'Hero Description',
                'name' => 'hero_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Navigate the complex immigration process with confidence. Our licensed immigration consultants provide expert guidance for all visa types and immigration programs.',
                'placeholder' => 'Enter hero description...',
            ),
            array(
                'key' => 'field_immigration_hero_background_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            ),
            array(
                'key' => 'field_immigration_hero_cta_text',
                'label' => 'Hero CTA Button Text',
                'name' => 'hero_cta_text',
                'type' => 'text',
                'default_value' => 'Get Help Now',
            ),
            array(
                'key' => 'field_immigration_hero_cta_link',
                'label' => 'Hero CTA Button Link',
                'name' => 'hero_cta_link',
                'type' => 'url',
                'default_value' => '#immigration-form',
            ),
            
            // Immigration Options Section
            array(
                'key' => 'field_immigration_options_title',
                'label' => 'Options Section Title',
                'name' => 'options_title',
                'type' => 'text',
                'default_value' => 'Immigration Options',
            ),
            array(
                'key' => 'field_immigration_options_description',
                'label' => 'Options Section Description',
                'name' => 'options_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Explore various pathways to achieve your immigration goals. From skilled worker programs to family sponsorship, we help you find the right path.',
            ),
            array(
                'key' => 'field_immigration_options',
                'label' => 'Immigration Options',
                'name' => 'immigration_options',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Immigration Option',
                'sub_fields' => array(
                    array(
                        'key' => 'field_immigration_option_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_immigration_option_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_immigration_option_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_immigration_option_features',
                        'label' => 'Features',
                        'name' => 'features',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Feature',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_immigration_feature',
                                'label' => 'Feature',
                                'name' => 'feature',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_immigration_option_countries',
                        'label' => 'Countries',
                        'name' => 'countries',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Country',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_immigration_country',
                                'label' => 'Country',
                                'name' => 'country',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            
            // Licensed Partners Section
            array(
                'key' => 'field_immigration_partners_title',
                'label' => 'Partners Section Title',
                'name' => 'partners_title',
                'type' => 'text',
                'default_value' => 'Licensed Partners',
            ),
            array(
                'key' => 'field_immigration_partners_description',
                'label' => 'Partners Section Description',
                'name' => 'partners_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Work with certified immigration consultants and lawyers who are registered with official regulatory bodies.',
            ),
            array(
                'key' => 'field_immigration_licensed_partners',
                'label' => 'Licensed Partners',
                'name' => 'licensed_partners',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Partner',
                'sub_fields' => array(
                    array(
                        'key' => 'field_immigration_partner_name',
                        'label' => 'Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_immigration_partner_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_immigration_partner_specialization',
                        'label' => 'Specialization',
                        'name' => 'specialization',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_immigration_partner_experience',
                        'label' => 'Experience',
                        'name' => 'experience',
                        'type' => 'text',
                        'placeholder' => 'e.g., 10+ years',
                    ),
                    array(
                        'key' => 'field_immigration_partner_success_rate',
                        'label' => 'Success Rate',
                        'name' => 'success_rate',
                        'type' => 'text',
                        'placeholder' => 'e.g., 95%',
                    ),
                    array(
                        'key' => 'field_immigration_partner_credentials',
                        'label' => 'Credentials',
                        'name' => 'credentials',
                        'type' => 'text',
                        'placeholder' => 'e.g., RCIC, MARA, etc.',
                    ),
                    array(
                        'key' => 'field_immigration_partner_photo',
                        'label' => 'Photo',
                        'name' => 'photo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
            ),
            
            // Process Overview Section
            array(
                'key' => 'field_immigration_process_title',
                'label' => 'Process Section Title',
                'name' => 'process_title',
                'type' => 'text',
                'default_value' => 'Immigration Process - Step by Step',
            ),
            array(
                'key' => 'field_immigration_process_description',
                'label' => 'Process Section Description',
                'name' => 'process_description',
                'type' => 'textarea',
                'rows' => 3,
                'default_value' => 'Our streamlined process makes your immigration journey clear and manageable.',
            ),
            array(
                'key' => 'field_immigration_process_steps',
                'label' => 'Process Steps',
                'name' => 'process_steps',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Process Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_immigration_step_number',
                        'label' => 'Step Number',
                        'name' => 'step_number',
                        'type' => 'number',
                        'required' => 1,
                        'min' => 1,
                        'max' => 10,
                    ),
                    array(
                        'key' => 'field_immigration_step_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_immigration_step_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_immigration_step_duration',
                        'label' => 'Duration',
                        'name' => 'duration',
                        'type' => 'text',
                        'placeholder' => 'e.g., 2-4 weeks',
                    ),
                    array(
                        'key' => 'field_immigration_step_deliverables',
                        'label' => 'Deliverables',
                        'name' => 'deliverables',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Deliverable',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_immigration_deliverable',
                                'label' => 'Deliverable',
                                'name' => 'deliverable',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
            
            // Form Links
            array(
                'key' => 'field_immigration_form_link',
                'label' => 'Immigration Form Link',
                'name' => 'immigration_form_link',
                'type' => 'url',
                'default_value' => '#immigration-form',
                'instructions' => 'Link to your immigration contact form',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/immigration',
                ),
            ),
        ),
    ));
}

// Register Immigration Block
add_action('acf/init', 'register_immigration_services_block');
function register_immigration_services_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'immigration',
            'title'             => __('Immigration Services'),
            'description'       => __('Complete Immigration Services page with pathways, licensed partners, and step-by-step process'),
            'render_template'   => 'template-parts/blocks/immigration/immigration-block.php',
            'category'          => 'layout',
            'icon'              => 'admin-site-alt3',
            'keywords'          => array('immigration', 'visa', 'services', 'pathway', 'partners'),
            'mode'              => 'edit',
            'align'             => 'full',
            'supports'          => array(
                'mode' => false,
                'align' => array('full'),
            ),
        ));
    }
}
?>
