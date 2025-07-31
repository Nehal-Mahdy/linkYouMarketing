<?php
/**
 * Study in Canada Block Template
 * 
 * This template includes comprehensive fallback content for all ACF fields.
 * 
 * Sections Included:
 * - Hero Section: Banner with CTA
 * - Why Study in Canada: Benefits and advantages
 * - Partner Colleges: Featured educational institutions
 * - Process Overview: Step-by-step application guide
 * 
 * All sections include fallback data if ACF fields are empty.
 */

// Get ACF fields with fallback values
$hero_title = get_field('hero_title') ?: 'Study in Canada';
$hero_subtitle = get_field('hero_subtitle') ?: 'Your Gateway to World-Class Education';
$hero_description = get_field('hero_description') ?: 'Discover exceptional educational opportunities in one of the world\'s most welcoming countries. Start your journey to academic excellence and global career success.';
$hero_background_image = get_field('hero_background_image');
$hero_cta_text = get_field('hero_cta_text') ?: 'Apply Now';
$hero_cta_link = get_field('hero_cta_link') ?: '#education-form';

// Why Study Canada Section
$why_study_title = get_field('why_study_title') ?: 'Why Study in Canada?';
$why_study_description = get_field('why_study_description') ?: 'Canada offers an unparalleled combination of academic excellence, cultural diversity, and post-graduation opportunities that make it the ideal destination for international students.';
$why_study_benefits = get_field('why_study_benefits');

// Partner Colleges Section
$colleges_title = get_field('colleges_title') ?: 'Our Partner Colleges & Universities';
$colleges_description = get_field('colleges_description') ?: 'We work with top-ranked Canadian institutions to provide you with the best educational opportunities and seamless admission process.';
$partner_colleges = get_field('partner_colleges');

// Process Overview Section
$process_title = get_field('process_title') ?: 'Your Journey to Canada - Step by Step';
$process_description = get_field('process_description') ?: 'Our streamlined process makes your dream of studying in Canada a reality. Follow these simple steps to begin your educational journey.';
$process_steps = get_field('process_steps');

// Education Form Link
$education_form_link = get_field('education_form_link') ?: '#education-form';
?>

<div class="study-canada-page">
    
    <!-- Hero Section -->
    <section class="canada-hero relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <?php if ($hero_background_image): ?>
                <img src="<?php echo esc_url($hero_background_image['url']); ?>" 
                     alt="<?php echo esc_attr($hero_background_image['alt']); ?>"
                     class="w-full h-full object-cover">
            <?php else: ?>
                <!-- Default Canada-themed gradient background -->
                <div class="w-full h-full bg-gradient-to-br from-red-600 via-red-500 to-red-700"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-black/50"></div>
            
            <!-- Floating Canadian Elements -->
            <div class="absolute inset-0 opacity-20">
                <div class="maple-leaf absolute top-20 left-10 text-6xl animate-float" style="animation-delay: 0s;">🍁</div>
                <div class="maple-leaf absolute top-40 right-20 text-4xl animate-float" style="animation-delay: 2s;">🍁</div>
                <div class="maple-leaf absolute bottom-32 left-20 text-5xl animate-float" style="animation-delay: 4s;">🍁</div>
                <div class="maple-leaf absolute bottom-20 right-10 text-3xl animate-float" style="animation-delay: 1s;">🍁</div>
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
            <p class="text-lg lg:text-xl leading-relaxed max-w-3xl mx-auto mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                <?php echo esc_html($hero_description); ?>
            </p>

            <!-- CTA Button -->
            <div class="hero-cta opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                <a href="<?php echo esc_url($hero_cta_link); ?>" 
                   class="btn-primary bg-white text-red-600 hover:bg-red-50 px-12 py-6 rounded-full font-bold text-xl transition-all duration-300 hover:scale-105 shadow-2xl inline-flex items-center gap-3">
                    <?php echo esc_html($hero_cta_text); ?>
                    <span class="text-2xl">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Study in Canada Section -->
    <section class="why-study-canada py-20 lg:py-32 bg-gradient-to-br from-neutral-50 to-blue-50" id="why-study">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-neutral-900 mb-6">
                    <?php echo esc_html($why_study_title); ?>
                </h2>
                <p class="text-xl text-neutral-600 leading-relaxed">
                    <?php echo esc_html($why_study_description); ?>
                </p>
            </div>

            <?php if ($why_study_benefits && count($why_study_benefits) > 0): ?>
                <div class="benefits-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($why_study_benefits as $index => $benefit): ?>
                        <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.1 + ($index * 0.1); ?>s;">
                            <?php if ($benefit['icon']): ?>
                                <div class="benefit-icon w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                                    <img src="<?php echo esc_url($benefit['icon']['url']); ?>" alt="<?php echo esc_attr($benefit['icon']['alt']); ?>" class="w-8 h-8">
                                </div>
                            <?php else: ?>
                                <div class="benefit-icon w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                                    <span class="text-red-500 text-2xl">🎓</span>
                                </div>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold text-neutral-900 mb-4"><?php echo esc_html($benefit['title']); ?></h3>
                            <p class="text-neutral-600 leading-relaxed"><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Benefits -->
                <div class="benefits-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                        <div class="benefit-icon w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-red-500 text-2xl">🎓</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">World-Class Education</h3>
                        <p class="text-neutral-600 leading-relaxed">Access top-ranked universities and colleges with internationally recognized degrees and cutting-edge research facilities.</p>
                    </div>
                    
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                        <div class="benefit-icon w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-blue-500 text-2xl">🌍</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Multicultural Society</h3>
                        <p class="text-neutral-600 leading-relaxed">Experience diverse cultures and build global networks in one of the world's most welcoming and inclusive countries.</p>
                    </div>
                    
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="benefit-icon w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-green-500 text-2xl">💼</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Work Opportunities</h3>
                        <p class="text-neutral-600 leading-relaxed">Gain valuable work experience with post-graduation work permits and clear pathways to permanent residence.</p>
                    </div>
                    
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                        <div class="benefit-icon w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-purple-500 text-2xl">🏥</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Quality of Life</h3>
                        <p class="text-neutral-600 leading-relaxed">Enjoy excellent healthcare, safety, and quality of life in beautiful cities surrounded by stunning natural landscapes.</p>
                    </div>
                    
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                        <div class="benefit-icon w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-yellow-500 text-2xl">💡</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Innovation Hub</h3>
                        <p class="text-neutral-600 leading-relaxed">Be part of a thriving innovation ecosystem with opportunities in technology, research, and entrepreneurship.</p>
                    </div>
                    
                    <div class="benefit-card bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.6s;">
                        <div class="benefit-icon w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                            <span class="text-orange-500 text-2xl">💰</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Affordable Education</h3>
                        <p class="text-neutral-600 leading-relaxed">Receive world-class education at competitive tuition rates with numerous scholarship and funding opportunities.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Partner Colleges Section -->
    <section class="partner-colleges py-20 lg:py-32 bg-white" id="partner-colleges">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-neutral-900 mb-6">
                    <?php echo esc_html($colleges_title); ?>
                </h2>
                <p class="text-xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    <?php echo esc_html($colleges_description); ?>
                </p>
            </div>

            <?php if ($partner_colleges && count($partner_colleges) > 0): ?>
                <div class="colleges-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($partner_colleges as $index => $college): ?>
                        <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.1 + ($index * 0.1); ?>s;">
                            <?php if ($college['logo']): ?>
                                <div class="college-logo mb-6 h-20 flex items-center justify-center">
                                    <img src="<?php echo esc_url($college['logo']['url']); ?>" 
                                         alt="<?php echo esc_attr($college['logo']['alt']); ?>"
                                         class="max-h-full max-w-full object-contain">
                                </div>
                            <?php endif; ?>
                            
                            <h3 class="text-xl font-bold text-neutral-900 mb-3"><?php echo esc_html($college['name']); ?></h3>
                            <p class="text-neutral-600 mb-4 leading-relaxed"><?php echo esc_html($college['description']); ?></p>
                            
                            <?php if ($college['programs']): ?>
                                <div class="programs mb-4">
                                    <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($college['programs'] as $program): ?>
                                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm"><?php echo esc_html($program['program']); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($college['website']): ?>
                                <a href="<?php echo esc_url($college['website']); ?>" 
                                   target="_blank" 
                                   class="inline-flex items-center text-red-600 hover:text-red-700 font-semibold">
                                    Learn More <span class="ml-1">→</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Partner Colleges -->
                <div class="colleges-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-red-600 rounded-lg">
                            <span class="text-white font-bold text-2xl">UofT</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">University of Toronto</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Canada's top-ranked university offering world-class programs in medicine, engineering, business, and liberal arts.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Medicine</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Engineering</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Business</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-blue-600 rounded-lg">
                            <span class="text-white font-bold text-2xl">UBC</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">University of British Columbia</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Leading research university known for innovation in technology, sustainability, and global engagement.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Computer Science</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Forestry</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Commerce</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-green-600 rounded-lg">
                            <span class="text-white font-bold text-2xl">McGill</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">McGill University</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Prestigious bilingual university in Montreal, renowned for medicine, law, and international programs.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Medicine</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Law</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Management</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-purple-600 rounded-lg">
                            <span class="text-white font-bold text-2xl">Waterloo</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">University of Waterloo</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Canada's innovation university, famous for co-op programs, entrepreneurship, and technology leadership.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Engineering</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Computer Science</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Mathematics</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-orange-600 rounded-lg">
                            <span class="text-white font-bold text-2xl">McMaster</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">McMaster University</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Research-intensive university known for health sciences, engineering, and innovative teaching methods.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Health Sciences</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Engineering</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Business</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="college-card group bg-gradient-to-br from-neutral-50 to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 animate-fade-up" style="animation-delay: 0.6s;">
                        <div class="college-logo mb-6 h-20 flex items-center justify-center bg-red-700 rounded-lg">
                            <span class="text-white font-bold text-2xl">Calgary</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">University of Calgary</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Dynamic research university in Canada's energy capital, offering strong programs in energy, medicine, and business.</p>
                        <div class="programs mb-4">
                            <h4 class="font-semibold text-neutral-800 mb-2">Popular Programs:</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Engineering</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Medicine</span>
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Business</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Process Overview Section -->
    <section class="process-overview py-20 lg:py-32 bg-gradient-to-br from-red-50 to-red-100" id="process">
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
                <div class="process-steps max-w-4xl mx-auto">
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="step-item flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: <?php echo 0.1 + ($index * 0.1); ?>s;">
                            <div class="step-number flex-shrink-0 w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-xl mr-6">
                                <?php echo $index + 1; ?>
                            </div>
                            <div class="step-content flex-1">
                                <h3 class="text-2xl font-bold text-neutral-900 mb-4"><?php echo esc_html($step['title']); ?></h3>
                                <p class="text-lg text-neutral-600 mb-4 leading-relaxed"><?php echo esc_html($step['description']); ?></p>
                                
                                <?php if ($step['details']): ?>
                                    <ul class="text-neutral-600 space-y-2">
                                        <?php foreach ($step['details'] as $detail): ?>
                                            <li class="flex items-start">
                                                <span class="text-red-500 mr-2 mt-1">•</span>
                                                <span><?php echo esc_html($detail['detail']); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Default Process Steps -->
                <div class="process-steps max-w-4xl mx-auto">
                    <div class="step-item flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.1s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-xl mr-6">1</div>
                        <div class="step-content flex-1">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Free Consultation & Assessment</h3>
                            <p class="text-lg text-neutral-600 mb-4 leading-relaxed">Begin your journey with a comprehensive consultation where we assess your academic background, career goals, and preferences to recommend the best programs and institutions.</p>
                            <ul class="text-neutral-600 space-y-2">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Academic background evaluation</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Career goal assessment</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Program and university recommendations</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Budget and timeline planning</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="step-item flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-xl mr-6">2</div>
                        <div class="step-content flex-1">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Document Preparation & Application</h3>
                            <p class="text-lg text-neutral-600 mb-4 leading-relaxed">Our expert team guides you through gathering required documents and crafting compelling applications that showcase your strengths and potential.</p>
                            <ul class="text-neutral-600 space-y-2">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Academic transcripts and certificates</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>English proficiency test preparation</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Statement of purpose writing</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Letters of recommendation coordination</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="step-item flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-xl mr-6">3</div>
                        <div class="step-content flex-1">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Admission & Scholarship Support</h3>
                            <p class="text-lg text-neutral-600 mb-4 leading-relaxed">We submit your applications to selected institutions and help you explore scholarship opportunities to make your education more affordable.</p>
                            <ul class="text-neutral-600 space-y-2">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Application submission and tracking</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Scholarship research and applications</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Interview preparation and coaching</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Admission decision support</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="step-item flex items-start mb-12 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                        <div class="step-number flex-shrink-0 w-16 h-16 bg-red-500 text-white rounded-full flex items-center justify-center font-bold text-xl mr-6">4</div>
                        <div class="step-content flex-1">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Visa Processing & Pre-Departure</h3>
                            <p class="text-lg text-neutral-600 mb-4 leading-relaxed">Once accepted, we assist with your study permit application and provide comprehensive pre-departure support to ensure you're ready for life in Canada.</p>
                            <ul class="text-neutral-600 space-y-2">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Study permit application guidance</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Medical examination coordination</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Accommodation arrangement support</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-1">•</span>
                                    <span>Pre-departure orientation and guidance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Final CTA Section -->
            <div class="process-cta text-center mt-16">
                <div class="bg-white p-8 lg:p-12 rounded-2xl shadow-lg max-w-2xl mx-auto">
                    <h3 class="text-3xl font-bold text-neutral-900 mb-4">Ready to Begin Your Canadian Dream?</h3>
                    <p class="text-neutral-600 mb-8 text-lg">Take the first step towards your bright future in Canada. Our expert team is here to guide you every step of the way.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="<?php echo esc_url($education_form_link); ?>" 
                           class="btn-primary bg-red-500 hover:bg-red-600 text-white px-10 py-4 rounded-full font-bold text-lg transition-all duration-300 hover:scale-105 shadow-lg">
                            Apply Now - Free Consultation
                        </a>
                        <a href="tel:+1234567890" 
                           class="btn-secondary border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white px-10 py-4 rounded-full font-bold text-lg transition-all duration-300">
                            Call Us Today
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
