<?php
/**
 * About Us Block Template
 * Includes: Hero, Vision, Mission, Founder Story, Values, Team, and CTA sections
 */

// Get ACF fields with fallback values
$hero_title = get_field('about_hero_title') ?: 'About LinkYou Academy';
$hero_subtitle = get_field('about_hero_subtitle') ?: 'Empowering students to achieve their dreams through education and immigration guidance';
$hero_image = get_field('about_hero_image') ?: '';

// Vision sections
$vision_title = get_field('about_vision_title') ?: 'Our Vision';
$vision_content = get_field('about_vision_content') ?: 'To be the leading bridge connecting students worldwide to quality education opportunities, fostering global citizenship and cross-cultural understanding.';
$vision_icon = get_field('about_vision_icon') ?: 'eye';

// Mission section
$mission_title = get_field('about_mission_title') ?: 'Our Mission';
$mission_content = get_field('about_mission_content') ?: 'We provide comprehensive educational guidance and immigration support, helping students navigate their journey to study abroad with confidence and success.';
$mission_icon = get_field('about_mission_icon') ?: 'compass';

// Founder section
$founder_title = get_field('about_founder_title') ?: 'Founder\'s Story';
$founder_name = get_field('about_founder_name') ?: 'John Doe';
$founder_position = get_field('about_founder_position') ?: 'Founder & CEO';
$founder_story = get_field('about_founder_story') ?: 'Our founder\'s journey began as an international student who experienced the challenges of studying abroad firsthand. This personal experience sparked the vision to create LinkYou Academy - a platform dedicated to supporting students in their educational journey.';
$founder_image = get_field('about_founder_image') ?: '';
$founder_quote = get_field('about_founder_quote') ?: '"Education is the passport to the future, for tomorrow belongs to those who prepare for it today."';

// Values section
$values_title = get_field('about_values_title') ?: 'Our Core Values';
$values = get_field('about_values') ?: array();

// Default values if none exist
if (empty($values)) {
  $values = array(
    array(
      'value_icon' => 'shield-check',
      'value_title' => 'Integrity',
      'value_description' => 'We maintain the highest standards of honesty and transparency in all our interactions.'
    ),
    array(
      'value_icon' => 'academic-cap',
      'value_title' => 'Excellence',
      'value_description' => 'We strive for excellence in every service we provide to ensure student success.'
    ),
    array(
      'value_icon' => 'heart',
      'value_title' => 'Compassion',
      'value_description' => 'We understand the challenges of studying abroad and provide empathetic support.'
    ),
    array(
      'value_icon' => 'globe',
      'value_title' => 'Global Perspective',
      'value_description' => 'We embrace diversity and promote cross-cultural understanding and learning.'
    )
  );
}

// Team section
$team_title = get_field('about_team_title') ?: 'Meet Our Team';
$team_subtitle = get_field('about_team_subtitle') ?: 'Our dedicated professionals are here to guide you every step of the way';

// CTA section
$cta_title = get_field('about_cta_title') ?: 'Ready to Start Your Journey?';
$cta_description = get_field('about_cta_description') ?: 'Join thousands of students who have successfully achieved their educational dreams with our guidance.';
$cta_button_text = get_field('about_cta_button_text') ?: 'Get Started Today';
$cta_button_link = get_field('about_cta_button_link') ?: '#contact';

// Icon mapping function
function get_icon_svg($icon_name)
{
  $icons = array(
    'eye' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>',
    'compass' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>',
    'shield-check' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
    'academic-cap' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>',
    'heart' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
    'lightbulb' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>',
    'users' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"/>',
    'globe' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'
  );
  return $icons[$icon_name] ?? $icons['eye'];
}
?>

<!-- About Us Page -->
<div class="about-us-page">

  <!-- Hero Section -->
  <section
    class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900">

    <!-- Background Image Overlay -->
    <?php if ($hero_image): ?>
      <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url($hero_image); ?>" alt="About Us Hero" class="w-full h-full object-cover opacity-20">
      </div>
    <?php endif; ?>

    <!-- Floating Background Objects -->
    <div class="absolute inset-0 pointer-events-none">
      <div
        class="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-cyan-400/20 to-blue-500/20 rounded-full animate-float-gentle">
      </div>
      <div
        class="absolute top-1/4 right-20 w-24 h-24 bg-gradient-to-r from-purple-400/25 to-pink-500/25 rounded-full animate-float-slow">
      </div>
      <div
        class="absolute bottom-20 left-1/4 w-40 h-40 bg-gradient-to-r from-green-400/15 to-teal-500/15 rounded-full animate-float-medium">
      </div>
      <div
        class="absolute bottom-10 right-10 w-28 h-28 bg-gradient-to-r from-yellow-400/20 to-orange-500/20 rounded-full animate-float-gentle"
        style="animation-delay: -2s;"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in-scale hero-title">
        <?php echo esc_html($hero_title); ?>
      </h1>
      <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed animate-slide-in-up"
        style="animation-delay: 0.3s;">
        <?php echo esc_html($hero_subtitle); ?>
      </p>
      <div class="animate-slide-in-up" style="animation-delay: 0.6s;">
        <a href="#vision"
          class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-cyan-500/25">
          <span>Discover Our Story</span>
          <svg class="w-5 h-5 ml-2 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
      <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
        <div class="w-1 h-3 bg-white/50 rounded-full mt-2 animate-pulse"></div>
      </div>
    </div>
  </section>

  <!-- Vision & Mission Section -->
  <section id="vision" class="py-20 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="grid lg:grid-cols-2 gap-16 items-center">

        <!-- Vision -->
        <div class="relative group">
          <div
            class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
            <!-- Icon -->
            <div
              class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo get_icon_svg($vision_icon); ?>
              </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-cyan-600 transition-colors">
              <?php echo esc_html($vision_title); ?>
            </h2>

            <div class="text-gray-600 leading-relaxed">
              <?php echo wp_kses_post($vision_content); ?>
            </div>

            <!-- Decorative elements -->
            <div
              class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-cyan-100 to-blue-100 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10">
            </div>
          </div>
        </div>

        <!-- Mission -->
        <div class="relative group">
          <div
            class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
            <!-- Icon -->
            <div
              class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-600 rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <?php echo get_icon_svg($mission_icon); ?>
              </svg>
            </div>

            <h2 class="text-3xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">
              <?php echo esc_html($mission_title); ?>
            </h2>

            <div class="text-gray-600 leading-relaxed">
              <?php echo wp_kses_post($mission_content); ?>
            </div>

            <!-- Decorative elements -->
            <div
              class="absolute top-4 right-4 w-20 h-20 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Founder Story Section -->
  <section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-cyan-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          <?php echo esc_html($founder_title); ?>
        </h2>
        <div class="w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-600 mx-auto"></div>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center">

        <!-- Founder Image -->
        <div class="relative">
          <div class="relative group">
            <?php if ($founder_image): ?>
              <img src="<?php echo esc_url($founder_image); ?>" alt="<?php echo esc_attr($founder_name); ?>"
                class="w-full max-w-md mx-auto rounded-2xl shadow-2xl group-hover:shadow-3xl transition-all duration-500 transform group-hover:scale-105">
            <?php else: ?>
              <!-- Placeholder if no image -->
              <div
                class="w-full max-w-md h-96 mx-auto bg-gradient-to-br from-gray-200 to-gray-300 rounded-2xl shadow-2xl flex items-center justify-center">
                <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </div>
            <?php endif; ?>

            <!-- Decorative elements -->
            <div
              class="absolute -top-4 -left-4 w-24 h-24 bg-gradient-to-br from-cyan-200 to-blue-300 rounded-full opacity-20 group-hover:opacity-40 transition-opacity duration-500">
            </div>
            <div
              class="absolute -bottom-4 -right-4 w-32 h-32 bg-gradient-to-br from-purple-200 to-pink-300 rounded-full opacity-20 group-hover:opacity-40 transition-opacity duration-500">
            </div>
          </div>
        </div>

        <!-- Founder Content -->
        <div class="space-y-6">
          <div>
            <h3 class="text-3xl font-bold text-gray-900 mb-2"><?php echo esc_html($founder_name); ?></h3>
            <p class="text-xl text-cyan-600 font-semibold mb-6"><?php echo esc_html($founder_position); ?></p>
          </div>

          <div class="text-gray-600 leading-relaxed space-y-4">
            <?php echo wp_kses_post($founder_story); ?>
          </div>

          <!-- Quote -->
          <div class="relative bg-gradient-to-r from-cyan-50 to-blue-50 p-6 rounded-xl border-l-4 border-cyan-500">
            <svg class="absolute top-2 left-2 w-8 h-8 text-cyan-300 opacity-50" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z" />
            </svg>
            <p class="text-lg italic text-gray-700 pl-6"><?php echo esc_html($founder_quote); ?></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Core Values Section -->
  <section class="py-20 bg-gradient-to-br from-gray-900 via-indigo-900 to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <!-- Section Header -->
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          <?php echo esc_html($values_title); ?>
        </h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
          The principles that guide everything we do
        </p>
      </div>

      <!-- Values Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-<?php echo count($values) > 3 ? '4' : count($values); ?> gap-8">
        <?php foreach ($values as $index => $value): ?>
          <div class="group relative">
            <div
              class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 text-center transition-all duration-500 hover:bg-white/20 hover:scale-105 hover:shadow-2xl">

              <!-- Icon -->
              <div
                class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-full mb-6 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <?php echo get_icon_svg($value['value_icon']); ?>
                </svg>
              </div>

              <h3 class="text-xl font-bold text-white mb-4 group-hover:text-cyan-300 transition-colors">
                <?php echo esc_html($value['value_title']); ?>
              </h3>

              <p class="text-gray-300 leading-relaxed">
                <?php echo esc_html($value['value_description']); ?>
              </p>

              <!-- Decorative border -->
              <div
                class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-cyan-400/30 transition-all duration-500">
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 bg-gradient-to-r from-cyan-500 via-blue-600 to-indigo-700 relative overflow-hidden">

    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0"
        style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 20px 20px;">
      </div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
        <?php echo esc_html($cta_title); ?>
      </h2>
      <p class="text-xl text-blue-100 mb-8 leading-relaxed">
        <?php echo esc_html($cta_description); ?>
      </p>
      <a href="<?php echo esc_url($cta_button_link); ?>"
        class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
        <?php echo esc_html($cta_button_text); ?>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </section>

</div>

<style>
  /* About Us Specific Animations */
  @keyframes float-gentle {

    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
    }

    50% {
      transform: translateY(-10px) rotate(2deg);
    }
  }

  @keyframes float-slow {

    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
    }

    50% {
      transform: translateY(-15px) rotate(-2deg);
    }
  }

  @keyframes float-medium {

    0%,
    100% {
      transform: translateY(0px) rotate(0deg);
    }

    50% {
      transform: translateY(-20px) rotate(1deg);
    }
  }

  @keyframes fade-in-scale {
    0% {
      opacity: 0;
      transform: scale(0.8);
    }

    100% {
      opacity: 1;
      transform: scale(1);
    }
  }

  @keyframes slide-in-up {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes shimmer {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  .animate-float-gentle {
    animation: float-gentle 6s ease-in-out infinite;
  }

  .animate-float-slow {
    animation: float-slow 8s ease-in-out infinite;
  }

  .animate-float-medium {
    animation: float-medium 7s ease-in-out infinite;
  }

  .animate-fade-in-scale {
    animation: fade-in-scale 1s ease-out;
  }

  .animate-slide-in-up {
    animation: slide-in-up 1s ease-out;
  }

  .animate-shimmer {
    background: linear-gradient(45deg, #06b6d4, #3b82f6, #8b5cf6, #06b6d4);
    background-size: 300% 300%;
    animation: shimmer 3s ease-in-out infinite;
  }

  /* Hero Title Gradient Effect */
  .hero-title {
    background: linear-gradient(45deg, #06b6d4, #3b82f6, #8b5cf6, #ec4899);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 400% 400%;
    animation: hero-gradient 4s ease-in-out infinite;
  }

  @keyframes hero-gradient {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  /* Hover Effects */
  .group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
  }

  .group:hover .group-hover\:text-cyan-600 {
    color: #0891b2;
  }

  .group:hover .group-hover\:text-purple-600 {
    color: #9333ea;
  }

  .group:hover .group-hover\:text-cyan-300 {
    color: #67e8f9;
  }

  .group:hover .group-hover\:shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .about-us-page .grid.lg\:grid-cols-2 {
      grid-template-columns: 1fr;
    }

    .about-us-page .grid.lg\:grid-cols-4 {
      grid-template-columns: repeat(2, 1fr);
    }

    .about-us-page .text-5xl.md\:text-7xl {
      font-size: 3rem;
    }
  }
</style>