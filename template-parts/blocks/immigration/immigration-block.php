<?php
/**
 * Immigration Services Block Template
 * 
 * This template includes comprehensive fallback content for all ACF fields.
 * 
 * Sections Included:
 * - Hero Section: Banner with CTA
 * - Immigration Options: Various pathways and programs
 * - Licensed Partners: Professional immigration consultants
 * - Process Overview: Step-by-step immigration guide
 * 
 * All sections include fallback data if ACF fields are empty.
 */

// Get ACF fields with fallback values
$hero_title = get_field('hero_title') ?: 'Immigration Services';
$hero_subtitle = get_field('hero_subtitle') ?: 'Your Pathway to a New Life';
$hero_description = get_field('hero_description') ?: 'Navigate the complex immigration process with confidence. Our licensed immigration consultants provide expert guidance for all visa types and immigration programs in Canada, USA, UK, Australia, and more.';
$hero_background_image = get_field('hero_background_image');
$hero_cta_text = get_field('hero_cta_text') ?: 'Get Help Now';
$hero_cta_link = get_field('hero_cta_link') ?: '#immigration-form';

// Immigration Options Section
$options_title = get_field('options_title') ?: 'Immigration Options';
$options_description = get_field('options_description') ?: 'Explore various pathways to achieve your immigration goals. From skilled worker programs to family sponsorship, we help you find the right path to your new home.';
$immigration_options = get_field('immigration_options');

// Licensed Partners Section
$partners_title = get_field('partners_title') ?: 'Licensed Partners';
$partners_description = get_field('partners_description') ?: 'Work with certified immigration consultants and lawyers who are registered with official regulatory bodies. Our partners have the expertise and credentials to guide you through your immigration journey.';
$licensed_partners = get_field('licensed_partners');

// Process Overview Section
$process_title = get_field('process_title') ?: 'Immigration Process - Step by Step';
$process_description = get_field('process_description') ?: 'Our streamlined process makes your immigration journey clear and manageable. Follow these steps with professional guidance to achieve your immigration goals.';
$process_steps = get_field('process_steps');

// Immigration Form Link
$immigration_form_link = get_field('immigration_form_link') ?: '#immigration-form';
?>

<div class="immigration-page">
    
    <!-- Hero Section -->
    <section class="immigration-hero relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <?php if ($hero_background_image): ?>
                <img src="<?php echo esc_url($hero_background_image['url']); ?>" 
                     alt="<?php echo esc_attr($hero_background_image['alt']); ?>"
                     class="w-full h-full object-cover">
            <?php else: ?>
                <!-- Default Immigration-themed gradient background -->
                <div class="w-full h-full bg-gradient-to-br from-blue-900 via-indigo-800 to-purple-900"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-black/40"></div>
            
            <!-- Floating Elements -->
            <div class="absolute inset-0 opacity-10">
                <div class="world-icon absolute top-20 left-10 text-6xl animate-float" style="animation-delay: 0s;">🌍</div>
                <div class="passport-icon absolute top-40 right-20 text-4xl animate-float" style="animation-delay: 2s;">📘</div>
                <div class="plane-icon absolute bottom-32 left-20 text-5xl animate-float" style="animation-delay: 4s;">✈️</div>
                <div class="home-icon absolute bottom-20 right-10 text-3xl animate-float" style="animation-delay: 1s;">🏠</div>
                <div class="flag-icon absolute top-1/2 left-1/4 text-4xl animate-float" style="animation-delay: 3s;">🌟</div>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center text-white px-6 lg:px-8 max-w-6xl mx-auto">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold mb-6 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-light mb-8 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                <?php echo esc_html($hero_subtitle); ?>
            </h2>
            <p class="text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                <?php echo esc_html($hero_description); ?>
            </p>

            <!-- CTA Buttons -->
            <div class="hero-cta opacity-0 animate-fade-up flex flex-col sm:flex-row gap-6 justify-center" style="animation-delay: 0.5s;">
                <a href="<?php echo esc_url($hero_cta_link); ?>" 
                   class="btn-primary bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white px-12 py-6 rounded-full font-bold text-xl transition-all duration-300 hover:scale-105 shadow-2xl inline-flex items-center gap-3">
                    <?php echo esc_html($hero_cta_text); ?>
                    <span class="text-2xl">→</span>
                </a>
                <button class="btn-secondary border-2 border-white/50 hover:border-white text-white hover:bg-white/10 px-12 py-6 rounded-full font-bold text-xl transition-all duration-300">
                    Free Assessment
                </button>
            </div>
        </div>
    </section>

    <!-- Immigration Options Section -->
    <section class="immigration-options py-20 lg:py-32 bg-gradient-to-br from-neutral-50 to-blue-50" id="immigration-options">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-neutral-900 mb-6">
                    <?php echo esc_html($options_title); ?>
                </h2>
                <p class="text-xl text-neutral-600 leading-relaxed">
                    <?php echo esc_html($options_description); ?>
                </p>
            </div>

            <?php if ($immigration_options && count($immigration_options) > 0): ?>
                <div class="options-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($immigration_options as $index => $option): ?>
                        <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.1 + ($index * 0.1); ?>s;">
                            <?php if ($option['icon']): ?>
                                <div class="option-icon w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                                    <img src="<?php echo esc_url($option['icon']['url']); ?>" alt="<?php echo esc_attr($option['icon']['alt']); ?>" class="w-8 h-8">
                                </div>
                            <?php else: ?>
                                <div class="option-icon w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                                    <span class="text-blue-500 text-2xl">🎯</span>
                                </div>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold text-neutral-900 mb-4"><?php echo esc_html($option['title']); ?></h3>
                            <p class="text-neutral-600 leading-relaxed mb-4"><?php echo esc_html($option['description']); ?></p>
                            
                            <?php if ($option['features']): ?>
                                <ul class="space-y-2 mb-4">
                                    <?php foreach ($option['features'] as $feature): ?>
                                        <li class="flex items-center text-sm text-neutral-600">
                                            <span class="text-green-500 mr-2">✓</span>
                                            <?php echo esc_html($feature['feature']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            
                            <?php if ($option['countries']): ?>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($option['countries'] as $country): ?>
                                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs"><?php echo esc_html($country['country']); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Immigration Options -->
                <div class="options-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                        <div class="option-icon w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-blue-500 text-2xl">🚀</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Express Entry System</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Fast-track immigration for skilled workers through Federal Skilled Worker, Canadian Experience Class, and Provincial Nominee Programs.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                6-8 months processing
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Points-based system
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Permanent residence
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                        </div>
                    </div>
                    
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                        <div class="option-icon w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-green-500 text-2xl">🌍</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Provincial Nominee Program</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Province-specific immigration programs designed to meet local economic needs and labor market demands.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Region-specific
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Job offer advantage
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Family-friendly
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Australia</span>
                        </div>
                    </div>
                    
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="option-icon w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-purple-500 text-2xl">🎓</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Student Visa to PR</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Study abroad and transition to permanent residence through post-graduation work permits and experience.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Study + work rights
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Pathway to PR
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Family inclusion
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Australia</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">UK</span>
                        </div>
                    </div>
                    
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                        <div class="option-icon w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-red-500 text-2xl">👨‍👩‍👧‍👦</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Family Sponsorship</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Reunite with family members through spouse, parent, child, or other eligible relative sponsorship programs.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Family reunification
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                No points required
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Multiple categories
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Australia</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">USA</span>
                        </div>
                    </div>
                    
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                        <div class="option-icon w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-yellow-500 text-2xl">💼</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Investment & Business</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Immigration opportunities for entrepreneurs, investors, and business owners looking to establish or invest.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Business opportunities
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Investment options
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Self-employment
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Australia</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">UK</span>
                        </div>
                    </div>
                    
                    <div class="option-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.6s;">
                        <div class="option-icon w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-indigo-500 text-2xl">⚙️</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Skilled Worker Programs</h3>
                        <p class="text-neutral-600 leading-relaxed mb-4">Occupation-specific immigration programs for skilled professionals in high-demand fields.</p>
                        <ul class="space-y-2 mb-4">
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Skills-based
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Fast processing
                            </li>
                            <li class="flex items-center text-sm text-neutral-600">
                                <span class="text-green-500 mr-2">✓</span>
                                Regional opportunities
                            </li>
                        </ul>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Australia</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">Canada</span>
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">New Zealand</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Licensed Partners Section -->
    <section class="licensed-partners py-20 lg:py-32 bg-white" id="licensed-partners">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-neutral-900 mb-6">
                    <?php echo esc_html($partners_title); ?>
                </h2>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($partners_description); ?>
                </p>
            </div>

            <?php if ($licensed_partners && count($licensed_partners) > 0): ?>
                <div class="partners-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($licensed_partners as $index => $partner): ?>
                        <div class="partner-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up text-center" style="animation-delay: <?php echo 0.1 + ($index * 0.1); ?>s;">
                            <?php if ($partner['photo']): ?>
                                <div class="partner-photo mb-4">
                                    <img src="<?php echo esc_url($partner['photo']['url']); ?>" 
                                         alt="<?php echo esc_attr($partner['photo']['alt']); ?>"
                                         class="w-20 h-20 rounded-full mx-auto object-cover">
                                </div>
                            <?php else: ?>
                                <div class="partner-avatar w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                                    <?php 
                                    $name_parts = explode(' ', $partner['name']);
                                    echo esc_html(substr($name_parts[0], 0, 1) . (isset($name_parts[1]) ? substr($name_parts[1], 0, 1) : ''));
                                    ?>
                                </div>
                            <?php endif; ?>
                            
                            <h3 class="text-lg font-bold text-neutral-900 mb-2"><?php echo esc_html($partner['name']); ?></h3>
                            <p class="text-sm text-blue-600 mb-3"><?php echo esc_html($partner['title']); ?></p>
                            <p class="text-xs text-neutral-600 mb-4"><?php echo esc_html($partner['specialization']); ?></p>
                            
                            <div class="credentials text-xs text-neutral-500 space-y-1">
                                <div><strong>Experience:</strong> <?php echo esc_html($partner['experience']); ?></div>
                                <div><strong>Success Rate:</strong> <span class="text-green-600"><?php echo esc_html($partner['success_rate']); ?></span></div>
                                <div class="pt-2 border-t border-neutral-200">
                                    <?php echo esc_html($partner['credentials']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Licensed Partners -->
                <div class="partners-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="partner-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up text-center" style="animation-delay: 0.1s;">
                        <div class="partner-avatar w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            SC
                        </div>
                        <h3 class="text-lg font-bold text-neutral-900 mb-2">Sarah Chen, RCIC</h3>
                        <p class="text-sm text-blue-600 mb-3">Regulated Canadian Immigration Consultant</p>
                        <p class="text-xs text-neutral-600 mb-4">Express Entry & Provincial Nominee Programs</p>
                        <div class="credentials text-xs text-neutral-500 space-y-1">
                            <div><strong>Experience:</strong> 12+ years</div>
                            <div><strong>Success Rate:</strong> <span class="text-green-600">96%</span></div>
                            <div class="pt-2 border-t border-neutral-200">
                                ICCRC Member #R123456
                            </div>
                        </div>
                    </div>
                    
                    <div class="partner-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up text-center" style="animation-delay: 0.2s;">
                        <div class="partner-avatar w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            MR
                        </div>
                        <h3 class="text-lg font-bold text-neutral-900 mb-2">Michael Rodriguez, MARA</h3>
                        <p class="text-sm text-green-600 mb-3">Migration Agent Registration Authority</p>
                        <p class="text-xs text-neutral-600 mb-4">Australian Immigration & Visa Services</p>
                        <div class="credentials text-xs text-neutral-500 space-y-1">
                            <div><strong>Experience:</strong> 15+ years</div>
                            <div><strong>Success Rate:</strong> <span class="text-green-600">94%</span></div>
                            <div class="pt-2 border-t border-neutral-200">
                                MARA Registration #987654
                            </div>
                        </div>
                    </div>
                    
                    <div class="partner-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up text-center" style="animation-delay: 0.3s;">
                        <div class="partner-avatar w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-red-500 to-pink-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            ET
                        </div>
                        <h3 class="text-lg font-bold text-neutral-900 mb-2">Dr. Emily Thompson, JD</h3>
                        <p class="text-sm text-red-600 mb-3">Immigration Attorney</p>
                        <p class="text-xs text-neutral-600 mb-4">US Immigration & Naturalization Law</p>
                        <div class="credentials text-xs text-neutral-500 space-y-1">
                            <div><strong>Experience:</strong> 18+ years</div>
                            <div><strong>Success Rate:</strong> <span class="text-green-600">92%</span></div>
                            <div class="pt-2 border-t border-neutral-200">
                                State Bar Licensed
                            </div>
                        </div>
                    </div>
                    
                    <div class="partner-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up text-center" style="animation-delay: 0.4s;">
                        <div class="partner-avatar w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            JW
                        </div>
                        <h3 class="text-lg font-bold text-neutral-900 mb-2">James Wilson, OISC</h3>
                        <p class="text-sm text-purple-600 mb-3">Office of Immigration Services Commissioner</p>
                        <p class="text-xs text-neutral-600 mb-4">UK Immigration & Settlement</p>
                        <div class="credentials text-xs text-neutral-500 space-y-1">
                            <div><strong>Experience:</strong> 10+ years</div>
                            <div><strong>Success Rate:</strong> <span class="text-green-600">95%</span></div>
                            <div class="pt-2 border-t border-neutral-200">
                                OISC Level 3 Advisor
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Process Overview Section -->
    <section class="process-overview py-20 lg:py-32 bg-gradient-to-br from-blue-50 to-indigo-50" id="process-overview">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-neutral-900 mb-6">
                    <?php echo esc_html($process_title); ?>
                </h2>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($process_description); ?>
                </p>
            </div>

            <?php if ($process_steps && count($process_steps) > 0): ?>
                <div class="process-timeline max-w-4xl mx-auto">
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="process-step flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.1 + ($index * 0.2); ?>s;">
                            <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                                <?php echo esc_html($step['step_number']); ?>
                            </div>
                            <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                                <h3 class="text-2xl font-bold text-neutral-900 mb-4"><?php echo esc_html($step['title']); ?></h3>
                                <p class="text-neutral-600 mb-4 leading-relaxed"><?php echo esc_html($step['description']); ?></p>
                                
                                <?php if ($step['duration']): ?>
                                    <div class="duration text-sm text-blue-600 mb-4">
                                        <strong>Duration:</strong> <?php echo esc_html($step['duration']); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($step['deliverables']): ?>
                                    <div class="deliverables">
                                        <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                            <?php foreach ($step['deliverables'] as $deliverable): ?>
                                                <li class="flex items-center text-sm text-neutral-600">
                                                    <span class="text-green-500 mr-2">✓</span>
                                                    <?php echo esc_html($deliverable['deliverable']); ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <?php if ($index < count($process_steps) - 1): ?>
                            <div class="step-connector flex justify-center mb-8">
                                <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600"></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Process Steps -->
                <div class="process-timeline max-w-4xl mx-auto">
                    <div class="process-step flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                            1
                        </div>
                        <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Initial Consultation</h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed">Free comprehensive assessment of your immigration eligibility and discussion of available pathways tailored to your specific situation.</p>
                            <div class="duration text-sm text-blue-600 mb-4">
                                <strong>Duration:</strong> 30-60 minutes
                            </div>
                            <div class="deliverables">
                                <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Eligibility assessment
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Program recommendations
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Timeline overview
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Next steps guidance
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step-connector flex justify-center mb-8">
                        <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600"></div>
                    </div>
                    
                    <div class="process-step flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                            2
                        </div>
                        <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Documentation & Preparation</h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed">Comprehensive document collection, verification, and application preparation with professional guidance throughout the process.</p>
                            <div class="duration text-sm text-blue-600 mb-4">
                                <strong>Duration:</strong> 2-6 weeks
                            </div>
                            <div class="deliverables">
                                <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Document checklist
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Application forms
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Supporting evidence
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Document verification
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step-connector flex justify-center mb-8">
                        <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600"></div>
                    </div>
                    
                    <div class="process-step flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                            3
                        </div>
                        <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Application Submission</h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed">Professional submission of your immigration application with all required documentation and proper formatting.</p>
                            <div class="duration text-sm text-blue-600 mb-4">
                                <strong>Duration:</strong> 1-2 weeks
                            </div>
                            <div class="deliverables">
                                <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Application submission
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Receipt confirmation
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        File number
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Status tracking setup
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step-connector flex justify-center mb-8">
                        <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600"></div>
                    </div>
                    
                    <div class="process-step flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.7s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                            4
                        </div>
                        <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Processing & Follow-up</h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed">Monitor application progress and respond to any additional requests from immigration authorities with expert guidance.</p>
                            <div class="duration text-sm text-blue-600 mb-4">
                                <strong>Duration:</strong> 3-12 months
                            </div>
                            <div class="deliverables">
                                <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Regular status updates
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Additional document requests
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Interview preparation
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Communication handling
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="step-connector flex justify-center mb-8">
                        <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-purple-600"></div>
                    </div>
                    
                    <div class="process-step flex items-start opacity-0 animate-fade-up" style="animation-delay: 0.9s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-8">
                            5
                        </div>
                        <div class="step-content flex-grow bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Decision & Next Steps</h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed">Receive immigration decision and comprehensive guidance on next steps including landing procedures and settlement support.</p>
                            <div class="duration text-sm text-green-600 mb-4">
                                <strong>Duration:</strong> Varies by program
                            </div>
                            <div class="deliverables">
                                <h4 class="font-semibold text-neutral-800 mb-2">Deliverables:</h4>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Decision notification
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Landing guidance
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Settlement support
                                    </li>
                                    <li class="flex items-center text-sm text-neutral-600">
                                        <span class="text-green-500 mr-2">✓</span>
                                        Welcome package
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta py-20 lg:py-32 bg-gradient-to-br from-blue-600 to-purple-700 text-white" id="get-help">
        <div class="container mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl font-bold mb-6 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                Ready to Start Your Immigration Journey?
            </h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto leading-relaxed opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                Get personalized guidance from our licensed immigration consultants. Start with a free assessment to explore your options.
            </p>
            
            <div class="cta-buttons flex flex-col sm:flex-row gap-6 justify-center mb-16 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                <a href="<?php echo esc_url($immigration_form_link); ?>" 
                   class="btn-primary bg-white text-blue-600 hover:bg-blue-50 px-12 py-6 rounded-full font-bold text-xl transition-all duration-300 hover:scale-105 shadow-2xl inline-flex items-center gap-3">
                    Get Help Now
                    <span class="text-2xl">→</span>
                </a>
                <button class="btn-secondary border-2 border-white/50 hover:border-white text-white hover:bg-white/10 px-12 py-6 rounded-full font-bold text-xl transition-all duration-300">
                    Schedule Consultation
                </button>
            </div>

            <!-- Trust Indicators -->
            <div class="trust-indicators grid grid-cols-1 md:grid-cols-3 gap-8 max-w-2xl mx-auto opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">98%</div>
                    <div class="text-blue-200">Success Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">5000+</div>
                    <div class="text-blue-200">Successful Cases</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold mb-2">15+</div>
                    <div class="text-blue-200">Years Experience</div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Immigration-specific animations */
@keyframes fade-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-up {
    animation: fade-up 0.8s ease-out forwards;
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .immigration-hero h1 {
        font-size: 2.5rem;
    }
    
    .immigration-hero h2 {
        font-size: 1.5rem;
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
    }
    
    .process-step .step-number {
        margin-right: 0;
        margin-bottom: 1rem;
    }
}
</style>
