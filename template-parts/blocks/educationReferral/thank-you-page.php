<?php
/**
 * Thank You Page Template for Education Referral
 * 
 * Complete thank you page with next steps and contact information
 */

// Get ACF fields with fallbacks
$thank_you_title = get_field('thank_you_title') ?: 'Thank You for Your Referral!';
$thank_you_message = get_field('thank_you_message') ?: 'Your education referral has been successfully submitted. Our team will review your application and contact you within 24 hours.';
$next_steps = get_field('next_steps') ?: [
    'Our education consultants will review your application',
    'We will contact you within 24 hours via your preferred method',
    'Schedule a free consultation to discuss your options',
    'Receive personalized program recommendations',
    'Get assistance with the application process'
];
?>

<!-- Thank You Page -->
<div class="thank-you-page relative min-h-screen bg-gray-50">
    
    <!-- Hero Section -->
    <section class="hero-section relative py-20 lg:py-32 bg-gradient-to-br from-green-800 via-primary-800 to-blue-900 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 text-6xl animate-bounce">🎉</div>
            <div class="absolute top-20 right-20 text-5xl animate-float-slow">✅</div>
            <div class="absolute bottom-20 left-20 text-4xl animate-float">🎓</div>
            <div class="absolute bottom-10 right-10 text-5xl animate-float-slow">🌟</div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-8xl animate-pulse opacity-5">🚀</div>
        </div>

        <div class="container mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <!-- Success Icon -->
                <div class="inline-flex items-center justify-center w-24 h-24 bg-green-500 rounded-full mb-8 animate-scale-up">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-green-200 to-blue-300 bg-clip-text text-transparent mb-6 animate-fade-in">
                    <?php echo esc_html($thank_you_title); ?>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 opacity-0 animate-slide-up" style="animation-delay: 0.3s;">
                    <?php echo esc_html($thank_you_message); ?>
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.5s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">24hrs</div>
                        <div class="text-blue-200">Response Time</div>
                    </div>
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.7s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">Free</div>
                        <div class="text-blue-200">Consultation</div>
                    </div>
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.9s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">100%</div>
                        <div class="text-blue-200">Personalized</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Happens Next Section -->
    <section class="next-steps-section py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Happens Next?</h2>
                    <p class="text-xl text-gray-600">Here's what you can expect from our team</p>
                </div>

                <div class="space-y-8">
                    <?php 
                    $step_number = 1;
                    $default_steps = [
                        'Our education consultants will review your application carefully',
                        'We will contact you within 24 hours via email or WhatsApp',
                        'Schedule a free consultation to discuss your educational goals',
                        'Receive personalized program recommendations based on your profile',
                        'Get step-by-step assistance with the application process'
                    ];
                    
                    $steps_to_show = !empty($next_steps) ? $next_steps : $default_steps;
                    
                    foreach ($steps_to_show as $step): 
                    ?>
                        <div class="flex items-start space-x-6 p-6 bg-gray-50 rounded-2xl opacity-0 animate-slide-up" 
                             style="animation-delay: <?php echo 0.2 + ($step_number * 0.1); ?>s;">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-primary-500 to-secondary-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                <?php echo $step_number; ?>
                            </div>
                            <div class="flex-1">
                                <p class="text-lg text-gray-700 font-medium"><?php echo esc_html($step); ?></p>
                            </div>
                        </div>
                    <?php 
                        $step_number++;
                    endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section py-16 lg:py-24 bg-gray-100">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Need Immediate Assistance?</h2>
                    <p class="text-xl text-gray-600">Our team is here to help you every step of the way</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Email Contact -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center opacity-0 animate-fade-up" style="animation-delay: 0.3s;">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Email Us</h3>
                        <p class="text-gray-600 mb-4">Get detailed information via email</p>
                        <a href="mailto:info@linkyouacademy.com" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold">
                            info@linkyouacademy.com
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Phone Contact -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center opacity-0 animate-fade-up" style="animation-delay: 0.5s;">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Call Us</h3>
                        <p class="text-gray-600 mb-4">Speak directly with our consultants</p>
                        <a href="tel:+15551234567" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold">
                            +1 (555) 123-4567
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- WhatsApp Contact -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg text-center opacity-0 animate-fade-up" style="animation-delay: 0.7s;">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.109"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">WhatsApp</h3>
                        <p class="text-gray-600 mb-4">Quick chat and instant support</p>
                        <a href="https://wa.me/15551234567" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold">
                            Chat with us
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Actions Section -->
    <section class="actions-section py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Explore More While You Wait</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Browse Courses -->
                    <a href="/courses/" class="group bg-gradient-to-r from-primary-50 to-blue-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-200 transition-colors">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Browse Courses</h3>
                        <p class="text-gray-600 text-sm">Explore our comprehensive course catalog</p>
                    </a>

                    <!-- Read Success Stories -->
                    <a href="/success-stories/" class="group bg-gradient-to-r from-green-50 to-emerald-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-200 transition-colors">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Success Stories</h3>
                        <p class="text-gray-600 text-sm">Read about our students' achievements</p>
                    </a>

                    <!-- Learn About Services -->
                    <a href="/services/" class="group bg-gradient-to-r from-orange-50 to-yellow-50 p-8 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-orange-200 transition-colors">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Our Services</h3>
                        <p class="text-gray-600 text-sm">Discover all our educational services</p>
                    </a>
                </div>

                <!-- Return Home Button -->
                <div class="mt-12">
                    <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-600 via-primary-700 to-secondary-600 text-white text-lg font-semibold rounded-xl transition-all duration-300 hover:shadow-2xl hover:scale-105 transform">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Return to Home
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideUp {
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes scaleUp {
    from { opacity: 0; transform: scale(0.8); }
    to { opacity: 1; transform: scale(1); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

.animate-fade-in {
    animation: fadeIn 1s ease-out forwards;
}

.animate-slide-up {
    animation: slideUp 0.8s ease-out forwards;
}

.animate-fade-up {
    animation: fadeUp 0.6s ease-out forwards;
}

.animate-scale-up {
    animation: scaleUp 1s ease-out forwards;
}

.animate-float {
    animation: float 4s ease-in-out infinite;
}

.animate-float-slow {
    animation: float-slow 6s ease-in-out infinite;
}
</style>
