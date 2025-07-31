<?php
/**
 * Courses Preview Block Template
 * 
 * Beautiful courses preview page with only page title ACF field
 * Features sample courses, categories, and student-focused design
 */

// Get ACF field with fallback
$page_title = get_field('page_title') ?: 'Explore Our Courses';


// Sample course categories with realistic data
$course_categories = [
    [
        'name' => 'Business & Management',
        'icon' => '💼',
        'courses_count' => 45,
        'description' => 'Leadership, Strategy, Entrepreneurship'
    ],
    [
        'name' => 'Computer Science & IT',
        'icon' => '💻',
        'courses_count' => 38,
        'description' => 'Programming, AI, Cybersecurity'
    ],
    [
        'name' => 'Engineering',
        'icon' => '⚙️',
        'courses_count' => 52,
        'description' => 'Mechanical, Civil, Electrical'
    ],
    [
        'name' => 'Health & Medicine',
        'icon' => '🏥',
        'courses_count' => 29,
        'description' => 'Nursing, Pharmacy, Healthcare'
    ],
    [
        'name' => 'Arts & Design',
        'icon' => '🎨',
        'courses_count' => 31,
        'description' => 'Graphic Design, Fine Arts, Media'
    ],
    [
        'name' => 'Education & Teaching',
        'icon' => '👩‍🏫',
        'courses_count' => 24,
        'description' => 'Teaching, Curriculum, Psychology'
    ],
    [
        'name' => 'Science & Research',
        'icon' => '🔬',
        'courses_count' => 33,
        'description' => 'Biology, Chemistry, Physics'
    ],
    [
        'name' => 'Language & Literature',
        'icon' => '📚',
        'courses_count' => 19,
        'description' => 'English, Literature, Linguistics'
    ]
];

// Featured sample courses
$featured_courses = [
    [
        'title' => 'Business Administration Master\'s',
        'university' => 'University of Toronto',
        'duration' => '24 months',
        'level' => 'Advanced',
        'level_color' => 'bg-red-100 text-red-800',
        'rating' => 4.8,
        'students' => '2,450',
        'price' => '$45,000',
        'category' => 'Business',
        'description' => 'Comprehensive MBA program focusing on strategic leadership and global business practices.',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=250&fit=crop'
    ],
    [
        'title' => 'Computer Science Bachelor\'s',
        'university' => 'University of British Columbia',
        'duration' => '48 months',
        'level' => 'Intermediate',
        'level_color' => 'bg-yellow-100 text-yellow-800',
        'rating' => 4.7,
        'students' => '3,200',
        'price' => '$38,000',
        'category' => 'Technology',
        'description' => 'Cutting-edge computer science program with focus on AI and software development.',
        'image' => 'https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=400&h=250&fit=crop'
    ],
    [
        'title' => 'Mechanical Engineering',
        'university' => 'McGill University',
        'duration' => '36 months',
        'level' => 'Advanced',
        'level_color' => 'bg-red-100 text-red-800',
        'rating' => 4.9,
        'students' => '1,800',
        'price' => '$42,000',
        'category' => 'Engineering',
        'description' => 'Advanced mechanical engineering with specialization in robotics and automation.',
        'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=250&fit=crop'
    ],
    [
        'title' => 'Digital Marketing Certificate',
        'university' => 'York University',
        'duration' => '6 months',
        'level' => 'Beginner',
        'level_color' => 'bg-green-100 text-green-800',
        'rating' => 4.6,
        'students' => '4,100',
        'price' => '$8,500',
        'category' => 'Marketing',
        'description' => 'Comprehensive digital marketing program covering SEO, social media, and analytics.',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop'
    ],
    [
        'title' => 'Nursing Program',
        'university' => 'University of Calgary',
        'duration' => '30 months',
        'level' => 'Intermediate',
        'level_color' => 'bg-yellow-100 text-yellow-800',
        'rating' => 4.8,
        'students' => '2,900',
        'price' => '$35,000',
        'category' => 'Healthcare',
        'description' => 'Comprehensive nursing program with clinical placements and specialized training.',
        'image' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop'
    ],
    [
        'title' => 'International Business',
        'university' => 'University of Waterloo',
        'duration' => '18 months',
        'level' => 'Intermediate',
        'level_color' => 'bg-yellow-100 text-yellow-800',
        'rating' => 4.7,
        'students' => '1,650',
        'price' => '$32,000',
        'category' => 'Business',
        'description' => 'Global business program with international exchange opportunities.',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=250&fit=crop'
    ]
];

// Get real courses from TutorLMS
$tutor_courses = [];
if (function_exists('tutor_utils')) {
    // Try different methods to get courses
    $courses_query = tutor_utils()->get_courses_by_query([
        'posts_per_page' => 12,
        'paged' => 1,
        'post_status' => 'publish',
        'meta_query' => []
    ]);

    // Alternative method if the first one doesn't work
    if (!$courses_query || !$courses_query->have_posts()) {
        $courses_query = new WP_Query([
            'post_type' => 'courses',
            'posts_per_page' => 12,
            'post_status' => 'publish'
        ]);
    }

    if ($courses_query && $courses_query->have_posts()) {
        while ($courses_query->have_posts()) {
            $courses_query->the_post();
            $course_id = get_the_ID();

            // Get course meta data
            $course_price_raw = tutor_utils()->get_course_price($course_id);

            // Handle price formatting more safely
            if (is_array($course_price_raw)) {
                // If it's an array, get the price value
                $course_price = isset($course_price_raw['price']) ? $course_price_raw['price'] : 'Free';
            } else {
                // If it's a string or number
                $course_price = $course_price_raw && !empty($course_price_raw) ? $course_price_raw : 'Free';
            }

            // Ensure price is a string
            if (is_numeric($course_price) && $course_price > 0) {
                $course_price = '$' . number_format($course_price, 2);
            } elseif (empty($course_price) || $course_price === '0' || $course_price === 0) {
                $course_price = 'Free';
            }

            $course_level = get_post_meta($course_id, '_tutor_course_level', true);
            $course_duration = get_post_meta($course_id, '_duration', true);
            $total_lessons = tutor_utils()->get_course_content_count_by_type($course_id, 'lesson');
            $total_students = tutor_utils()->count_enrolled_users_by_course($course_id);

            // Get course rating with error handling
            $course_rating_obj = tutor_utils()->get_course_rating($course_id);
            $course_rating = '5.0'; // Default rating
            if ($course_rating_obj && is_object($course_rating_obj) && isset($course_rating_obj->rating_avg)) {
                $course_rating = round($course_rating_obj->rating_avg, 1);
            } elseif ($course_rating_obj && is_array($course_rating_obj) && isset($course_rating_obj['rating_avg'])) {
                $course_rating = round($course_rating_obj['rating_avg'], 1);
            }

            // Get course thumbnail
            $course_thumbnail = get_the_post_thumbnail_url($course_id, 'medium');
            if (!$course_thumbnail) {
                $course_thumbnail = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400&h=250&fit=crop';
            }

            // Determine level color
            $level_color = 'bg-blue-100 text-blue-800';
            switch (strtolower($course_level)) {
                case 'beginner':
                    $level_color = 'bg-green-100 text-green-800';
                    break;
                case 'intermediate':
                    $level_color = 'bg-yellow-100 text-yellow-800';
                    break;
                case 'advanced':
                    $level_color = 'bg-red-100 text-red-800';
                    break;
                default:
                    $level_color = 'bg-blue-100 text-blue-800';
                    break;
            }

            // Get course description
            $course_description = get_the_excerpt();
            if (empty($course_description)) {
                $course_description = wp_trim_words(get_the_content(), 20, '...');
            }
            if (empty($course_description)) {
                $course_description = 'Course description coming soon...';
            }

            $tutor_courses[] = [
                'id' => $course_id,
                'title' => get_the_title(),
                'description' => $course_description,
                'permalink' => get_permalink(),
                'thumbnail' => $course_thumbnail,
                'price' => $course_price,
                'level' => $course_level ? ucfirst($course_level) : 'All Levels',
                'level_color' => $level_color,
                'duration' => $course_duration ? $course_duration : 'Self-paced',
                'lessons' => $total_lessons ? $total_lessons : 0,
                'students' => $total_students ? number_format($total_students) : '0',
                'rating' => $course_rating,
                'author_name' => get_the_author_meta('display_name'),
                'categories' => get_the_terms($course_id, 'course-category')
            ];
        }
        wp_reset_postdata();
    }
}

// Get course categories from TutorLMS
$tutor_categories = [];
if (function_exists('tutor_utils')) {
    $categories = get_terms([
        'taxonomy' => 'course-category',
        'hide_empty' => false,
        'number' => 8
    ]);

    if (!is_wp_error($categories) && !empty($categories)) {
        foreach ($categories as $category) {
            $course_count = $category->count;
            $tutor_categories[] = [
                'name' => $category->name,
                'icon' => '📚', // Default icon, you can customize this
                'courses_count' => $course_count,
                'description' => $category->description ? $category->description : 'Various courses available',
                'link' => get_term_link($category)
            ];
        }
    }
}

// Use TutorLMS courses if available, otherwise use sample data
$display_courses = !empty($tutor_courses) ? $tutor_courses : $featured_courses;
$display_categories = !empty($tutor_categories) ? $tutor_categories : $course_categories;

// Debug information (remove in production)
if (current_user_can('manage_options')) {
    echo "<!-- Debug Info: ";
    echo "TutorLMS function exists: " . (function_exists('tutor_utils') ? 'Yes' : 'No') . " | ";
    echo "TutorLMS courses found: " . count($tutor_courses) . " | ";
    echo "Using display courses: " . count($display_courses) . " | ";
    echo "TutorLMS categories found: " . count($tutor_categories) . " | ";
    echo "-->";
}
?>

<!-- Courses Preview Page -->
<div class="courses-preview-page relative min-h-screen bg-gray-50">

    <!-- Hero Section -->
    <section
        class="hero-section relative py-20 lg:py-32 bg-gradient-to-br from-primary-900 via-primary-800 to-blue-900 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 text-6xl animate-float">📚</div>
            <div class="absolute top-20 right-20 text-5xl animate-float-slow">✨</div>
            <div class="absolute bottom-20 left-20 text-4xl animate-float">🎓</div>
            <div class="absolute bottom-10 right-10 text-5xl animate-float-slow">💡</div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-7xl animate-pulse opacity-5">
                🌟</div>
        </div>

        <div class="container mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-bold bg-gradient-to-r from-white via-blue-200 to-orange-300 bg-clip-text text-transparent mb-6 animate-fade-in">
                    <?php echo esc_html($page_title); ?>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 opacity-0 animate-slide-up"
                    style="animation-delay: 0.3s;">
                    Discover world-class educational programs from top universities across Canada and beyond
                </p>

                <!-- Statistics -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.5s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">150+</div>
                        <div class="text-blue-200">Available Courses</div>
                    </div>
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.7s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">10K+</div>
                        <div class="text-blue-200">Happy Students</div>
                    </div>
                    <div class="text-center opacity-0 animate-slide-up" style="animation-delay: 0.9s;">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-2">95%</div>
                        <div class="text-blue-200">Success Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Course Categories Section -->
    <section class="categories-section py-16 lg:py-24">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Browse by Category</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Find the perfect program in your field of interest from our comprehensive course catalog
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($display_categories as $index => $category): ?>
                    <a href="<?php echo esc_url($category['link']); ?>"
                        class="category-card group cursor-pointer opacity-0 animate-fade-up"
                        style="animation-delay: <?php echo 0.2 + ($index * 0.1); ?>s;">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 transition-all duration-300 hover:shadow-2xl hover:border-primary-200 hover:-translate-y-2">
                            <div class="text-4xl mb-4"><?php echo $category['icon']; ?></div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2"><?php echo esc_html($category['name']); ?></h3>
                            <p class="text-sm text-gray-600 mb-3"><?php echo esc_html($category['description']); ?></p>
                            <div class="flex items-center justify-between">
                                <span class="text-primary-600 font-semibold"><?php echo $category['courses_count']; ?>
                                    courses</span>
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary-500 transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Featured Courses Section -->
    <section class="featured-courses-section py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Programs</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Discover our most popular courses from renowned universities and institutions
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($display_courses as $index => $course): ?>
                    <div class="course-card group cursor-pointer opacity-0 animate-fade-up"
                        style="animation-delay: <?php echo 0.3 + ($index * 0.1); ?>s;">
                        <div
                            class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-2xl hover:border-primary-200 hover:-translate-y-1">

                            <!-- Course Image -->
                            <div class="relative h-48 overflow-hidden">
                                <?php if (!empty($tutor_courses) && isset($course['thumbnail'])): ?>
                                    <img src="<?php echo esc_url($course['thumbnail']); ?>"
                                        alt="<?php echo esc_attr($course['title']); ?>"
                                        class="w-full h-full object-cover course-image transition-transform duration-300">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                <?php else: ?>
                                    <div class="absolute inset-0 bg-gradient-to-r from-primary-500 to-secondary-500">
                                        <div class="absolute inset-0 bg-gradient-to-r from-primary-600/90 to-secondary-600/90">
                                        </div>
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="text-white text-center">
                                                <div class="text-4xl mb-2">🎓</div>
                                                <div class="text-sm font-medium">
                                                    <?php echo esc_html(isset($course['category']) ? $course['category'] : 'Course'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Course Content -->
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-3">
                                    <span
                                        class="px-3 py-1 rounded-full text-xs font-medium <?php echo $course['level_color']; ?>">
                                        <?php echo esc_html($course['level']); ?>
                                    </span>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600"><?php echo $course['rating']; ?></span>
                                    </div>
                                </div>

                                <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                                    <?php echo esc_html($course['title']); ?>
                                </h3>

                                <?php if (!empty($tutor_courses) && isset($course['author_name'])): ?>
                                    <p class="text-primary-600 font-semibold mb-2">By
                                        <?php echo esc_html($course['author_name']); ?>
                                    </p>
                                <?php else: ?>
                                    <p class="text-primary-600 font-semibold mb-2">
                                        <?php echo esc_html($course['university']); ?>
                                    </p>
                                <?php endif; ?>

                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    <?php echo esc_html($course['description']); ?>
                                </p>

                                <!-- Course Details -->
                                <div class="space-y-2 mb-4">
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Duration: <?php echo esc_html($course['duration']); ?>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-600">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                        <?php echo esc_html($course['students']); ?> students enrolled
                                    </div>
                                    <?php if (!empty($tutor_courses) && isset($course['lessons'])): ?>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                </path>
                                            </svg>
                                            <?php echo esc_html($course['lessons']); ?> lessons
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- Price and Action -->
                                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                    <div class="text-2xl font-bold text-primary-600">
                                        <?php echo esc_html($course['price']); ?>
                                    </div>
                                    <?php if (!empty($tutor_courses) && isset($course['permalink'])): ?>
                                        <a href="<?php echo esc_url($course['permalink']); ?>"
                                            class="px-4 py-2 bg-gradient-to-r from-primary-500 to-primary-600 text-white rounded-lg text-sm font-semibold transition-all duration-300 hover:from-primary-600 hover:to-primary-700 hover:shadow-lg transform hover:scale-105">
                                            View Course
                                        </a>
                                    <?php else: ?>
                                        <button
                                            class="px-4 py-2 bg-gradient-to-r from-primary-500 to-primary-600 text-white rounded-lg text-sm font-semibold transition-all duration-300 hover:from-primary-600 hover:to-primary-700 hover:shadow-lg transform hover:scale-105">
                                            View Details
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- View All Courses CTA -->
            <div class="text-center mt-16">
                <button
                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-primary-500 via-primary-600 to-secondary-500 text-white text-lg font-semibold rounded-xl transition-all duration-300 hover:shadow-2xl hover:scale-105 transform">
                    <span>View All Courses</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>
</div>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes float-slow {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-30px);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-slide-up {
        animation: slideUp 0.8s ease-out forwards;
    }

    .animate-fade-up {
        animation: fadeIn 0.6s ease-out forwards;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .course-card:hover .course-image {
        transform: scale(1.05);
    }

    .category-card:hover {
        transform: translateY(-8px);
    }

    .course-card {
        transition: all 0.3s ease;
    }

    .course-card:hover {
        transform: translateY(-4px) scale(1.02);
    }
</style>