<?php
$title = get_field('main_heading');
$subtitle = get_field('subheading');
$description = get_field('description');
$background_image = get_field('background_image');
$services_button_text = get_field('services_button_text') ?: 'Explore Services';
$application_button_text = get_field('application_button_text') ?: 'Start Application';
$services_button_link = get_field('services_button_url') ?: '#services';
$application_button_link = get_field('application_button_url') ?: '#application';
// Default content for elegant university referral website
$default_title = $title ?: "Shape Your Academic Future";
$default_subtitle = $subtitle ?: "Transform Your Dreams Into Reality";
$default_description = $description ?: "Connect with world-renowned universities and unlock unlimited possibilities. We guide ambitious students through their journey to academic excellence and global success.";
?>

<section class="hero-elegant pt-14  pb-20 relative min-h-screen flex items-center justify-center overflow-hidden">
  
  <!-- Sophisticated Background with Animated Geometric Patterns -->
  <div class="absolute inset-0 hero-bg-layer">
    <?php if ($background_image): ?>
      <img src="<?php echo esc_url($background_image['url']); ?>" 
           alt="<?php echo esc_attr($background_image['alt']); ?>"
           class="w-full h-full object-cover">
    <?php else: ?>
      <!-- Elegant Gradient Background -->
      <div class="absolute inset-0 bg-gradient-to-br from-primary-900 via-primary-800 to-neutral-900"></div>
    <?php endif; ?>
    
    <!-- Sophisticated Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary-900/80 via-primary-800/60 to-primary-900/80"></div>
    
    <!-- Animated Geometric Elements -->
    <div class="geometric-bg absolute inset-0">
      <div class="geometric-shape shape-1"></div>
      <div class="geometric-shape shape-2"></div>
      <div class="geometric-shape shape-3"></div>
      <div class="geometric-shape shape-4"></div>
    </div>
    
    <!-- Floating Academic Icons -->
    <div class="floating-icons absolute inset-0">
      <div class="floating-icon icon-1">📚</div>
      <div class="floating-icon icon-2">🎓</div>
      <div class="floating-icon icon-3">🌟</div>
      <div class="floating-icon icon-4">🚀</div>
      <div class="floating-icon icon-5">💡</div>
    </div>
  </div>

  <!-- Main Content Container -->
  <div class="relative z-20 container mx-auto px-6 lg:px-8 text-center max-w-6xl pb-20 pt-9">
    
    <!-- Animated Badge -->
    <div class="hero-badge mb-8 inline-block opacity-0 animate-fade-slide-up" style="animation-delay: 0.2s;">
      <div class="inline-flex items-center px-6 py-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white/90 font-medium text-sm">
        <span class="w-2 h-2 bg-success-400 rounded-full mr-3 animate-pulse"></span>
        Trusted by 10,000+ Students Worldwide
      </div>
    </div>

    <!-- Main Heading with Advanced Typography -->
    <div class="hero-title-container mb-8 opacity-0 animate-fade-slide-up" style="animation-delay: 0.4s;">
      <h1 class="hero-main-title text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black text-white leading-none mb-4">
        <span class="block mb-2 hero-word" style="animation-delay: 0.6s;"><?php echo explode(' ', $default_title)[0]; ?></span>
        <span class="block mb-2 hero-word text-transparent bg-clip-text bg-gradient-to-r from-primary-300 via-secondary-400 to-success-400" style="animation-delay: 0.8s;">
          <?php echo explode(' ', $default_title)[1]; ?>
        </span>
        <span class="block hero-word" style="animation-delay: 1s;"><?php echo explode(' ', $default_title)[2]; ?></span>
      </h1>
      
      <!-- Elegant Subtitle -->
      <h2 class="hero-subtitle text-2xl sm:text-3xl lg:text-4xl font-light text-primary-200 tracking-wide opacity-0 animate-fade-slide-up" style="animation-delay: 1.2s;">
        <?php echo esc_html($default_subtitle); ?>
      </h2>
    </div>

    <!-- Description with Typewriter Effect -->
    <div class="hero-description mb-12 opacity-0 animate-fade-slide-up" style="animation-delay: 1.4s;">
      <p class="text-lg sm:text-xl lg:text-2xl text-neutral-200 leading-relaxed max-w-4xl mx-auto font-light">
        <span class="typewriter-text" data-text="<?php echo esc_attr($default_description); ?>"></span>
      </p>
    </div>

    <!-- Premium CTA Buttons -->
    <div class="hero-cta-container mb-16 opacity-0 animate-fade-slide-up" style="animation-delay: 1.6s;">
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center max-w-lg mx-auto">
        
        <!-- Primary CTA - Services -->
        <a href="<?php echo esc_url($services_button_link); ?>" class="cta-primary group relative w-full sm:w-auto rounded-xl">
          <div class="cta-button-inner px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 rounded-xl font-semibold text-lg text-white shadow-2xl relative overflow-hidden border border-primary-400/30">
            <span class="relative z-10 flex items-center justify-center gap-3 rounded-xl">
              <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              <?php echo esc_html($services_button_text); ?>
            </span>
            <div class="cta-shine absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
          </div>
        </a>

        <!-- Secondary CTA - Application -->
        <a href="<?php echo esc_url($application_button_link); ?>" class="cta-secondary group relative w-full sm:w-auto rounded-xl">
          <div class="cta-button-inner px-8 py-4 bg-gradient-to-r from-transparent to-transparent border-2 border-white/30 rounded-xl font-semibold text-lg text-white shadow-2xl relative overflow-hidden backdrop-blur-sm">
            <span class="relative z-10 flex items-center justify-center gap-3">
              <svg class="w-5 h-5 transform group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
              </svg>
              <?php echo esc_html($application_button_text); ?>
            </span>
            <div class="cta-glow absolute inset-0 bg-gradient-to-r from-white/5 to-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
        </a>
        
      </div>
    </div>

    <!-- Success Statistics -->
    <div class="hero-stats grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto opacity-0 animate-fade-slide-up" style="animation-delay: 1.8s;">
      
      <div class="stat-item text-center">
        <div class="stat-number text-3xl lg:text-4xl font-bold text-white mb-2" data-count="10000">0</div>
        <div class="stat-label text-sm text-neutral-300 font-medium">Students Placed</div>
      </div>
      
      <div class="stat-item text-center">
        <div class="stat-number text-3xl lg:text-4xl font-bold text-white mb-2" data-count="500">0</div>
        <div class="stat-label text-sm text-neutral-300 font-medium">Partner Universities</div>
      </div>
      
      <div class="stat-item text-center">
        <div class="stat-number text-3xl lg:text-4xl font-bold text-white mb-2" data-count="50">0</div>
        <div class="stat-label text-sm text-neutral-300 font-medium">Countries</div>
      </div>
      
      <div class="stat-item text-center">
        <div class="stat-number text-3xl lg:text-4xl font-bold text-white mb-2" data-count="98">0</div>
        <div class="stat-label text-sm text-neutral-300 font-medium">Success Rate %</div>
      </div>
      
    </div>

    <!-- Elegant Scroll Indicator -->
    <div       class="hero-scroll absolute md:left-[45.666667%] left-[36.666667%] transform -translate-x-1/2 opacity-0 animate-fade-slide-up"
 style="animation-delay: 2s;">
      <div class="scroll-indicator flex flex-col items-center text-white/60">
        <div class="scroll-wheel w-6 h-10 border-2 border-white/30 rounded-full mb-2 relative">
          <div class="scroll-dot w-1 h-2 bg-white/50 rounded-full absolute top-2 left-1/2 transform -translate-x-1/2 animate-bounce"></div>
        </div>
        <span class="text-xs font-medium tracking-wider uppercase">Discover More</span>
      </div>
    </div>

  </div>

</section>