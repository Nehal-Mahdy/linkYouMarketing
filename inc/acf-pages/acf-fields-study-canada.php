<?php
/**
 * ACF Field Groups for Study in Canada Block
 * 
 * Register all ACF fields for the Study in Canada page sections
 */

// Register ACF fields for Study in Canada block
if (function_exists('acf_add_local_field_group')) {
    
    // Hero Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_study_canada_hero',
        'title' => 'Study Canada Hero Section',
        'fields' => array(
            array(
                'key' => 'field_study_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Study in Canada',
                'placeholder' => 'Enter hero title',
            ),
            array(
                'key' => 'field_study_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'Your Gateway to World-Class Education',
                'placeholder' => 'Enter hero subtitle',
            ),
            array(
                'key' => 'field_study_hero_description',
                'label' => 'Hero Description',
                'name' => 'hero_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Discover exceptional educational opportunities in one of the world\'s most welcoming countries. Start your journey to academic excellence and global career success.',
            ),
            array(
                'key' => 'field_study_hero_background_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_background_image',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
            ),
            array(
                'key' => 'field_study_hero_cta_text',
                'label' => 'CTA Button Text',
                'name' => 'hero_cta_text',
                'type' => 'text',
                'default_value' => 'Apply Now',
                'placeholder' => 'Enter CTA button text',
            ),
            array(
                'key' => 'field_study_hero_cta_link',
                'label' => 'CTA Button Link',
                'name' => 'hero_cta_link',
                'type' => 'url',
                'default_value' => '#education-form',
                'placeholder' => 'Enter CTA button link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/study-in-canada',
                ),
            ),
        ),
    ));

    // Why Study Canada Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_study_canada_why',
        'title' => 'Why Study Canada Section',
        'fields' => array(
            array(
                'key' => 'field_why_study_title',
                'label' => 'Section Title',
                'name' => 'why_study_title',
                'type' => 'text',
                'default_value' => 'Why Study in Canada?',
            ),
            array(
                'key' => 'field_why_study_description',
                'label' => 'Section Description',
                'name' => 'why_study_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Canada offers an unparalleled combination of academic excellence, cultural diversity, and post-graduation opportunities that make it the ideal destination for international students.',
            ),
            array(
                'key' => 'field_why_study_benefits',
                'label' => 'Benefits',
                'name' => 'why_study_benefits',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Benefit',
                'sub_fields' => array(
                    array(
                        'key' => 'field_benefit_icon',
                        'label' => 'Icon',
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                    ),
                    array(
                        'key' => 'field_benefit_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_benefit_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/study-in-canada',
                ),
            ),
        ),
    ));

    // Partner Colleges Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_study_canada_colleges',
        'title' => 'Partner Colleges Section',
        'fields' => array(
            array(
                'key' => 'field_colleges_title',
                'label' => 'Section Title',
                'name' => 'colleges_title',
                'type' => 'text',
                'default_value' => 'Our Partner Colleges & Universities',
            ),
            array(
                'key' => 'field_colleges_description',
                'label' => 'Section Description',
                'name' => 'colleges_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'We work with top-ranked Canadian institutions to provide you with the best educational opportunities and seamless admission process.',
            ),
            array(
                'key' => 'field_partner_colleges',
                'label' => 'Partner Colleges',
                'name' => 'partner_colleges',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add College',
                'sub_fields' => array(
                    array(
                        'key' => 'field_college_logo',
                        'label' => 'College Logo',
                        'name' => 'logo',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'thumbnail',
                    ),
                    array(
                        'key' => 'field_college_name',
                        'label' => 'College Name',
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_college_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_college_programs',
                        'label' => 'Popular Programs',
                        'name' => 'programs',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Program',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_program_name',
                                'label' => 'Program Name',
                                'name' => 'program',
                                'type' => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key' => 'field_college_website',
                        'label' => 'Website URL',
                        'name' => 'website',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/study-in-canada',
                ),
            ),
        ),
    ));

    // Process Overview Section Fields
    acf_add_local_field_group(array(
        'key' => 'group_study_canada_process',
        'title' => 'Process Overview Section',
        'fields' => array(
            array(
                'key' => 'field_process_title',
                'label' => 'Section Title',
                'name' => 'process_title',
                'type' => 'text',
                'default_value' => 'Your Journey to Canada - Step by Step',
            ),
            array(
                'key' => 'field_process_description',
                'label' => 'Section Description',
                'name' => 'process_description',
                'type' => 'textarea',
                'rows' => 4,
                'default_value' => 'Our streamlined process makes your dream of studying in Canada a reality. Follow these simple steps to begin your educational journey.',
            ),
            array(
                'key' => 'field_process_steps',
                'label' => 'Process Steps',
                'name' => 'process_steps',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_step_title',
                        'label' => 'Step Title',
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_step_description',
                        'label' => 'Step Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'rows' => 4,
                        'required' => 1,
                    ),
                    array(
                        'key' => 'field_step_details',
                        'label' => 'Step Details',
                        'name' => 'details',
                        'type' => 'repeater',
                        'layout' => 'table',
                        'button_label' => 'Add Detail',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_detail_text',
                                'label' => 'Detail',
                                'name' => 'detail',
                                'type' => 'text',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/study-in-canada',
                ),
            ),
        ),
    ));

    // Global Settings
    acf_add_local_field_group(array(
        'key' => 'group_study_canada_global',
        'title' => 'Global Settings',
        'fields' => array(
            array(
                'key' => 'field_education_form_link',
                'label' => 'Education Form Link',
                'name' => 'education_form_link',
                'type' => 'url',
                'default_value' => '#education-form',
                'instructions' => 'Link to your education application form',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/study-in-canada',
                ),
            ),
        ),
    ));
}

// Register the ACF Block
add_action('acf/init', 'register_study_in_canada_block');
function register_study_in_canada_block() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'study-in-canada',
            'title'             => __('Study in Canada'),
            'description'       => __('Complete Study in Canada page with hero, benefits, colleges, and process sections'),
            'render_template'   => 'template-parts/blocks/study-in-canada/study-in-canada-block.php',
            'category'          => 'layout',
            'icon'              => 'welcome-learn-more',
            'keywords'          => array('canada', 'study', 'education', 'university', 'college'),
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
