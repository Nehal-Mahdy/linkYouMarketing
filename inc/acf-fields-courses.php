<?php
/**
 * ACF Fields for Courses Preview Block
 */

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group(array(
        'key' => 'group_courses_preview',
        'title' => 'Courses Preview Block',
        'fields' => array(
            array(
                'key' => 'field_courses_page_title',
                'label' => 'Page Title',
                'name' => 'page_title',
                'type' => 'text',
                'instructions' => 'Enter the main heading for the courses page',
                'required' => 0,
                'default_value' => 'Explore Our Courses',
                'placeholder' => 'e.g. Discover Amazing Courses',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/courses-preview-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => 'Fields for the Courses Preview Block',
    ));
endif;
?>
