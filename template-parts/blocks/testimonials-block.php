<?php
// Get testimonials data
$testimonials = get_field('testimonials');
$total_testimonials = $testimonials ? count($testimonials) : 0;
?>

<section class="testimonials-section bg-gradient-to-br from-neutral-50 to-primary-50 py-20  relative overflow-hidden" id="testimonials">
    
    <!-- Background Decorative Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Animated Background Pattern -->
        <div class="testimonials-bg-pattern absolute inset-0 opacity-30"></div>
        
        <!-- Quote Symbols Background -->
        <div class="quote-symbols absolute inset-0">
            <div class="quote-left absolute top-20 left-10 text-6xl text-primary-200 opacity-20">"</div>
            <div class="quote-right absolute bottom-20 right-10 text-6xl text-primary-200 opacity-20 transform rotate-180">"</div>
        </div>
        
        <!-- Floating Elements -->
        <div class="floating-elements absolute inset-0">
            <div class="floating-circle absolute top-32 right-20 w-20 h-20 bg-primary-300/20 rounded-full"></div>
            <div class="floating-circle absolute bottom-40 left-16 w-16 h-16 bg-secondary-300/20 rounded-full"></div>
        </div>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="text-center mb-16 lg:mb-24">
            <!-- Section Badge -->
            <div class="testimonials-badge opacity-0 animate-fade-up mb-6" style="animation-delay: 0.1s;">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/80 backdrop-blur-sm border border-primary-200 text-primary-700 font-semibold text-sm shadow-lg">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    Student Success Stories
                </div>
            </div>

            <!-- Main Heading -->
            <h2 class="testimonials-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 opacity-0 animate-fade-up" style="animation-delay: 0.2s;">
                What Our Students Say
            </h2>

            <!-- Subheading -->
            <p class="testimonials-subheading text-lg sm:text-xl lg:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                Discover how we've helped thousands of students achieve their academic dreams and secure placements at top universities worldwide
            </p>

            <!-- Stats Counter -->
            <div class="testimonials-stats grid grid-cols-3 gap-8 max-w-2xl mx-auto mt-12 opacity-0 animate-fade-up" style="animation-delay: 0.4s;">
                <div class="stat-item text-center">
                    <div class="stat-number text-3xl font-bold text-primary-600 mb-2" data-count="15000">0</div>
                    <div class="stat-label text-sm text-neutral-500 font-medium">Happy Students</div>
                </div>
                <div class="stat-item text-center">
                    <div class="stat-number text-3xl font-bold text-primary-600 mb-2" data-count="98">0</div>
                    <div class="stat-label text-sm text-neutral-500 font-medium">Success Rate %</div>
                </div>
                <div class="stat-item text-center">
                    <div class="stat-number text-3xl font-bold text-primary-600 mb-2" data-count="50">0</div>
                    <div class="stat-label text-sm text-neutral-500 font-medium">Countries</div>
                </div>
            </div>
        </div>

        <!-- Testimonials Content -->
        <div class="testimonials-content">
            <?php if ($testimonials && count($testimonials) > 0): ?>
                
                <?php if (count($testimonials) <= 3): ?>
                    <!-- Grid Layout for 1-3 testimonials -->
                    <div class="testimonials-grid max-w-6xl mx-auto">
                        <div class="grid grid-cols-1 <?php echo count($testimonials) == 2 ? 'md:grid-cols-2' : 'md:grid-cols-' . min(count($testimonials), 3); ?> gap-8">
                            <?php foreach ($testimonials as $index => $testimonial): ?>
                                <?php 
                                    $name = $testimonial['name'] ?: 'Anonymous Student';
                                    $position = $testimonial['position'] ?: 'Student';
                                    $company = $testimonial['company'] ?: 'University';
                                    $testimonial_text = $testimonial['testimonial'] ?: 'Amazing experience with LinkYou Academy!';
                                    $rating = isset($testimonial['rating']) ? intval($testimonial['rating']) : 5;
                                    $initials = substr($name, 0, 2);
                                    $delay = 0.5 + ($index * 0.1);
                                    
                                    $gradients = [
                                        'from-blue-500 to-indigo-600',
                                        'from-purple-500 to-pink-600',
                                        'from-green-500 to-emerald-600',
                                        'from-orange-500 to-red-600',
                                        'from-teal-500 to-cyan-600',
                                        'from-violet-500 to-purple-600'
                                    ];
                                    $gradient = $gradients[$index % count($gradients)];
                                ?>
                                <div class="testimonial-card group bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-white/50 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 relative overflow-hidden opacity-0 animate-fade-up" style="animation-delay: <?php echo $delay; ?>s;">
                                    <!-- Card Background Gradient -->
                                    <div class="absolute inset-0 bg-gradient-to-br from-white/90 to-primary-50/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                    
                                    <!-- Quote Icon -->
                                    <div class="quote-icon mb-6 relative z-10">
                                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 17.5 10z"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Rating Stars -->
                                    <div class="rating mb-4 relative z-10">
                                        <div class="flex items-center justify-center space-x-1">
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                <svg class="w-5 h-5 <?php echo $i < $rating ? 'text-yellow-400' : 'text-gray-300'; ?> transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                </svg>
                                            <?php endfor; ?>
                                        </div>
                                    </div>

                                    <!-- Testimonial Text -->
                                    <div class="testimonial-text mb-6 relative z-10">
                                        <p class="text-neutral-700 text-lg leading-relaxed italic">
                                            "<?php echo esc_html($testimonial_text); ?>"
                                        </p>
                                    </div>

                                    <!-- Author Info -->
                                    <div class="author-info flex items-center relative z-10">
                                        <div class="avatar-container mr-4">
                                            <div class="w-14 h-14 bg-gradient-to-r <?php echo $gradient; ?> rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                                <span class="text-white font-bold text-lg"><?php echo esc_html(strtoupper($initials)); ?></span>
                                            </div>
                                        </div>
                                        <div class="author-details">
                                            <h4 class="font-bold text-neutral-900 text-lg group-hover:text-primary-600 transition-colors duration-300">
                                                <?php echo esc_html($name); ?>
                                            </h4>
                                            <p class="text-neutral-600 text-sm"><?php echo esc_html($position); ?></p>
                                            <?php if ($company): ?>
                                                <p class="text-primary-600 text-sm font-medium"><?php echo esc_html($company); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                <?php else: ?>
                    <!-- Masonry/Carousel Layout for 4+ testimonials -->
                    <div class="testimonials-carousel-container max-w-7xl mx-auto">
                        <!-- Carousel Navigation -->
                        <div class="carousel-navigation flex justify-between items-center mb-8 opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                            <div class="carousel-info">
                                <span class="text-neutral-600 font-medium">Showing </span>
                                <span class="current-slide font-bold text-primary-600">1</span>
                                <span class="text-neutral-600 font-medium"> of </span>
                                <span class="total-slides font-bold text-primary-600"><?php echo ceil(count($testimonials) / 3); ?></span>
                            </div>
                            <div class="carousel-controls flex space-x-4">
                                <button class="carousel-btn carousel-prev group bg-white/80 backdrop-blur-sm shadow-lg rounded-full p-4 hover:bg-white hover:shadow-xl transition-all duration-300 border border-primary-100 disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5 text-neutral-600 group-hover:text-primary-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <button class="carousel-btn carousel-next group bg-white/80 backdrop-blur-sm shadow-lg rounded-full p-4 hover:bg-white hover:shadow-xl transition-all duration-300 border border-primary-100">
                                    <svg class="w-5 h-5 text-neutral-600 group-hover:text-primary-600 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <div class="testimonials-carousel relative overflow-hidden rounded-3xl opacity-0 animate-fade-up bg-white/20 backdrop-blur-sm border border-white/30 p-6" style="animation-delay: 0.6s;" data-total="<?php echo ceil(count($testimonials) / 3); ?>">
                            <div class="testimonials-track flex transition-transform duration-700 ease-in-out">
                                <?php 
                                $slides = array_chunk($testimonials, 3);
                                foreach ($slides as $slide_index => $slide_testimonials): 
                                ?>
                                    <div class="testimonial-slide flex-none w-full">
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                                            <?php foreach ($slide_testimonials as $index => $testimonial): ?>
                                                <?php 
                                                    $name = $testimonial['name'] ?: 'Anonymous Student';
                                                    $position = $testimonial['position'] ?: 'Student';
                                                    $company = $testimonial['company'] ?: 'University';
                                                    $testimonial_text = $testimonial['testimonial'] ?: 'Amazing experience with LinkYou Academy!';
                                                    $rating = isset($testimonial['rating']) ? intval($testimonial['rating']) : 5;
                                                    $initials = substr($name, 0, 2);
                                                    
                                                    $gradients = [
                                                        'from-blue-500 to-indigo-600',
                                                        'from-purple-500 to-pink-600',
                                                        'from-green-500 to-emerald-600',
                                                        'from-orange-500 to-red-600',
                                                        'from-teal-500 to-cyan-600',
                                                        'from-violet-500 to-purple-600'
                                                    ];
                                                    $global_index = ($slide_index * 3) + $index;
                                                    $gradient = $gradients[$global_index % count($gradients)];
                                                ?>
                                                <div class="testimonial-card group bg-white/80 backdrop-blur-sm p-6 lg:p-8 rounded-2xl border border-white/50 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                                                    <!-- Card Background Gradient -->
                                                    <div class="absolute inset-0 bg-gradient-to-br from-white/90 to-primary-50/30 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                                    
                                                    <!-- Quote Icon -->
                                                    <div class="quote-icon mb-4 relative z-10">
                                                        <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 17.5 10z"/>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <!-- Rating Stars -->
                                                    <div class="rating mb-4 relative z-10">
                                                        <div class="flex items-center space-x-1">
                                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                                                <svg class="w-4 h-4 <?php echo $i < $rating ? 'text-yellow-400' : 'text-gray-300'; ?> transition-all duration-300" fill="currentColor" viewBox="0 0 24 24">
                                                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                                </svg>
                                                            <?php endfor; ?>
                                                        </div>
                                                    </div>

                                                    <!-- Testimonial Text -->
                                                    <div class="testimonial-text mb-6 relative z-10">
                                                        <p class="text-neutral-700 text-base lg:text-lg leading-relaxed italic line-clamp-4">
                                                            "<?php echo esc_html($testimonial_text); ?>"
                                                        </p>
                                                    </div>

                                                    <!-- Author Info -->
                                                    <div class="author-info flex items-center relative z-10 mt-auto">
                                                        <div class="avatar-container mr-3">
                                                            <div class="w-12 h-12 bg-gradient-to-r <?php echo $gradient; ?> rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                                                <span class="text-white font-bold text-sm"><?php echo esc_html(strtoupper($initials)); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="author-details flex-1">
                                                            <h4 class="font-bold text-neutral-900 text-base group-hover:text-primary-600 transition-colors duration-300">
                                                                <?php echo esc_html($name); ?>
                                                            </h4>
                                                            <p class="text-neutral-600 text-sm"><?php echo esc_html($position); ?></p>
                                                            <?php if ($company): ?>
                                                                <p class="text-primary-600 text-xs font-medium"><?php echo esc_html($company); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators flex justify-center mt-8 space-x-3 opacity-0 animate-fade-up" style="animation-delay: 0.7s;">
                            <?php for ($i = 0; $i < ceil(count($testimonials) / 3); $i++): ?>
                                <button class="carousel-indicator w-3 h-3 rounded-full transition-all duration-300 <?php echo $i === 0 ? 'bg-primary-600 w-8' : 'bg-neutral-300 hover:bg-primary-400'; ?>" data-slide="<?php echo $i; ?>"></button>
                            <?php endfor; ?>
                        </div>
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <!-- Fallback content when no testimonials -->
                <div class="testimonials-fallback max-w-4xl mx-auto text-center">
                    <div class="bg-white/80 backdrop-blur-sm p-12 rounded-3xl border border-white/50 shadow-lg">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mx-auto mb-8">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 6.5 10zm11 0c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35l.539-.222.474-.197-.485-1.938-.597.144c-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.945-.33.358-.656.734-.909 1.162-.293.408-.492.856-.702 1.299-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539l.025.168.026-.006A4.5 4.5 0 1 0 17.5 10z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-neutral-900 mb-4">Ready to Share Your Success Story?</h3>
                        <p class="text-neutral-600 text-lg leading-relaxed">
                            Join thousands of students who have achieved their academic dreams with LinkYou Academy. 
                            Add your testimonials to see them featured here!
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>