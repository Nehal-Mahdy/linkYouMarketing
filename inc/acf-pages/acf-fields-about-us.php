<?php
/**
 * ACF Fields for About Us Page
 */

if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_about_us',
        'title' => 'About Us Content',
        'fields' => array(

            // Hero Section
            array(
                'key' => 'field_about_hero_title',
                'label' => 'Hero Title',
                'name' => 'about_hero_title',
                'type' => 'text',
                'default_value' => 'About LinkYou Academy',
                'placeholder' => 'Enter hero title',
            ),
            array(
                'key' => 'field_about_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'about_hero_subtitle',
                'type' => 'textarea',
                'default_value' => 'Empowering students to achieve their dreams through education and immigration guidance',
                'placeholder' => 'Enter hero subtitle',
                'rows' => 3,
            ),
            array(
                'key' => 'field_about_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'about_hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ),

            // Vision Section
            array(
                'key' => 'field_about_vision_title',
                'label' => 'Vision Title',
                'name' => 'about_vision_title',
                'type' => 'text',
                'default_value' => 'Our Vision',
                'placeholder' => 'Enter vision title',
            ),
            array(
                'key' => 'field_about_vision_content',
                'label' => 'Vision Statement',
                'name' => 'about_vision_content',
                'type' => 'wysiwyg',
                'default_value' => 'To be the leading bridge connecting students worldwide to quality education opportunities, fostering global citizenship and cross-cultural understanding.',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_about_vision_icon',
                'label' => 'Vision Icon',
                'name' => 'about_vision_icon',
                'type' => 'select',
                'choices' => array(
                    'eye' => 'Eye',
                    'telescope' => 'Telescope',
                    'target' => 'Target',
                    'star' => 'Star',
                    'lightbulb' => 'Lightbulb',
                ),
                'default_value' => 'eye',
            ),

            // Mission Section
            array(
                'key' => 'field_about_mission_title',
                'label' => 'Mission Title',
                'name' => 'about_mission_title',
                'type' => 'text',
                'default_value' => 'Our Mission',
                'placeholder' => 'Enter mission title',
            ),
            array(
                'key' => 'field_about_mission_content',
                'label' => 'Mission Statement',
                'name' => 'about_mission_content',
                'type' => 'wysiwyg',
                'default_value' => 'We provide comprehensive educational guidance and immigration support, helping students navigate their journey to study abroad with confidence and success.',
                'toolbar' => 'basic',
                'media_upload' => 0,
            ),
            array(
                'key' => 'field_about_mission_icon',
                'label' => 'Mission Icon',
                'name' => 'about_mission_icon',
                'type' => 'select',
                'choices' => array(
                    'flag' => 'Flag',
                    'compass' => 'Compass',
                    'rocket' => 'Rocket',
                    'heart' => 'Heart',
                    'users' => 'Users',
                ),
                'default_value' => 'compass',
            ),

            // Founder Story Section
            array(
                'key' => 'field_about_founder_title',
                'label' => 'Founder Section Title',
                'name' => 'about_founder_title',
                'type' => 'text',
                'default_value' => 'Founder\'s Story',
                'placeholder' => 'Enter founder section title',
            ),
            array(
                'key' => 'field_about_founder_name',
                'label' => 'Founder Name',
                'name' => 'about_founder_name',
                'type' => 'text',
                'default_value' => 'John Doe',
                'placeholder' => 'Enter founder name',
            ),
            array(
                'key' => 'field_about_founder_title_position',
                'label' => 'Founder Title/Position',
                'name' => 'about_founder_position',
                'type' => 'text',
                'default_value' => 'Founder & CEO',
                'placeholder' => 'Enter founder title/position',
            ),
            array(
                'key' => 'field_about_founder_story',
                'label' => 'Founder Story',
                'name' => 'about_founder_story',
                'type' => 'wysiwyg',
                'default_value' => 'Our founder\'s journey began as an international student who experienced the challenges of studying abroad firsthand. This personal experience sparked the vision to create LinkYou Academy - a platform dedicated to supporting students in their educational journey.',
                'toolbar' => 'full',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_about_founder_image',
                'label' => 'Founder Photo',
                'name' => 'about_founder_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_about_founder_quote',
                'label' => 'Founder Quote',
                'name' => 'about_founder_quote',
                'type' => 'textarea',
                'default_value' => '"Education is the passport to the future, for tomorrow belongs to those who prepare for it today."',
                'placeholder' => 'Enter inspirational quote',
                'rows' => 3,
            ),

            // Values Section
            array(
                'key' => 'field_about_values_title',
                'label' => 'Values Section Title',
                'name' => 'about_values_title',
                'type' => 'text',
                'default_value' => 'Our Core Values',
                'placeholder' => 'Enter values section title',
            ),
            array(
                'key' => 'field_about_values',
                'label' => 'Core Values',
                'name' => 'about_values',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_value_icon',
                        'label' => 'Value Icon',
                        'name' => 'value_icon',
                        'type' => 'select',
                        'choices' => array(
                            'shield-check' => 'Shield Check (Integrity)',
                            'academic-cap' => 'Academic Cap (Excellence)',
                            'heart' => 'Heart (Compassion)',
                            'lightbulb' => 'Lightbulb (Innovation)',
                            'users' => 'Users (Community)',
                            'globe' => 'Globe (Global Perspective)',
                        ),
                        'default_value' => 'shield-check',
                    ),
                    array(
                        'key' => 'field_value_title',
                        'label' => 'Value Title',
                        'name' => 'value_title',
                        'type' => 'text',
                        'default_value' => 'Integrity',
                        'placeholder' => 'Enter value title',
                    ),
                    array(
                        'key' => 'field_value_description',
                        'label' => 'Value Description',
                        'name' => 'value_description',
                        'type' => 'textarea',
                        'rows' => 3,
                        'default_value' => 'We maintain the highest standards of honesty and transparency in all our interactions.',
                        'placeholder' => 'Enter value description',
                    ),
                ),
                'min' => 0,
                'max' => 6,
                'layout' => 'table',
                'button_label' => 'Add Value',
            ),

            // Team Section
            array(
                'key' => 'field_about_team_title',
                'label' => 'Team Section Title',
                'name' => 'about_team_title',
                'type' => 'text',
                'default_value' => 'Meet Our Team',
                'placeholder' => 'Enter team section title',
            ),
            array(
                'key' => 'field_about_team_subtitle',
                'label' => 'Team Section Subtitle',
                'name' => 'about_team_subtitle',
                'type' => 'textarea',
                'default_value' => 'Our dedicated professionals are here to guide you every step of the way',
                'placeholder' => 'Enter team section subtitle',
                'rows' => 2,
            ),

            // CTA Section
            array(
                'key' => 'field_about_cta_title',
                'label' => 'CTA Title',
                'name' => 'about_cta_title',
                'type' => 'text',
                'default_value' => 'Ready to Start Your Journey?',
                'placeholder' => 'Enter CTA title',
            ),
            array(
                'key' => 'field_about_cta_description',
                'label' => 'CTA Description',
                'name' => 'about_cta_description',
                'type' => 'textarea',
                'default_value' => 'Join thousands of students who have successfully achieved their educational dreams with our guidance.',
                'placeholder' => 'Enter CTA description',
                'rows' => 2,
            ),
            array(
                'key' => 'field_about_cta_button_text',
                'label' => 'CTA Button Text',
                'name' => 'about_cta_button_text',
                'type' => 'text',
                'default_value' => 'Get Started Today',
                'placeholder' => 'Enter button text',
            ),
            array(
                'key' => 'field_about_cta_button_link',
                'label' => 'CTA Button Link',
                'name' => 'about_cta_button_link',
                'type' => 'url',
                'placeholder' => 'Enter button URL',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/about-us-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
    ));

endif;
?>