<?php
/**
 * Universities Block Template - Modern Redesign
 * 
 * Interactive display of study destinations organized by regions with enhanced UX
 */

// Get ACF fields with enhanced fallback values
$main_title = get_field('main_title') ?: 'Study Destinations Worldwide';
$main_subtitle = get_field('main_subtitle') ?: 'Choose from prestigious universities across three major study regions';

$usa_canada_title = get_field('usa_canada_title') ?: 'USA & CANADA';
$usa_canada_description = get_field('usa_canada_description') ?: 'Explore world-renowned universities and cutting-edge programs in North America.';
$usa_canada_universities = get_field('usa_canada_universities');

$uk_europe_title = get_field('uk_europe_title') ?: 'UK & EUROPE';
$uk_europe_description = get_field('uk_europe_description') ?: 'Discover centuries of academic excellence and innovative research opportunities.';
$uk_europe_universities = get_field('uk_europe_universities');

$australia_nz_title = get_field('australia_nz_title') ?: 'AUSTRALIA & NEW ZEALAND';
$australia_nz_description = get_field('australia_nz_description') ?: 'Experience high-quality education in stunning natural environments.';
$australia_nz_universities = get_field('australia_nz_universities');

// Enhanced fallback data with prestigious universities
$default_usa_canada_universities = [
    ['name' => 'Harvard University', 'location' => 'Massachusetts, USA', 'type' => 'Private Research University'],
    ['name' => 'Stanford University', 'location' => 'California, USA', 'type' => 'Private Research University'],
    ['name' => 'MIT', 'location' => 'Massachusetts, USA', 'type' => 'Private Research University'],
    ['name' => 'University of Toronto', 'location' => 'Ontario, Canada', 'type' => 'Public Research University'],
    ['name' => 'McGill University', 'location' => 'Quebec, Canada', 'type' => 'Public Research University'],
    ['name' => 'University of British Columbia', 'location' => 'British Columbia, Canada', 'type' => 'Public Research University'],
    ['name' => 'Yale University', 'location' => 'Connecticut, USA', 'type' => 'Private Research University'],
    ['name' => 'Princeton University', 'location' => 'New Jersey, USA', 'type' => 'Private Research University']
];

$default_uk_europe_universities = [
    ['name' => 'University of Oxford', 'location' => 'England, UK', 'type' => 'Collegiate Research University'],
    ['name' => 'University of Cambridge', 'location' => 'England, UK', 'type' => 'Collegiate Research University'],
    ['name' => 'Imperial College London', 'location' => 'London, UK', 'type' => 'Public Research University'],
    ['name' => 'University College London', 'location' => 'London, UK', 'type' => 'Public Research University'],
    ['name' => 'King\'s College London', 'location' => 'London, UK', 'type' => 'Public Research University'],
    ['name' => 'University of Edinburgh', 'location' => 'Scotland, UK', 'type' => 'Public Research University'],
    ['name' => 'ETH Zurich', 'location' => 'Switzerland', 'type' => 'Federal Institute of Technology'],
    ['name' => 'University of Amsterdam', 'location' => 'Netherlands', 'type' => 'Public Research University'],
    ['name' => 'Sorbonne University', 'location' => 'France', 'type' => 'Public Research University'],
    ['name' => 'Technical University Munich', 'location' => 'Germany', 'type' => 'Public Research University'],
    ['name' => 'KTH Royal Institute', 'location' => 'Sweden', 'type' => 'Public Technical University'],
    ['name' => 'Trinity College Dublin', 'location' => 'Ireland', 'type' => 'Public Research University']
];

$default_australia_nz_universities = [
    ['name' => 'University of Melbourne', 'location' => 'Victoria, Australia', 'type' => 'Public Research University'],
    ['name' => 'Australian National University', 'location' => 'Canberra, Australia', 'type' => 'Public Research University'],
    ['name' => 'University of Sydney', 'location' => 'NSW, Australia', 'type' => 'Public Research University'],
    ['name' => 'University of Queensland', 'location' => 'Queensland, Australia', 'type' => 'Public Research University'],
    ['name' => 'Monash University', 'location' => 'Victoria, Australia', 'type' => 'Public Research University'],
    ['name' => 'University of Auckland', 'location' => 'New Zealand', 'type' => 'Public Research University'],
    ['name' => 'Victoria University Wellington', 'location' => 'New Zealand', 'type' => 'Public Research University'],
    ['name' => 'University of Otago', 'location' => 'New Zealand', 'type' => 'Public Research University'],
    ['name' => 'UNSW Sydney', 'location' => 'NSW, Australia', 'type' => 'Public Research University'],
    ['name' => 'University of Canterbury', 'location' => 'New Zealand', 'type' => 'Public Research University']
];
?>

<div class="universities-block bg-gradient-to-br from-gray-900 via-gray-800 to-blue-900 text-white py-20 lg:py-32 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="4"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-32 h-32 bg-orange-500/10 rounded-full blur-xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-40 h-40 bg-blue-500/10 rounded-full blur-xl animate-pulse delay-1000"></div>
    
    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        
        <!-- Main Header Section -->
        <div class="text-center mb-20">
            <div class="inline-block mb-6">
                <span class="bg-gradient-to-r from-orange-500 to-blue-500 bg-clip-text text-transparent text-sm font-semibold tracking-wider uppercase">
                    Global Education Network
                </span>
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 bg-gradient-to-r from-white via-blue-200 to-orange-300 bg-clip-text text-transparent leading-tight">
                <?php echo esc_html($main_title); ?>
            </h1>
            <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto mb-8 leading-relaxed">
                <?php echo esc_html($main_subtitle); ?>
            </p>
            <div class="flex justify-center">
                <div class="w-32 h-1 bg-gradient-to-r from-orange-500 via-blue-500 to-green-500 rounded-full"></div>
            </div>
        </div>

        <!-- Regions Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            
            <!-- USA/Canada Region Card -->
            <div class="region-card group transform transition-all duration-700 hover:scale-105">
                <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 h-full border border-white/10 hover:border-red-500/50 transition-all duration-500 hover:shadow-2xl hover:shadow-red-500/20 relative overflow-hidden">
                    
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Region Header -->
                    <div class="text-center mb-8 relative z-10">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-red-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg group-hover:shadow-red-500/30 transition-shadow duration-500">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-white group-hover:text-red-300 transition-colors duration-300">
                            <?php echo esc_html($usa_canada_title); ?>
                        </h2>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            <?php echo esc_html($usa_canada_description); ?>
                        </p>
                        <div class="w-16 h-1 bg-gradient-to-r from-red-500 to-blue-600 mx-auto mb-6 rounded-full"></div>
                    </div>
                    
                    <!-- Universities List -->
                    <div class="space-y-3 max-h-80 overflow-y-auto custom-scrollbar relative z-10">
                        <?php if ($usa_canada_universities && count($usa_canada_universities) > 0): ?>
                            <?php foreach ($usa_canada_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-red-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-red-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-red-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <?php if (isset($university['location'])): ?>
                                        <p class="text-xs text-gray-400"><?php echo esc_html($university['location']); ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($university['type'])): ?>
                                        <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach ($default_usa_canada_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-red-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-red-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-red-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <p class="text-xs text-gray-400 mb-1"><?php echo esc_html($university['location']); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- UK/Europe Region Card -->
            <div class="region-card group transform transition-all duration-700 hover:scale-105">
                <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 h-full border border-white/10 hover:border-blue-500/50 transition-all duration-500 hover:shadow-2xl hover:shadow-blue-500/20 relative overflow-hidden">
                    
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Region Header -->
                    <div class="text-center mb-8 relative z-10">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center shadow-lg group-hover:shadow-blue-500/30 transition-shadow duration-500">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-white group-hover:text-blue-300 transition-colors duration-300">
                            <?php echo esc_html($uk_europe_title); ?>
                        </h2>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            <?php echo esc_html($uk_europe_description); ?>
                        </p>
                        <div class="w-16 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6 rounded-full"></div>
                    </div>
                    
                    <!-- Universities List -->
                    <div class="space-y-3 max-h-80 overflow-y-auto custom-scrollbar relative z-10">
                        <?php if ($uk_europe_universities && count($uk_europe_universities) > 0): ?>
                            <?php foreach ($uk_europe_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-blue-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-blue-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-blue-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <?php if (isset($university['location'])): ?>
                                        <p class="text-xs text-gray-400"><?php echo esc_html($university['location']); ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($university['type'])): ?>
                                        <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach ($default_uk_europe_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-blue-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-blue-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-blue-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <p class="text-xs text-gray-400 mb-1"><?php echo esc_html($university['location']); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Australia/New Zealand Region Card -->
            <div class="region-card group transform transition-all duration-700 hover:scale-105">
                <div class="bg-white/5 backdrop-blur-lg rounded-2xl p-8 h-full border border-white/10 hover:border-green-500/50 transition-all duration-500 hover:shadow-2xl hover:shadow-green-500/20 relative overflow-hidden">
                    
                    <!-- Card Background Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-teal-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Region Header -->
                    <div class="text-center mb-8 relative z-10">
                        <div class="w-20 h-20 mx-auto mb-6 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center shadow-lg group-hover:shadow-green-500/30 transition-shadow duration-500">
                            <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-white group-hover:text-green-300 transition-colors duration-300">
                            <?php echo esc_html($australia_nz_title); ?>
                        </h2>
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                            <?php echo esc_html($australia_nz_description); ?>
                        </p>
                        <div class="w-16 h-1 bg-gradient-to-r from-green-500 to-teal-600 mx-auto mb-6 rounded-full"></div>
                    </div>
                    
                    <!-- Universities List -->
                    <div class="space-y-3 max-h-80 overflow-y-auto custom-scrollbar relative z-10">
                        <?php if ($australia_nz_universities && count($australia_nz_universities) > 0): ?>
                            <?php foreach ($australia_nz_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-green-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-green-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-green-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <?php if (isset($university['location'])): ?>
                                        <p class="text-xs text-gray-400"><?php echo esc_html($university['location']); ?></p>
                                    <?php endif; ?>
                                    <?php if (isset($university['type'])): ?>
                                        <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?php foreach ($default_australia_nz_universities as $university): ?>
                                <div class="university-item bg-white/5 rounded-lg p-4 hover:bg-green-500/20 transition-all duration-300 cursor-pointer group/item border border-transparent hover:border-green-500/30">
                                    <h3 class="font-semibold text-white group-hover/item:text-green-300 transition-colors mb-1">
                                        <?php echo esc_html($university['name']); ?>
                                    </h3>
                                    <p class="text-xs text-gray-400 mb-1"><?php echo esc_html($university['location']); ?></p>
                                    <p class="text-xs text-gray-500"><?php echo esc_html($university['type']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="text-center mt-16">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold mb-4 text-white">Ready to Start Your Journey?</h3>
                <p class="text-gray-300 mb-8">Connect with our education advisors to find the perfect university for your goals.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-600 hover:to-red-700 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-xl shadow-orange-500/25">
                        Explore Programs
                    </button>
                    <button class="border-2 border-white/30 hover:border-white text-white font-bold py-4 px-8 rounded-full transition-all duration-300 hover:bg-white/10 backdrop-blur-sm">
                        Contact Advisor
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Enhanced Custom Styles -->
<style>
.custom-scrollbar {
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.3) transparent;
}

.custom-scrollbar::-webkit-scrollbar {
    width: 6px;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.2));
    border-radius: 3px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.4));
}

/* Staggered Animation for University Items */
.university-item {
    opacity: 0;
    animation: fadeInUp 0.6s ease-out forwards;
}

.university-item:nth-child(1) { animation-delay: 0.1s; }
.university-item:nth-child(2) { animation-delay: 0.2s; }
.university-item:nth-child(3) { animation-delay: 0.3s; }
.university-item:nth-child(4) { animation-delay: 0.4s; }
.university-item:nth-child(5) { animation-delay: 0.5s; }
.university-item:nth-child(6) { animation-delay: 0.6s; }
.university-item:nth-child(7) { animation-delay: 0.7s; }
.university-item:nth-child(8) { animation-delay: 0.8s; }
.university-item:nth-child(9) { animation-delay: 0.9s; }
.university-item:nth-child(10) { animation-delay: 1.0s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Card hover glow effect */
.region-card:hover .bg-white\/5 {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .region-card {
        margin-bottom: 2rem;
    }
}

@media (max-width: 768px) {
    .text-4xl.lg\:text-6xl {
        font-size: 2.5rem;
    }
    
    .text-xl.lg\:text-2xl {
        font-size: 1.125rem;
    }
}
</style>

<?php
// Register ACF fields for this block (inline registration)
if (function_exists('acf_add_local_field_group')) {
    add_action('acf/init', function() {
        if (function_exists('acf_register_block_type')) {
            // Register the block
            acf_register_block_type(array(
                'name'              => 'universities',
                'title'             => __('Universities by Region'),
                'description'       => __('Modern interactive display of universities organized by study regions'),
                'render_template'   => 'template-parts/blocks/universities-block.php',
                'category'          => 'layout',
                'icon'              => 'admin-site-alt3',
                'keywords'          => array('universities', 'study', 'education', 'regions'),
                'mode'              => 'edit',
                'align'             => 'full',
                'supports'          => array(
                    'mode' => false,
                    'align' => array('full'),
                ),
            ));
        }
        
        // Register ACF fields with enhanced options
        acf_add_local_field_group(array(
            'key' => 'group_universities_block',
            'title' => 'Universities Block',
            'fields' => array(
                // Main Section Fields
                array(
                    'key' => 'field_main_title',
                    'label' => 'Main Title',
                    'name' => 'main_title',
                    'type' => 'text',
                    'default_value' => 'Study Destinations Worldwide',
                    'placeholder' => 'Enter main title...',
                ),
                array(
                    'key' => 'field_main_subtitle',
                    'label' => 'Main Subtitle',
                    'name' => 'main_subtitle',
                    'type' => 'textarea',
                    'rows' => 3,
                    'default_value' => 'Choose from prestigious universities across three major study regions',
                    'placeholder' => 'Enter subtitle description...',
                ),
                
                // USA/Canada Section
                array(
                    'key' => 'field_usa_canada_title',
                    'label' => 'USA/Canada Section Title',
                    'name' => 'usa_canada_title',
                    'type' => 'text',
                    'default_value' => 'USA & CANADA',
                ),
                array(
                    'key' => 'field_usa_canada_description',
                    'label' => 'USA/Canada Description',
                    'name' => 'usa_canada_description',
                    'type' => 'textarea',
                    'rows' => 3,
                    'default_value' => 'Explore world-renowned universities and cutting-edge programs in North America.',
                ),
                array(
                    'key' => 'field_usa_canada_universities',
                    'label' => 'USA/Canada Universities',
                    'name' => 'usa_canada_universities',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add University',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_usa_canada_university_name',
                            'label' => 'University Name',
                            'name' => 'name',
                            'type' => 'text',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'field_usa_canada_university_location',
                            'label' => 'Location',
                            'name' => 'location',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_usa_canada_university_type',
                            'label' => 'University Type',
                            'name' => 'type',
                            'type' => 'text',
                        ),
                    ),
                ),
                
                // UK/Europe Section
                array(
                    'key' => 'field_uk_europe_title',
                    'label' => 'UK/Europe Section Title',
                    'name' => 'uk_europe_title',
                    'type' => 'text',
                    'default_value' => 'UK & EUROPE',
                ),
                array(
                    'key' => 'field_uk_europe_description',
                    'label' => 'UK/Europe Description',
                    'name' => 'uk_europe_description',
                    'type' => 'textarea',
                    'rows' => 3,
                    'default_value' => 'Discover centuries of academic excellence and innovative research opportunities.',
                ),
                array(
                    'key' => 'field_uk_europe_universities',
                    'label' => 'UK/Europe Universities',
                    'name' => 'uk_europe_universities',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add University',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_uk_europe_university_name',
                            'label' => 'University Name',
                            'name' => 'name',
                            'type' => 'text',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'field_uk_europe_university_location',
                            'label' => 'Location',
                            'name' => 'location',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_uk_europe_university_type',
                            'label' => 'University Type',
                            'name' => 'type',
                            'type' => 'text',
                        ),
                    ),
                ),
                
                // Australia/NZ Section
                array(
                    'key' => 'field_australia_nz_title',
                    'label' => 'Australia/NZ Section Title',
                    'name' => 'australia_nz_title',
                    'type' => 'text',
                    'default_value' => 'AUSTRALIA & NEW ZEALAND',
                ),
                array(
                    'key' => 'field_australia_nz_description',
                    'label' => 'Australia/NZ Description',
                    'name' => 'australia_nz_description',
                    'type' => 'textarea',
                    'rows' => 3,
                    'default_value' => 'Experience high-quality education in stunning natural environments.',
                ),
                array(
                    'key' => 'field_australia_nz_universities',
                    'label' => 'Australia/NZ Universities',
                    'name' => 'australia_nz_universities',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Add University',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_australia_nz_university_name',
                            'label' => 'University Name',
                            'name' => 'name',
                            'type' => 'text',
                            'required' => 1,
                        ),
                        array(
                            'key' => 'field_australia_nz_university_location',
                            'label' => 'Location',
                            'name' => 'location',
                            'type' => 'text',
                        ),
                        array(
                            'key' => 'field_australia_nz_university_type',
                            'label' => 'University Type',
                            'name' => 'type',
                            'type' => 'text',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/universities',
                    ),
                ),
            ),
        ));
    });
}
?>
