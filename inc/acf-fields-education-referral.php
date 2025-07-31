<?php
/**
 * ACF Fields for Education Referral Form and Thank You Page
 */

if (function_exists('acf_add_local_field_group')):

    // Education Referral Form Fields
    acf_add_local_field_group(array(
        'key' => 'group_education_referral_form',
        'title' => 'Education Referral Form Settings',
        'fields' => array(
            array(
                'key' => 'field_form_title',
                'label' => 'Form Title',
                'name' => 'form_title',
                'type' => 'text',
                'instructions' => 'Main heading for the referral form',
                'required' => 0,
                'default_value' => 'Education Referral Form',
                'placeholder' => 'e.g. Start Your Educational Journey',
            ),
            array(
                'key' => 'field_form_subtitle',
                'label' => 'Form Subtitle',
                'name' => 'form_subtitle',
                'type' => 'text',
                'instructions' => 'Subtitle text below the main heading',
                'required' => 0,
                'default_value' => 'Start your educational journey with us',
                'placeholder' => 'e.g. Your future starts here',
            ),
            array(
                'key' => 'field_form_description',
                'label' => 'Form Description',
                'name' => 'form_description',
                'type' => 'textarea',
                'instructions' => 'Description text explaining the form',
                'required' => 0,
                'rows' => 3,
                'default_value' => 'Fill out the form below and our education consultants will contact you within 24 hours.',
                'placeholder' => 'Enter a helpful description for users',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/education-referral-form',
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
        'description' => 'Settings for the Education Referral Form block',
    ));

    // Thank You Page Fields
    acf_add_local_field_group(array(
        'key' => 'group_thank_you_page',
        'title' => 'Thank You Page Settings',
        'fields' => array(
            array(
                'key' => 'field_thank_you_title',
                'label' => 'Thank You Title',
                'name' => 'thank_you_title',
                'type' => 'text',
                'instructions' => 'Main heading for the thank you page',
                'required' => 0,
                'default_value' => 'Thank You for Your Referral!',
                'placeholder' => 'e.g. Application Received Successfully!',
            ),
            array(
                'key' => 'field_thank_you_message',
                'label' => 'Thank You Message',
                'name' => 'thank_you_message',
                'type' => 'textarea',
                'instructions' => 'Main message on the thank you page',
                'required' => 0,
                'rows' => 3,
                'default_value' => 'Your education referral has been successfully submitted. Our team will review your application and contact you within 24 hours.',
                'placeholder' => 'Enter a thank you message',
            ),
            array(
                'key' => 'field_next_steps',
                'label' => 'Next Steps',
                'name' => 'next_steps',
                'type' => 'repeater',
                'instructions' => 'List of next steps in the process',
                'required' => 0,
                'collapsed' => '',
                'min' => 0,
                'max' => 10,
                'layout' => 'table',
                'button_label' => 'Add Step',
                'sub_fields' => array(
                    array(
                        'key' => 'field_step_description',
                        'label' => 'Step Description',
                        'name' => 'step_description',
                        'type' => 'textarea',
                        'instructions' => 'Description of this step',
                        'required' => 1,
                        'rows' => 2,
                        'placeholder' => 'e.g. Our team will review your application',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/thank-you-referral',
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
        'description' => 'Settings for the Thank You Page block',
    ));

endif;
?>
