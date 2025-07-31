<?php
$title      = get_field( 'section_title' );
$heading    = get_field( 'heading' );
$subHeading = get_field( 'sub_heading' );
$services   = get_field( 'services' );

// Default content for services section
$default_title = $title ?: 'Our Services';
$default_heading = $heading ?: 'Comprehensive University Guidance';
$default_subheading = $subHeading ?: 'We provide end-to-end support to help you achieve your academic dreams and secure admission to top universities worldwide.';

// Default services if ACF fields are empty
$default_services = $services ?: [
    [
        'icon' => 'graduation-cap',
        'title' => 'University Selection',
        'description' => 'Expert guidance in choosing the perfect university that matches your academic goals, budget, and career aspirations.',
        'features' => ['Personalized Matching', 'Global University Database', 'Career-Focused Advice']
    ],
    [
        'icon' => 'file-text',
        'title' => 'Application Support',
        'description' => 'Complete assistance with application processes, documentation, and submission to ensure maximum success rates.',
        'features' => ['Document Preparation', 'Application Review', 'Deadline Management']
    ],
    [
        'icon' => 'award',
        'title' => 'Scholarship Assistance',
        'description' => 'Help you discover and apply for scholarships, grants, and financial aid opportunities to reduce study costs.',
        'features' => ['Scholarship Search', 'Application Writing', 'Financial Planning']
    ],
    [
        'icon' => 'globe',
        'title' => 'Visa & Immigration',
        'description' => 'Complete visa processing support and immigration guidance to ensure smooth transition to your chosen country.',
        'features' => ['Visa Documentation', 'Interview Preparation', 'Immigration Advice']
    ],
    [
        'icon' => 'users',
        'title' => 'Pre-Departure Support',
        'description' => 'Comprehensive preparation for your study abroad journey including accommodation and cultural orientation.',
        'features' => ['Accommodation Assistance', 'Cultural Orientation', 'Travel Planning']
    ],
    [
        'icon' => 'headphones',
        'title' => 'Ongoing Support',
        'description' => 'Continuous support throughout your academic journey with 24/7 assistance and regular check-ins.',
        'features' => ['24/7 Helpdesk', 'Academic Monitoring', 'Career Guidance']
    ]
];
?>

<section class="services-section bg-white relative py-20 lg:py-32 overflow-hidden" id="services">
    
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Geometric Background Pattern -->
        <div class="services-bg-pattern absolute inset-0 opacity-5"></div>
        
        <!-- Floating Decorative Shapes -->
        <div class="floating-shapes">
            <div class="shape-circle absolute top-20 right-10 w-20 h-20 bg-primary-100 rounded-full animate-float-slow"></div>
            <div class="shape-triangle absolute bottom-32 left-16 w-16 h-16 bg-secondary-100 transform rotate-45 animate-float-medium"></div>
            <div class="shape-square absolute top-1/2 right-1/4 w-12 h-12 bg-success-100 rounded-lg animate-float-fast"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 lg:mb-24">
            <!-- Section Badge -->
            <div class="services-badge opacity-0 animate-fade-up mb-6" style="animation-delay: 0.1s;">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-primary-50 border border-primary-100 text-primary-600 font-semibold text-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <?php echo esc_html($default_title); ?>
                </div>
            </div>

            <!-- Main Heading -->
            <h2 class="services-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                <?php echo esc_html($default_heading); ?>
            </h2>

            <!-- Subheading -->
            <p class="services-subheading text-lg sm:text-xl lg:text-2xl text-neutral-600 max-w-4xl mx-auto leading-relaxed opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                <?php echo esc_html($default_subheading); ?>
            </p>

            <!-- Decorative Underline -->
            <div class="services-underline mt-8 flex justify-center opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                <div class="w-24 h-1 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full"></div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="services-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <?php foreach ($default_services as $index => $service): ?>
                <div class="service-card group opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.5 + ($index * 0.1); ?>s;">
                    
                    <!-- Card Container -->
                    <div class="service-card-inner relative bg-white rounded-2xl shadow-lg border border-neutral-100 p-8 transition-all duration-500 hover:shadow-2xl hover:border-primary-200 hover:-translate-y-2">
                        
                        <!-- Icon Container -->
                        <div class="service-icon-container mb-6">
                            <div class="relative">
                                <!-- Icon Background -->
                                <div class="icon-bg w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                                    <?php echo get_service_icon($service['icon']); ?>
                                </div>
                                
                                <!-- Glow Effect -->
                                <div class="icon-glow absolute inset-0 w-16 h-16 bg-primary-400 rounded-xl opacity-0 group-hover:opacity-30 blur-xl transition-opacity duration-300"></div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="service-content">
                            <h3 class="service-title text-xl lg:text-2xl font-bold text-neutral-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">
                                <?php echo esc_html($service['title']); ?>
                            </h3>

                            <p class="service-description text-neutral-600 mb-6 leading-relaxed">
                                <?php echo esc_html($service['description']); ?>
                            </p>

                            <!-- Features List -->
                            <ul class="service-features space-y-2 mb-6">
                                <?php 
                                // Handle both ACF repeater format and default array format
                                if (is_array($service['features'])) {
                                    foreach ($service['features'] as $feature): 
                                        // Check if it's ACF repeater format (array with 'feature' key) or simple string
                                        $feature_text = is_array($feature) && isset($feature['feature']) ? $feature['feature'] : $feature;
                                ?>
                                    <li class="flex items-center text-sm text-neutral-700">
                                        <svg class="w-4 h-4 text-success-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <?php echo esc_html($feature_text); ?>
                                    </li>
                                <?php 
                                    endforeach; 
                                }
                                ?>
                            </ul>

                            <!-- Learn More Button -->
                            <div class="service-cta">
                                <a href="#contact" class="inline-flex items-center text-primary-600 font-semibold hover:text-primary-700 transition-colors duration-300 group-hover:translate-x-1">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Hover Overlay -->
                        <div class="card-overlay absolute inset-0 bg-gradient-to-br from-primary-500/5 to-secondary-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Call to Action -->
        <div class="services-cta text-center mt-16 lg:mt-24 opacity-0 animate-fade-up" style="animation-delay: 1.2s;">
            <h3 class="text-2xl lg:text-3xl font-bold text-neutral-900 mb-6">
                Ready to Start Your Academic Journey?
            </h3>
            <p class="text-lg text-neutral-600 mb-8 max-w-2xl mx-auto">
                Get personalized guidance from our expert counselors and take the first step towards your dream university.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#contact" class="cta-primary px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Get Free Consultation
                </a>
                
                <a href="#application" class="cta-secondary px-8 py-4 border-2 border-primary-500 text-primary-600 font-semibold rounded-xl hover:bg-primary-50 transition-all duration-300 flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Start Application
                </a>
            </div>
        </div>

    </div>
</section>

<?php
function get_service_icon($icon_name) {
    $icons = [
        'graduation-cap' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>',
        'file-text' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>',
        'award' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>',
        'globe' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>',
        'users' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>',
        'headphones' => '<svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/></svg>'
    ];
    
    return $icons[$icon_name] ?? $icons['graduation-cap'];
}
?>
