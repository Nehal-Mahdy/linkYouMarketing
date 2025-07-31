<?php
// Contact Information
$phone = get_field('contact_phone') ?: '+1 (555) 123-4567';
$email = get_field('contact_email') ?: 'info@linkyouacademy.com';
$address = get_field('contact_address') ?: '123 Business Street, Milton, ON, Canada';
$working_hours = get_field('working_hours') ?: 'Mon - Fri: 9:00 AM - 6:00 PM';
$whatsapp_number = get_field('whatsapp_number') ?: '+15551234567';

// Social Media Links
$facebook_url = get_field('facebook_url') ?: '#';
$linkedin_url = get_field('linkedin_url') ?: '#';
$instagram_url = get_field('instagram_url') ?: '#';
$twitter_url = get_field('twitter_url') ?: '#';

// Handle form submission
$form_message = '';
$form_error = '';

if (isset($_POST['contact_submit']) && $_POST['contact_submit']) {
    $name = sanitize_text_field($_POST['contact_name']);
    $user_email = sanitize_email($_POST['contact_email']);
    $subject = sanitize_text_field($_POST['contact_subject']);
    $message = sanitize_textarea_field($_POST['contact_message']);

    if ($name && $user_email && $subject && $message) {
        $to = $email;
        $email_subject = "Contact Form: " . $subject;
        $email_body = "Name: $name\nEmail: $user_email\nSubject: $subject\n\nMessage:\n$message";
        $headers = array('Content-Type: text/html; charset=UTF-8', "From: $user_email");

        if (wp_mail($to, $email_subject, $email_body, $headers)) {
            $form_message = 'Thank you! Your message has been sent successfully.';
        } else {
            $form_error = 'Sorry, there was an error sending your message. Please try again.';
        }
    } else {
        $form_error = 'Please fill in all required fields.';
    }
}
?>

<!-- Contact Section with Animated Background -->
<section class="relative py-20 overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">

    <!-- Floating Background Objects -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Large floating circles -->
        <div
            class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-r from-cyan-400/20 to-blue-500/20 rounded-full animate-float-gentle">
        </div>
        <div
            class="absolute top-1/4 right-20 w-24 h-24 bg-gradient-to-r from-purple-400/25 to-pink-500/25 rounded-full animate-float-slow">
        </div>
        <div
            class="absolute bottom-20 left-1/4 w-40 h-40 bg-gradient-to-r from-green-400/15 to-teal-500/15 rounded-full animate-float-medium">
        </div>
        <div class="absolute bottom-10 right-10 w-28 h-28 bg-gradient-to-r from-yellow-400/20 to-orange-500/20 rounded-full animate-float-gentle"
            style="animation-delay: -2s;"></div>

        <!-- Small floating dots -->
        <div class="absolute top-1/3 left-1/3 w-4 h-4 bg-white/30 rounded-full animate-pulse-glow"
            style="animation-delay: -1s;"></div>
        <div class="absolute top-3/4 right-1/3 w-3 h-3 bg-cyan-400/40 rounded-full animate-pulse-glow"
            style="animation-delay: -3s;"></div>
        <div class="absolute top-1/2 left-3/4 w-5 h-5 bg-purple-400/30 rounded-full animate-pulse-glow"
            style="animation-delay: -4s;"></div>

        <!-- Geometric shapes -->
        <div class="absolute top-20 right-1/4 w-16 h-16 border-2 border-white/20 rotate-45 animate-float-slow"
            style="animation-delay: -1.5s;"></div>
        <div class="absolute bottom-1/4 left-20 w-12 h-12 border-2 border-cyan-400/30 rotate-12 animate-float-medium"
            style="animation-delay: -2.5s;"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-16 animate-fade-in-scale">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 animate-shimmer">
                Get In Touch
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Ready to transform your digital presence? Let's start a conversation about your project and explore how
                we can bring your vision to life.
            </p>
        </div>

        <!-- Main Contact Grid -->
        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- Contact Information Side -->
            <div class="space-y-8 animate-slide-in-left">

                <!-- Quick Contact Cards -->
                <div class="grid sm:grid-cols-2 gap-6">

                    <!-- WhatsApp Card -->
                    <a href="https://wa.me/<?php echo str_replace(['+', ' ', '-', '(', ')'], '', $whatsapp_number); ?>"
                        target="_blank"
                        class="contact-card-hover group bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center transition-all duration-500 hover:bg-white/20 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/25">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-green-500 rounded-full mb-4 whatsapp-pulse group-hover:animate-icon-bounce">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.487" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">WhatsApp</h3>
                        <p class="text-green-300 text-sm">Quick Response</p>
                        <p class="text-white/80 text-xs mt-2"><?php echo $phone; ?></p>
                    </a>

                    <!-- Email Card -->
                    <a href="mailto:<?php echo $email; ?>"
                        class="contact-card-hover group bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center transition-all duration-500 hover:bg-white/20 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/25">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 bg-blue-500 rounded-full mb-4 group-hover:animate-icon-bounce">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-white mb-2">Email</h3>
                        <p class="text-blue-300 text-sm">Professional</p>
                        <p class="text-white/80 text-xs mt-2"><?php echo $email; ?></p>
                    </a>

                </div>

                <!-- Contact Details -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 space-y-6">
                    <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>

                    <!-- Phone -->
                    <div class="flex items-center space-x-4 group cursor-pointer hover:text-cyan-300 transition-colors">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full flex items-center justify-center group-hover:animate-pulse-glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold"><?php echo $phone; ?></p>
                            <p class="text-gray-400 text-sm">Call us anytime</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div
                        class="flex items-center space-x-4 group cursor-pointer hover:text-purple-300 transition-colors">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center group-hover:animate-pulse-glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold"><?php echo $address; ?></p>
                            <p class="text-gray-400 text-sm">Visit our office</p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div
                        class="flex items-center space-x-4 group cursor-pointer hover:text-green-300 transition-colors">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center group-hover:animate-pulse-glow">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold"><?php echo $working_hours; ?></p>
                            <p class="text-gray-400 text-sm">We're available</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="text-center">
                    <h4 class="text-white font-semibold mb-4">Follow Us</h4>
                    <div class="flex justify-center space-x-6">
                        <!-- Facebook -->
                        <a href="<?php echo $facebook_url; ?>" target="_blank"
                            class="social-link-enhanced group relative overflow-hidden ">
                            <!-- Inner glow ring -->
                            <div
                                class="absolute inset-1 bg-gradient-to-br from-blue-300/30 via-transparent to-blue-300/10 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Icon -->
                            <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            <!-- Animated pulse ring -->
                            <div
                                class="absolute inset-0 rounded-full border-2 border-blue-300/60 animate-ping opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Tooltip -->
                            <span
                                class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Facebook</span>
                        </a>

                        <!-- LinkedIn -->
                        <a href="<?php echo $linkedin_url; ?>" target="_blank"
                            class="social-link-enhanced group relative overflow-hidden ">
                            <!-- Inner glow ring -->
                            <div
                                class="absolute inset-1 bg-gradient-to-br from-blue-400/30 via-transparent to-blue-400/10 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Icon -->
                            <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <!-- Animated pulse ring -->
                            <div
                                class="absolute inset-0 rounded-full border-2 border-blue-400/60 animate-ping opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Tooltip -->
                            <span
                                class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">LinkedIn</span>
                        </a>

                        <!-- Instagram -->
                        <a href="<?php echo $instagram_url; ?>" target="_blank"
                            class="social-link-enhanced group relative overflow-hidden ">
                            <!-- Inner glow ring -->
                            <div
                                class="absolute inset-1 bg-gradient-to-br from-pink-300/30 via-transparent to-purple-300/10 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Icon -->
                            <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.014 5.367 18.647.001 12.017.001zm-2.402 16.553c-1.297 0-2.448-.596-3.205-1.533-.751-.936-1.156-2.171-1.156-3.455 0-2.726 2.156-4.988 4.822-4.988 1.297 0 2.448.596 3.205 1.533.751.936 1.156 2.171 1.156 3.455 0 2.726-2.156 4.988-4.822 4.988zm8.718-8.745c-.325 0-.588-.263-.588-.588V5.813c0-.325.263-.588.588-.588h1.378c.325 0 .588.263.588.588v1.407c0 .325-.263.588-.588.588h-1.378z" />
                                <!-- Instagram camera icon overlay -->
                                <circle cx="12" cy="12" r="3.2" fill="none" stroke="currentColor" stroke-width="1.5" />
                                <circle cx="12" cy="12" r="1.4" fill="currentColor" />
                                <circle cx="17.5" cy="6.5" r="1.1" fill="currentColor" />
                                <rect x="6" y="6" width="12" height="12" rx="4" fill="none" stroke="currentColor"
                                    stroke-width="1.5" />
                            </svg>
                            <!-- Animated pulse ring -->
                            <div
                                class="absolute inset-0 rounded-full border-2 border-pink-300/60 animate-ping opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Tooltip -->
                            <span
                                class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Instagram</span>
                        </a>

                        <!-- Twitter/X -->
                        <a href="<?php echo $twitter_url; ?>" target="_blank"
                            class="social-link-enhanced group relative overflow-hidden ">
                            <!-- Inner glow ring -->
                            <div
                                class="absolute inset-1 bg-gradient-to-br from-sky-200/30 via-transparent to-sky-200/10 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Icon -->
                            <svg class="w-7 h-7 text-white relative z-10 drop-shadow-lg group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                            <!-- Animated pulse ring -->
                            <div
                                class="absolute inset-0 rounded-full border-2 border-sky-200/60 animate-ping opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                            <!-- Tooltip -->
                            <span
                                class="absolute -bottom-10 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Twitter</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Contact Form Side -->
            <div class="animate-slide-in-right">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-8 text-center">Send Us a Message</h3>

                    <!-- Form Messages -->
                    <?php if ($form_message): ?>
                        <div
                            class="mb-6 p-4 bg-green-500/20 border border-green-500/30 rounded-lg text-green-300 text-center animate-fade-in-scale">
                            <?php echo $form_message; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($form_error): ?>
                        <div
                            class="mb-6 p-4 bg-red-500/20 border border-red-500/30 rounded-lg text-red-300 text-center animate-fade-in-scale">
                            <?php echo $form_error; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Contact Form -->
                    <form method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="contact_name" class="block text-white text-sm font-semibold mb-2">Full Name
                                    *</label>
                                <input type="text" id="contact_name" name="contact_name" required
                                    class="form-input w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300 hover:bg-white/15"
                                    placeholder="Your full name">
                            </div>
                            <div>
                                <label for="contact_email" class="block text-white text-sm font-semibold mb-2">Email
                                    Address *</label>
                                <input type="email" id="contact_email" name="contact_email" required
                                    class="form-input w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300 hover:bg-white/15"
                                    placeholder="your@email.com">
                            </div>
                        </div>

                        <div>
                            <label for="contact_subject" class="block text-white text-sm font-semibold mb-2">Subject
                                *</label>
                            <input type="text" id="contact_subject" name="contact_subject" required
                                class="form-input w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300 hover:bg-white/15"
                                placeholder="What's this about?">
                        </div>

                        <div>
                            <label for="contact_message" class="block text-white text-sm font-semibold mb-2">Message
                                *</label>
                            <textarea id="contact_message" name="contact_message" required rows="5"
                                class="form-input w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-transparent transition-all duration-300 hover:bg-white/15 resize-none"
                                placeholder="Tell us about your project or inquiry..."></textarea>
                        </div>

                        <button type="submit" name="contact_submit"
                            class="w-full bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-cyan-500/25 focus:outline-none focus:ring-2 focus:ring-cyan-400 animate-pulse-glow">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2 animate-icon-bounce" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Send Message
                            </span>
                        </button>
                    </form>

                    <div class="mt-8 pt-6 border-t border-white/10 text-center">
                        <p class="text-gray-400 text-sm mb-4">Prefer instant communication?</p>
                        <div class="flex justify-center space-x-4">
                            <a href="https://wa.me/<?php echo str_replace(['+', ' ', '-', '(', ')'], '', $whatsapp_number); ?>"
                                target="_blank"
                                class="inline-flex items-center px-6 py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 whatsapp-pulse">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.487" />
                                </svg>
                                WhatsApp
                            </a>
                            <a href="mailto:<?php echo $email; ?>"
                                class="inline-flex items-center px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Email Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Social Link Styles */
    .social-link {
        @apply w-12 h-12 rounded-full flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110 hover:shadow-lg;
    }

    /* Form Input Enhancements */
    .form-input:focus {
        box-shadow: 0 0 0 3px rgba(34, 211, 238, 0.2);
    }

    .form-input::placeholder {
        transition: opacity 0.3s ease;
    }

    .form-input:focus::placeholder {
        opacity: 0.7;
    }
</style>