<?php
/**
 * Immigration Referral Form Block Template
 * 
 * Complete immigration referral form with file uploads, email notifications, and thank you page redirect
 */

// Get ACF fields with fallbacks
$form_title = get_field('form_title') ?: 'Immigration Referral Form';
$form_subtitle = get_field('form_subtitle') ?: 'Begin Your Journey to a New Country';
$form_description = get_field('form_description') ?: 'Our experienced immigration consultants are here to help you navigate the complex immigration process. Fill out this form to get personalized guidance for your immigration journey.';
$admin_email = get_field('admin_email') ?: 'immigration@linkyouacademy.com';
$thank_you_page = get_field('thank_you_page') ?: '/thank-you-immigration/';
$show_whatsapp = get_field('show_whatsapp') !== false ? get_field('show_whatsapp') : true;
$show_captcha = get_field('show_captcha') !== false ? get_field('show_captcha') : true;
$enable_file_upload = get_field('enable_file_upload') !== false ? get_field('enable_file_upload') : true;
$max_file_size = get_field('max_file_size') ?: 5;
$allowed_file_types = get_field('allowed_file_types') ?: ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
$button_text = get_field('button_text') ?: 'Submit Immigration Referral';
$form_background = get_field('form_background') ?: 'gradient';

// Handle form submission
$form_submitted = false;
$form_errors = [];
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['immigration_referral_submit'])) {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['immigration_referral_nonce'], 'immigration_referral_action')) {
        $form_errors[] = 'Security verification failed. Please try again.';
    } else {
        // Sanitize and validate form data
        $name = sanitize_text_field($_POST['applicant_name']);
        $email = sanitize_email($_POST['applicant_email']);
        $whatsapp = sanitize_text_field($_POST['whatsapp_number']);
        $immigration_type = sanitize_text_field($_POST['immigration_type']);
        $current_status = sanitize_text_field($_POST['current_status']);
        $target_country = sanitize_text_field($_POST['target_country']);
        $consent = isset($_POST['consent_checkbox']) ? 1 : 0;
        $additional_info = sanitize_textarea_field($_POST['additional_info']);
        
        // Simple CAPTCHA validation
        $captcha_answer = intval($_POST['captcha_answer']);
        $captcha_expected = intval($_POST['captcha_expected']);
        
        // Validation
        if (empty($name)) $form_errors[] = 'Name is required.';
        if (empty($email) || !is_email($email)) $form_errors[] = 'Valid email is required.';
        if ($show_whatsapp && empty($whatsapp)) $form_errors[] = 'WhatsApp number is required.';
        if (empty($immigration_type)) $form_errors[] = 'Immigration type selection is required.';
        if (empty($current_status)) $form_errors[] = 'Current status is required.';
        if (empty($target_country)) $form_errors[] = 'Target country is required.';
        if (!$consent) $form_errors[] = 'You must agree to the terms and conditions.';
        if ($show_captcha && $captcha_answer !== $captcha_expected) $form_errors[] = 'CAPTCHA verification failed. Please solve the math problem correctly.';
        
        // Handle file uploads
        $uploaded_files = [];
        if ($enable_file_upload && !empty($_FILES['documents']['name'][0])) {
            $max_file_size_bytes = $max_file_size * 1024 * 1024; // Convert MB to bytes
            
            for ($i = 0; $i < count($_FILES['documents']['name']); $i++) {
                if ($_FILES['documents']['error'][$i] === UPLOAD_ERR_OK) {
                    $file_name = $_FILES['documents']['name'][$i];
                    $file_size = $_FILES['documents']['size'][$i];
                    $file_tmp = $_FILES['documents']['tmp_name'][$i];
                    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                    
                    if (!in_array($file_ext, $allowed_file_types)) {
                        $allowed_types_str = implode(', ', array_map('strtoupper', $allowed_file_types));
                        $form_errors[] = "File '$file_name' has invalid type. Allowed: $allowed_types_str";
                        continue;
                    }
                    
                    if ($file_size > $max_file_size_bytes) {
                        $form_errors[] = "File '$file_name' is too large. Maximum {$max_file_size}MB allowed.";
                        continue;
                    }
                    
                    // Upload file
                    $upload_dir = wp_upload_dir();
                    $target_dir = $upload_dir['path'] . '/immigration-documents/';
                    if (!file_exists($target_dir)) {
                        wp_mkdir_p($target_dir);
                    }
                    
                    $unique_name = time() . '_' . $file_name;
                    $target_file = $target_dir . $unique_name;
                    
                    if (move_uploaded_file($file_tmp, $target_file)) {
                        $uploaded_files[] = [
                            'name' => $file_name,
                            'path' => $target_file,
                            'url' => $upload_dir['url'] . '/immigration-documents/' . $unique_name
                        ];
                    }
                }
            }
        }
        
        // If no errors, process the form
        if (empty($form_errors)) {
            // Save to database
            $referral_data = [
                'post_title' => 'Immigration Referral: ' . $name,
                'post_content' => $additional_info,
                'post_type' => 'immigration_referral',
                'post_status' => 'private',
                'meta_input' => [
                    '_referral_name' => $name,
                    '_referral_email' => $email,
                    '_referral_whatsapp' => $whatsapp,
                    '_referral_immigration_type' => $immigration_type,
                    '_referral_current_status' => $current_status,
                    '_referral_target_country' => $target_country,
                    '_referral_files' => $uploaded_files,
                    '_referral_consent' => $consent,
                    '_referral_ip' => $_SERVER['REMOTE_ADDR'],
                    '_referral_date' => current_time('mysql')
                ]
            ];
            
            $referral_id = wp_insert_post($referral_data);
            
            if ($referral_id) {
                // Send email notifications
                $notification_email = $admin_email; // Use ACF admin email
                
                // Email to admin
                $admin_subject = 'New Immigration Referral Submission - ' . $name;
                $admin_message = "
                <h2>New Immigration Referral Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>WhatsApp:</strong> $whatsapp</p>
                <p><strong>Immigration Type:</strong> $immigration_type</p>
                <p><strong>Current Status:</strong> $current_status</p>
                <p><strong>Target Country:</strong> $target_country</p>
                <p><strong>Additional Information:</strong><br>$additional_info</p>
                ";
                
                if (!empty($uploaded_files)) {
                    $admin_message .= "<p><strong>Uploaded Documents:</strong><br>";
                    foreach ($uploaded_files as $file) {
                        $admin_message .= "- " . $file['name'] . "<br>";
                    }
                    $admin_message .= "</p>";
                }
                
                $admin_headers = ['Content-Type: text/html; charset=UTF-8'];
                wp_mail($notification_email, $admin_subject, $admin_message, $admin_headers);
                
                // Email to applicant
                $applicant_subject = 'Thank you for your immigration referral - LinkYou Academy';
                $applicant_message = "
                <h2>Thank you for your interest!</h2>
                <p>Dear $name,</p>
                <p>Thank you for submitting your immigration referral form. We have received your application and our immigration consultants will review it shortly.</p>
                <p><strong>Your Application Details:</strong></p>
                <p><strong>Immigration Type:</strong> $immigration_type</p>
                <p><strong>Target Country:</strong> $target_country</p>
                <p>We will contact you within 24 hours via email or WhatsApp to discuss your immigration options and next steps.</p>
                <p>If you have any immediate questions, feel free to contact us at immigration@linkyouacademy.com</p>
                <p>Best regards,<br>LinkYou Academy Immigration Team</p>
                ";
                
                wp_mail($email, $applicant_subject, $applicant_message, $admin_headers);
                
                // Set success message and redirect flag
                $form_submitted = true;
                $success_message = 'Thank you! Your immigration referral has been submitted successfully. We will contact you within 24 hours.';
                
                // JavaScript redirect to thank you page
                echo "<script>
                    setTimeout(function() {
                        window.location.href = '" . home_url('/thank-you-immigration/') . "';
                    }, 3000);
                </script>";
            } else {
                $form_errors[] = 'There was an error submitting your form. Please try again.';
            }
        }
    }
}

// Available immigration types
$immigration_types = [
    'Express Entry (Federal Skilled Worker)',
    'Provincial Nominee Program (PNP)',
    'Quebec Immigration',
    'Family Class Sponsorship',
    'Caregiver Program',
    'Start-up Visa Program',
    'Self-employed Persons Program',
    'Investor/Entrepreneur Programs',
    'Work Permit',
    'Study Permit',
    'Visitor Visa',
    'Citizenship Application',
    'Other (Please specify in additional info)'
];

// Available countries
$target_countries = [
    'Canada',
    'United States',
    'United Kingdom',
    'Australia',
    'New Zealand',
    'Germany',
    'Other (Please specify in additional info)'
];

// Current status options
$status_options = [
    'In my home country',
    'Currently in Canada (Work Permit)',
    'Currently in Canada (Study Permit)',
    'Currently in Canada (Visitor)',
    'Currently in another country',
    'Permanent Resident seeking Citizenship',
    'Other (Please specify in additional info)'
];

// Generate simple CAPTCHA
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$captcha_question = "$num1 + $num2 = ?";
$captcha_answer = $num1 + $num2;
?>

<!-- Immigration Referral Form Page -->
<div class="immigration-referral-page relative min-h-screen bg-gray-50">
    
    <!-- Hero Section -->
    <section class="hero-section relative py-16 lg:py-24 bg-gradient-to-br from-primary-900 via-primary-800 to-blue-900 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 text-5xl animate-float">🌍</div>
            <div class="absolute top-20 right-20 text-4xl animate-float-slow">✈️</div>
            <div class="absolute bottom-20 left-20 text-3xl animate-float">🏡</div>
            <div class="absolute bottom-10 right-10 text-4xl animate-float-slow">🍁</div>
        </div>

        <div class="container mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-blue-200 to-orange-300 bg-clip-text text-transparent mb-6 animate-fade-in">
                    <?php echo esc_html($form_title); ?>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-4 opacity-0 animate-slide-up" style="animation-delay: 0.3s;">
                    <?php echo esc_html($form_subtitle); ?>
                </p>
                <p class="text-lg text-blue-200 opacity-0 animate-slide-up" style="animation-delay: 0.5s;">
                    <?php echo esc_html($form_description); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section py-16 lg:py-24">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                
                <?php if ($form_submitted && !empty($success_message)): ?>
                    <!-- Success Message -->
                    <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl mb-8 animate-fade-in">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-lg">Form Submitted Successfully!</h3>
                                <p><?php echo esc_html($success_message); ?></p>
                                <p class="text-sm mt-2">Redirecting to thank you page...</p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($form_errors)): ?>
                    <!-- Error Messages -->
                    <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl mb-8">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold text-lg">Please correct the following errors:</h3>
                                <ul class="mt-2 list-disc list-inside">
                                    <?php foreach ($form_errors as $error): ?>
                                        <li><?php echo esc_html($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Immigration Referral Form -->
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
                    <div class="bg-gradient-to-r from-primary-600 to-secondary-500 p-8 text-white">
                        <h2 class="text-2xl md:text-3xl font-bold mb-2">Ready to Start Your Immigration Journey?</h2>
                        <p class="text-blue-100">Complete this form and let us help you navigate the immigration process.</p>
                    </div>

                    <form method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
                        <?php wp_nonce_field('immigration_referral_action', 'immigration_referral_nonce'); ?>
                        
                        <!-- Personal Information Section -->
                        <div class="form-section">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Personal Information
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Name Field -->
                                <div class="form-group">
                                    <label for="applicant_name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Full Name *
                                    </label>
                                    <input type="text" 
                                           id="applicant_name" 
                                           name="applicant_name" 
                                           value="<?php echo isset($_POST['applicant_name']) ? esc_attr($_POST['applicant_name']) : ''; ?>"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="Enter your full name"
                                           required>
                                </div>

                                <!-- Email Field -->
                                <div class="form-group">
                                    <label for="applicant_email" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Email Address *
                                    </label>
                                    <input type="email" 
                                           id="applicant_email" 
                                           name="applicant_email" 
                                           value="<?php echo isset($_POST['applicant_email']) ? esc_attr($_POST['applicant_email']) : ''; ?>"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                           placeholder="your.email@example.com"
                                           required>
                                </div>
                            </div>

                            <?php if ($show_whatsapp): ?>
                            <!-- WhatsApp Field -->
                            <div class="form-group mt-6">
                                <label for="whatsapp_number" class="block text-sm font-semibold text-gray-700 mb-2">
                                    WhatsApp Number *
                                </label>
                                <input type="tel" 
                                       id="whatsapp_number" 
                                       name="whatsapp_number" 
                                       value="<?php echo isset($_POST['whatsapp_number']) ? esc_attr($_POST['whatsapp_number']) : ''; ?>"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                       placeholder="+1 (555) 123-4567"
                                       <?php echo $show_whatsapp ? 'required' : ''; ?>>
                                <p class="text-sm text-gray-500 mt-1">Include country code (e.g., +1 for Canada/US)</p>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Immigration Information Section -->
                        <div class="form-section">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Immigration Details
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Immigration Type -->
                                <div class="form-group">
                                    <label for="immigration_type" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Immigration Type *
                                    </label>
                                    <select id="immigration_type" 
                                            name="immigration_type" 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                            required>
                                        <option value="">Select immigration type</option>
                                        <?php foreach ($immigration_types as $type): ?>
                                            <option value="<?php echo esc_attr($type); ?>" 
                                                    <?php selected(isset($_POST['immigration_type']) ? $_POST['immigration_type'] : '', $type); ?>>
                                                <?php echo esc_html($type); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Target Country -->
                                <div class="form-group">
                                    <label for="target_country" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Target Country *
                                    </label>
                                    <select id="target_country" 
                                            name="target_country" 
                                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                            required>
                                        <option value="">Select target country</option>
                                        <?php foreach ($target_countries as $country): ?>
                                            <option value="<?php echo esc_attr($country); ?>" 
                                                    <?php selected(isset($_POST['target_country']) ? $_POST['target_country'] : '', $country); ?>>
                                                <?php echo esc_html($country); ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Current Status -->
                            <div class="form-group mt-6">
                                <label for="current_status" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Current Status *
                                </label>
                                <select id="current_status" 
                                        name="current_status" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                        required>
                                    <option value="">Select your current status</option>
                                    <?php foreach ($status_options as $status): ?>
                                        <option value="<?php echo esc_attr($status); ?>" 
                                                <?php selected(isset($_POST['current_status']) ? $_POST['current_status'] : '', $status); ?>>
                                            <?php echo esc_html($status); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <?php if ($enable_file_upload): ?>
                        <!-- Document Upload Section -->
                        <div class="form-section">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Upload Documents
                            </h3>
                            
                            <div class="form-group">
                                <label for="documents" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Supporting Documents (Optional)
                                </label>
                                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-green-400 transition-colors">
                                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="text-sm text-gray-600">
                                        <label for="documents" class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                            <span>Upload files</span>
                                            <input id="documents" name="documents[]" type="file" class="sr-only" multiple accept="<?php echo '.' . implode(',.', $allowed_file_types); ?>">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2"><?php echo strtoupper(implode(', ', $allowed_file_types)); ?> up to <?php echo $max_file_size; ?>MB each</p>
                                    <p class="text-xs text-gray-600 mt-1 font-medium">Passport, Language Test Results, Work Experience, etc.</p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Additional Information -->
                        <div class="form-section">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Additional Information
                            </h3>
                            
                            <div class="form-group">
                                <label for="additional_info" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Tell us more about your immigration goals and any questions you have
                                </label>
                                <textarea id="additional_info" 
                                          name="additional_info" 
                                          rows="4" 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                          placeholder="Share your immigration goals, timeline, specific concerns, or any other relevant information..."><?php echo isset($_POST['additional_info']) ? esc_textarea($_POST['additional_info']) : ''; ?></textarea>
                            </div>
                        </div>

                        <?php if ($show_captcha): ?>
                        <!-- CAPTCHA Section -->
                        <div class="form-section">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                                <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                Security Verification
                            </h3>
                            
                            <div class="form-group">
                                <label for="captcha_answer" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Please solve this math problem: <span class="font-bold text-green-600"><?php echo $captcha_question; ?></span> *
                                </label>
                                <input type="number" 
                                       id="captcha_answer" 
                                       name="captcha_answer" 
                                       class="w-full max-w-xs px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                       placeholder="Enter your answer"
                                       <?php echo $show_captcha ? 'required' : ''; ?>>
                                <input type="hidden" name="captcha_expected" value="<?php echo $captcha_answer; ?>">
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Consent Checkbox -->
                        <div class="form-section">
                            <div class="flex items-start">
                                <input type="checkbox" 
                                       id="consent_checkbox" 
                                       name="consent_checkbox" 
                                       class="mt-1 h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                                       required
                                       <?php checked(isset($_POST['consent_checkbox'])); ?>>
                                <label for="consent_checkbox" class="ml-3 text-sm text-gray-700">
                                    I agree to the <a href="/terms-and-conditions/" class="text-green-600 hover:text-green-500 font-semibold">Terms and Conditions</a> and <a href="/privacy-policy/" class="text-green-600 hover:text-green-500 font-semibold">Privacy Policy</a>. I consent to being contacted by LinkYou Academy regarding my immigration inquiry via email, phone, or WhatsApp. I understand that my information will be kept confidential and used solely for immigration consultation purposes. *
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-section pt-6 border-t border-gray-200">
                            <button type="submit" 
                                    name="immigration_referral_submit"
                                    class="w-full md:w-auto inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-600 via-primary-700 to-secondary-600 text-white text-lg font-semibold rounded-xl transition-all duration-300 hover:shadow-2xl hover:scale-105 transform focus:outline-none focus:ring-4 focus:ring-primary-500 focus:ring-opacity-50">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <?php echo esc_html($button_text); ?>
                            </button>
                            <p class="text-sm text-gray-500 mt-3">Our immigration consultants will contact you within 24 hours</p>
                        </div>
                    </form>
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

.animate-float {
    animation: float 4s ease-in-out infinite;
}

.animate-float-slow {
    animation: float-slow 6s ease-in-out infinite;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.form-group {
    transition: all 0.3s ease;
}

.form-section {
    border-radius: 1rem;
    transition: all 0.3s ease;
}

.form-section:hover {
    background-color: #f8fafc;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // File upload handling
    const fileInput = document.getElementById('documents');
    const uploadArea = fileInput.closest('.border-dashed');
    
    // Drag and drop functionality
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.classList.add('border-green-400', 'bg-green-50');
    });
    
    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.classList.remove('border-green-400', 'bg-green-50');
    });
    
    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.classList.remove('border-green-400', 'bg-green-50');
        fileInput.files = e.dataTransfer.files;
        updateFileDisplay();
    });
    
    fileInput.addEventListener('change', updateFileDisplay);
    
    function updateFileDisplay() {
        const files = fileInput.files;
        if (files.length > 0) {
            let fileText = files.length === 1 ? '1 file selected' : files.length + ' files selected';
            uploadArea.querySelector('p').textContent = fileText;
        }
    }
});
</script>
