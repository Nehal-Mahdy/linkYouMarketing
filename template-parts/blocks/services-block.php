<?php 
$title = get_field('section_title');
$heading = get_field('heading');
$subHeading = get_field('sub_heading');
$services = get_field('services');
?>

<style>
/* Creative Animations */
@keyframes morphBlob {
  0%, 100% { 
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; 
    transform: rotate(0deg) scale(1);
  }
  25% { 
    border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; 
    transform: rotate(90deg) scale(1.1);
  }
  50% { 
    border-radius: 40% 30% 60% 70% / 40% 70% 60% 50%; 
    transform: rotate(180deg) scale(0.9);
  }
  75% { 
    border-radius: 70% 50% 40% 30% / 60% 40% 50% 70%; 
    transform: rotate(270deg) scale(1.05);
  }
}

@keyframes floatDiagonal {
  0%, 100% { 
    transform: translate(0px, 0px) rotate(0deg); 
  }
  25% { 
    transform: translate(30px, -20px) rotate(90deg); 
  }
  50% { 
    transform: translate(0px, -40px) rotate(180deg); 
  }
  75% { 
    transform: translate(-30px, -20px) rotate(270deg); 
  }
}

@keyframes glowPulse {
  0%, 100% { 
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.3), 0 0 40px rgba(99, 102, 241, 0.1); 
  }
  50% { 
    box-shadow: 0 0 40px rgba(99, 102, 241, 0.6), 0 0 80px rgba(99, 102, 241, 0.3); 
  }
}

@keyframes textGlow {
  0%, 100% { 
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5); 
  }
  50% { 
    text-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 30px rgba(99, 102, 241, 0.5); 
  }
}

@keyframes cardHover {
  0% { 
    transform: translateY(0px) rotateX(0deg) rotateY(0deg); 
  }
  100% { 
    transform: translateY(-20px) rotateX(5deg) rotateY(5deg); 
  }
}

/* Masonry Layout Styles */
.masonry-grid {
  column-count: 1;
  column-gap: 1.5rem;
  column-fill: balance;
}

@media (min-width: 640px) {
  .masonry-grid {
    column-count: 2;
  }
}

@media (min-width: 1024px) {
  .masonry-grid {
    column-count: 3;
  }
}

@media (min-width: 1280px) {
  .masonry-grid {
    column-count: 4;
  }
}

.masonry-item {
  break-inside: avoid;
  margin-bottom: 1.5rem;
  display: inline-block;
  width: 100%;
}

/* Enhanced Card Effects */
.service-card {
  perspective: 1000px;
  transform-style: preserve-3d;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.service-card:hover {
  animation: cardHover 0.6s ease-out forwards;
}

/* Glowing Orb Background */
.glowing-orb {
  animation: morphBlob 8s ease-in-out infinite;
  filter: blur(40px);
  opacity: 0.4;
}

/* Floating Elements */
.floating-element {
  animation: floatDiagonal 6s ease-in-out infinite;
}

/* Text Glow Effect */
.glow-text {
  animation: textGlow 3s ease-in-out infinite;
}

/* Creative Button Hover */
.creative-button {
  position: relative;
  overflow: hidden;
}

.creative-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s;
}

.creative-button:hover::before {
  left: 100%;
}

/* Enhanced Mobile Responsiveness */

/* Large Tablets & Small Desktops (1024px - 1279px) */
@media (min-width: 1024px) and (max-width: 1279px) {
  .masonry-grid {
    column-count: 3;
    column-gap: 1.25rem;
  }
  
  .glowing-orb {
    filter: blur(30px);
  }
  
 
}

/* Tablets (768px - 1023px) */
@media (max-width: 1023px) {
  .masonry-grid {
    column-count: 2;
    column-gap: 1rem;
  }
  
  .masonry-item {
    margin-bottom: 1.25rem;
  }
  
  /* Reduce background orb sizes for better performance */
  .glowing-orb {
    filter: blur(25px);
    opacity: 0.3;
  }
  
  .floating-element {
    opacity: 0.4 !important;
  }
  
  
  
  .text-7xl {
    font-size: 3rem;
    line-height: 1;
  }
  
  .text-6xl {
    font-size: 2.5rem;
    line-height: 1.1;
  }
  
  /* Spacing adjustments */
  .py-20 {
    padding-top: 4rem;
    padding-bottom: 4rem;
  }
  
  .py-24 {
    padding-top: 5rem;
    padding-bottom: 5rem;
  }
  
  .py-32 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
  
  .mb-20 {
    margin-bottom: 3rem;
  }
  
  .mb-24 {
    margin-bottom: 4rem;
  }
  
  /* Card adjustments */
  .service-card {
    min-height: auto;
  }
  
  .p-8 {
    padding: 1.5rem;
  }
  
  .p-7 {
    padding: 1.25rem;
  }
}

/* Mobile Landscape & Small Tablets (481px - 767px) */
@media (max-width: 767px) {
  .masonry-grid {
    column-count: 1;
    column-gap: 0;
  }
  
  .masonry-item {
    margin-bottom: 1rem;
  }
  
  /* Disable complex animations on mobile for better performance */
  .service-card:hover {
    animation: none;
    transform: translateY(-4px);
  }
  
  .glowing-orb {
    filter: blur(20px);
    opacity: 0.2;
    width: 200px !important;
    height: 200px !important;
  }
  
  .floating-element {
    opacity: 0.2 !important;
    animation-duration: 8s;
  }
  
 
  
  .text-7xl {
    font-size: 2.5rem;
    line-height: 0.9;
  }
  
  .text-6xl {
    font-size: 2.25rem;
    line-height: 1;
  }
  
  .text-5xl {
    font-size: 2rem;
    line-height: 1;
  }
  
  .text-4xl {
    font-size: 1.75rem;
    line-height: 1.1;
  }
  
  .text-3xl {
    font-size: 1.5rem;
    line-height: 1.2;
  }
  
  .text-2xl {
    font-size: 1.25rem;
    line-height: 1.3;
  }
  
  .text-xl {
    font-size: 1.125rem;
    line-height: 1.4;
  }
  
  .text-lg {
    font-size: 1rem;
    line-height: 1.5;
  }
  
  /* Spacing adjustments */
  .py-20 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }
  
  .py-24 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
  
  .py-32 {
    padding-top: 3.5rem;
    padding-bottom: 3.5rem;
  }
  
  .px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  .px-6 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  .px-8 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  .mb-20 {
    margin-bottom: 2rem;
  }
  
  .mb-24 {
    margin-bottom: 2.5rem;
  }
  
  .mb-16 {
    margin-bottom: 1.5rem;
  }
  
  .mb-8 {
    margin-bottom: 1rem;
  }
  
  /* Card padding adjustments */
  .p-8 {
    padding: 1.25rem;
  }
  
  .p-7 {
    padding: 1rem;
  }
  
  .p-6 {
    padding: 1rem;
  }
  
  /* Icon size adjustments */
  .w-20 {
    width: 4rem;
    height: 4rem;
  }
  
  .h-20 {
    width: 4rem;
    height: 4rem;
  }
  
  .w-22 {
    width: 4rem;
    height: 4rem;
  }
  
  .h-22 {
    width: 4rem;
    height: 4rem;
  }
  
  .w-18 {
    width: 3.5rem;
    height: 3.5rem;
  }
  
  .h-18 {
    width: 3.5rem;
    height: 3.5rem;
  }
  
  .w-16 {
    width: 3rem;
    height: 3rem;
  }
  
  .h-16 {
    width: 3rem;
    height: 3rem;
  }
  
  /* Card height adjustments for mobile */
  .h-96 {
    height: auto;
    min-height: 280px;
  }
  
  .h-88 {
    height: auto;
    min-height: 300px;
  }
  
  .h-84 {
    height: auto;
    min-height: 290px;
  }
  
  .h-70 {
    height: auto;
    min-height: 260px;
  }
  
  .h-72 {
    height: auto;
    min-height: 270px;
  }
  
  .h-64 {
    height: auto;
    min-height: 240px;
  }
  
  .h-60 {
    height: auto;
    min-height: 220px;
  }
  
  /* Badge responsive adjustments */
  .px-8 {
    padding-left: 1rem;
    padding-right: 1rem;
  }
  
  .py-4 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
  }
  
  /* Reduce CTA section complexity on mobile */
  .mt-24 {
    margin-top: 2rem;
  }
  
  /* Button adjustments */
  .w-24 {
    width: 4rem;
    height: 4rem;
  }
  
  .h-24 {
    width: 4rem;
    height: 4rem;
  }
  
  .w-16 {
    width: 3rem;
    height: 3rem;
  }
  
  .h-16 {
    width: 3rem;
    height: 3rem;
  }
}

/* Small Mobile Devices (320px - 480px) */
@media (max-width: 480px) {
  /* Further reduce animations and effects */
  .glow-text {
    animation: none;
    text-shadow: none;
  }
  
  .glowing-orb {
    display: none; /* Hide complex backgrounds on very small screens */
  }
  
  .floating-element {
    display: none; /* Hide floating elements */
  }
  
  
  .text-7xl {
    font-size: 2rem;
    line-height: 0.9;
  }
  
  .text-6xl {
    font-size: 1.875rem;
    line-height: 1;
  }
  
  .text-5xl {
    font-size: 1.75rem;
    line-height: 1;
  }
  
  .text-4xl {
    font-size: 1.5rem;
    line-height: 1.1;
  }
  
  .text-3xl {
    font-size: 1.375rem;
    line-height: 1.2;
  }
  
  .text-2xl {
    font-size: 1.25rem;
    line-height: 1.3;
  }
  
  .text-xl {
    font-size: 1.125rem;
    line-height: 1.4;
  }
  
  /* Minimal spacing */
  .py-20 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
  
  .py-24 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }
  
  .py-32 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
  
  .px-4 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
  
  .mb-20 {
    margin-bottom: 1.5rem;
  }
  
  .mb-24 {
    margin-bottom: 2rem;
  }
  
  .mb-8 {
    margin-bottom: 0.75rem;
  }
  
  /* Compact card padding */
  .p-8 {
    padding: 1rem;
  }
  
  .p-7 {
    padding: 0.875rem;
  }
  
  .p-6 {
    padding: 0.875rem;
  }
  
  /* Simplified card heights */
  .h-96 {
    min-height: 240px;
  }
  
  .h-88 {
    min-height: 260px;
  }
  
  .h-84 {
    min-height: 250px;
  }
  
  .h-70 {
    min-height: 220px;
  }
  
  .h-72 {
    min-height: 230px;
  }
  
  .h-64 {
    min-height: 200px;
  }
  
  .h-60 {
    min-height: 180px;
  }
  
  /* Compact icons */
  .w-20, .h-20 {
    width: 3rem;
    height: 3rem;
  }
  
  .w-22, .h-22 {
    width: 3rem;
    height: 3rem;
  }
  
  .w-18, .h-18 {
    width: 2.5rem;
    height: 2.5rem;
  }
  
  .w-16, .h-16 {
    width: 2.5rem;
    height: 2.5rem;
  }
  
  .w-14, .h-14 {
    width: 2.25rem;
    height: 2.25rem;
  }
  
  .w-12, .h-12 {
    width: 2rem;
    height: 2rem;
  }
  
  /* Ultra-compact buttons */
  .w-24, .h-24 {
    width: 3rem;
    height: 3rem;
  }
  
  /* Reduce gap between elements */
  .gap-8 {
    gap: 1rem;
  }
  
  .gap-4 {
    gap: 0.75rem;
  }
  
  .gap-3 {
    gap: 0.5rem;
  }
  
  /* Make CTA more compact */
  .p-12 {
    padding: 1.5rem;
  }
  
  .max-w-4xl {
    max-width: 100%;
  }
}

/* Extra Small Devices (under 375px) */
@media (max-width: 374px) {
 
  
  .text-7xl {
    font-size: 1.875rem;
    line-height: 0.9;
  }
  
  .text-6xl {
    font-size: 1.75rem;
    line-height: 1;
  }
  
  .px-4 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
  }
  
  .p-8, .p-7, .p-6 {
    padding: 0.75rem;
  }
}

/* Performance optimizations for mobile */
@media (max-width: 768px) {
  /* Reduce motion for users who prefer it */
  @media (prefers-reduced-motion: reduce) {
    .service-card {
      animation: none;
      transition: none;
    }
    
    .floating-element {
      animation: none;
    }
    
    .glowing-orb {
      animation: none;
    }
    
    .glow-text {
      animation: none;
    }
  }
  
  /* Optimize for touch devices */
  .service-card {
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
  }
  
  .creative-button {
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
    min-height: 44px;
    min-width: 44px;
  }
}

/* Landscape orientation adjustments */
@media (max-width: 896px) and (orientation: landscape) {
  .py-20 {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  
  .py-24 {
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
  
  .py-32 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
  }
  
  .min-h-screen {
    min-height: auto;
  }
}
</style>

<section class="relative min-h-screen bg-gradient-to-br from-indigo-950 via-blue-900 to-slate-900 overflow-hidden" id="services">
  <!-- Ultra Creative Background -->
  <div class="absolute inset-0">
    <!-- Morphing Glowing Orbs - Responsive sizes -->
    <div class="absolute top-1/4 left-1/4 w-72 h-72 sm:w-80 sm:h-96 lg:w-96 lg:h-96 bg-gradient-to-r from-cyan-400 via-blue-500 to-blue-600 glowing-orb"></div>
    <div class="absolute bottom-1/4 right-1/4 w-60 h-60 sm:w-72 sm:h-72 lg:w-80 lg:h-96 bg-gradient-to-r from-pink-400 via-red-500 to-orange-600 glowing-orb" style="animation-delay: -4s;"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-48 h-48 sm:w-56 sm:h-56 lg:w-64 lg:h-64 bg-gradient-to-r from-emerald-400 via-teal-500 to-cyan-600 glowing-orb" style="animation-delay: -2s;"></div>
    
    <!-- Floating Geometric Elements - Responsive positioning -->
    <div class="absolute top-16 right-16 sm:top-20 sm:right-20 w-6 h-6 sm:w-8 sm:h-8 bg-yellow-400 floating-element opacity-60" style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
    <div class="absolute bottom-24 left-12 sm:bottom-32 sm:left-16 w-8 h-8 sm:w-12 sm:h-12 bg-green-400 rounded-full floating-element opacity-40" style="animation-delay: -1s;"></div>
    <div class="absolute top-1/3 right-1/3 w-4 h-4 sm:w-6 sm:h-6 bg-red-400 floating-element opacity-50" style="clip-path: polygon(20% 0%, 80% 0%, 100% 60%, 80% 100%, 20% 100%, 0% 60%); animation-delay: -3s;"></div>
    <div class="absolute bottom-1/3 left-1/3 w-6 h-6 sm:w-8 sm:h-8 lg:w-10 lg:h-10 bg-blue-400 floating-element opacity-30" style="clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%); animation-delay: -2.5s;"></div>
    
    <!-- Dynamic Grid Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="w-full h-full" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 30px 30px;"></div>
    </div>
    
    <!-- Gradient Mesh Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-transparent via-indigo-500/10 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-tl from-transparent via-blue-500/5 to-transparent"></div>
  </div>

  <!-- Responsive Container -->
  <div class="relative z-10 max-w-7xl mx-auto px-3 sm:px-4 lg:px-6  py-12 sm:py-16 md:py-20 lg:py-24 ">
    
    <!-- Revolutionary Header Design -->
    <div class="text-center mb-12 sm:mb-16 md:mb-20 lg:mb-24">
      <!-- Animated Badge -->
      <div class="inline-flex items-center gap-2 sm:gap-4 mb-6 sm:mb-8">
        <div class="flex items-center gap-2 sm:gap-3 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full px-4 py-2 sm:px-6 md:px-8 sm:py-3 md:py-4 hover:bg-white/10 transition-all duration-500 group">
          <div class="relative">
            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-cyan-400 rounded-full animate-ping absolute"></div>
            <div class="w-2 h-2 sm:w-3 sm:h-3 bg-cyan-400 rounded-full"></div>
          </div>
          <span class="text-white font-bold tracking-wider text-xs sm:text-sm">PREMIUM DIGITAL SERVICES</span>
          <div class="w-4 h-4 sm:w-6 sm:h-6 border-2 border-white/30 rounded-full flex items-center justify-center group-hover:rotate-180 transition-transform duration-700">
            <div class="w-1 h-1 sm:w-2 sm:h-2 bg-white rounded-full"></div>
          </div>
        </div>
      </div>

      <!-- Artistic Typography -->
      <div class="space-y-2 sm:space-y-4 mb-6 sm:mb-8">
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-black leading-tight">
          <?php if($title): ?>
            <?php
            // Split custom title into 3 parts: First word, Second word, Rest of words
            $title_clean = trim($title);
            $words = explode(' ', $title_clean);
            $total_words = count($words);
            
            // First word (Unleash style)
            $first_word = isset($words[0]) ? trim($words[0]) : '';
            
            // Second word (Digital style)  
            $second_word = isset($words[1]) ? trim($words[1]) : '';
            
            // Rest of words (Excellence style)
            $rest_words = '';
            if($total_words > 2) {
              $rest_words = implode(' ', array_slice($words, 2));
            }
            ?>
            
            <?php if(!empty($first_word)): ?>
              <span class="block text-white/90 glow-text"><?php echo esc_html($first_word); ?></span>
            <?php endif; ?>
            
            <?php if(!empty($second_word)): ?>
              <span class="block bg-gradient-to-r from-cyan-300 via-blue-400 to-blue-500 bg-clip-text text-transparent ">
                <?php echo esc_html($second_word); ?>
              </span>
            <?php endif; ?>
            
            <?php if(!empty($rest_words)): ?>
              <span class="block text-white/90 glow-text"><?php echo esc_html($rest_words); ?></span>
            <?php endif; ?>
            
          <?php else: ?>
            <span class="block text-white/90 glow-text">Unleash</span>
            <span class="block bg-gradient-to-r from-cyan-300 via-blue-400 to-blue-500 bg-clip-text text-transparent">
              Digital
            </span>
            <span class="block text-white/90 glow-text">Excellence</span>
          <?php endif; ?>
        </h2>
        
        <!-- Creative Subtitle -->
        <div class="relative inline-block">
          <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl  font-light text-gray-300 italic">
            <?php if($heading): ?>
              <?php echo esc_html($heading); ?>
            <?php else: ?>
              Where Innovation Meets Strategy
            <?php endif; ?>
          </h3>
          <div class="absolute -bottom-1 sm:-bottom-2 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-400 to-transparent"></div>
        </div>
      </div>

      <!-- Enhanced Description -->
      <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-300 max-w-xs sm:max-w-2xl md:max-w-3xl lg:max-w-4xl mx-auto leading-relaxed opacity-90">
        <?php if($subHeading): ?>
          <?php echo esc_html($subHeading); ?>
        <?php else: ?>
          Experience the perfect fusion of creativity, technology, and strategic thinking. 
          Our premium services are designed to transform your digital presence and accelerate your business growth.
        <?php endif; ?>
      </p>
    </div>

    <!-- Revolutionary Masonry Services Grid -->
    <div class="masonry-grid">
      
      <?php if($services && count($services) > 0): ?>
        <?php 
        // Array of gradient combinations for variety
        $gradients = [
          'from-cyan-500/90 via-blue-600/90 to-blue-700/90',
          'from-pink-500/90 via-rose-600/90 to-red-700/90',
          'from-emerald-500/90 via-teal-600/90 to-cyan-700/90',
          'from-orange-500/90 via-red-600/90 to-pink-700/90',
          'from-violet-500/90 via-blue-600/90 to-indigo-700/90',
          'from-yellow-500/90 via-orange-600/90 to-red-700/90',
          'from-slate-600/90 via-gray-700/90 to-slate-800/90',
          'from-blue-600/90 via-indigo-700/90 to-blue-800/90'
        ];
        
        // Array of different heights for masonry effect
        $heights = ['h-96', 'h-64', 'h-72', 'h-60', 'h-84', 'h-70', 'h-88', 'h-64'];
        
        // Array of different padding sizes
        $paddings = ['p-8', 'p-6', 'p-7', 'p-6', 'p-8', 'p-7', 'p-8', 'p-6'];
        
        // Array of different icon sizes
        $icon_sizes = [
          ['container' => 'w-20 h-20', 'icon' => 'w-10 h-10', 'rounded' => 'rounded-2xl'],
          ['container' => 'w-12 h-12', 'icon' => 'w-6 h-6', 'rounded' => 'rounded-xl'],
          ['container' => 'w-18 h-18', 'icon' => 'w-9 h-9', 'rounded' => 'rounded-xl'],
          ['container' => 'w-14 h-14', 'icon' => 'w-7 h-7', 'rounded' => 'rounded-xl'],
          ['container' => 'w-20 h-20', 'icon' => 'w-10 h-10', 'rounded' => 'rounded-2xl'],
          ['container' => 'w-16 h-16', 'icon' => 'w-8 h-8', 'rounded' => 'rounded-xl'],
          ['container' => 'w-22 h-22', 'icon' => 'w-11 h-11', 'rounded' => 'rounded-2xl'],
          ['container' => 'w-16 h-16', 'icon' => 'w-8 h-8', 'rounded' => 'rounded-xl']
        ];
        
        foreach($services as $index => $service): 
          $service_title = $service['title'] ?? '';
          $service_description = $service['description'] ?? '';
          $service_icon = $service['icon'] ?? '';
          $service_tags = $service['service_tags'] ?? [];
          
          // Get cycling values for variety
          $gradient = $gradients[$index % count($gradients)];
          $height = $heights[$index % count($heights)];
          $padding = $paddings[$index % count($paddings)];
          $icon_config = $icon_sizes[$index % count($icon_sizes)];
        ?>
        
        <div class="masonry-item">
          <div class="service-card relative bg-gradient-to-br <?php echo esc_attr($gradient); ?> backdrop-blur-lg rounded-3xl <?php echo esc_attr($padding); ?> text-white border border-white/10 hover:border-white/30 group <?php echo esc_attr($height); ?>">
            <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent rounded-3xl"></div>
            <div class="relative h-full flex flex-col justify-between gap-3">
            <div>
                <div class="<?php echo esc_attr($icon_config['container']); ?> bg-white/15 backdrop-blur-sm <?php echo esc_attr($icon_config['rounded']); ?> flex items-center justify-center mb-4 group-hover:scale-110 group-hover:rotate-12 transition-all duration-500">
                  <?php if($service_icon): ?>
                    <?php echo $service_icon; // This will output the raw SVG ?>
                  <?php else: ?>
                    <!-- Default icon if none provided -->
                    <svg class="<?php echo esc_attr($icon_config['icon']); ?> text-white" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                  <?php endif; ?>
                </div>
                
                <?php if($service_title): ?>
                  <h3 class="<?php echo ($height === 'h-88' || $height === 'h-84') ? 'text-3xl' : (($height === 'h-96' || $height === 'h-72') ? 'text-2xl' : 'text-xl'); ?> font-bold mb-<?php echo ($height === 'h-60') ? '2' : (($height === 'h-64') ? '3' : '4'); ?> <?php echo ($height === 'h-96') ? 'leading-tight' : ''; ?>">
                    <?php echo esc_html($service_title); ?>
                  </h3>
                <?php endif; ?>
                
                <?php if($service_description): ?>
                  <p class="text-white/90 opacity-90 text-sm <?php echo ($height === 'h-84') ? 'leading-relaxed mb-4' : ''; ?>">
                    <?php echo esc_html($service_description); ?>
                  </p>
                <?php endif; ?>
                
                <?php if($service_tags && count($service_tags) > 0): ?>
                  <?php 
                  // Extract unique tags and limit to prevent overcrowding
                  $unique_tags = [];
                  foreach($service_tags as $tag_item) {
                    if(isset($tag_item['tag']) && !empty(trim($tag_item['tag']))) {
                      $tag_clean = trim($tag_item['tag']);
                      if(!in_array($tag_clean, $unique_tags)) {
                        $unique_tags[] = $tag_clean;
                      }
                    }
                  }
                  
                  // Limit to 4 tags maximum for better layout
                  $unique_tags = array_slice($unique_tags, 0, 4);
                  $tag_count = count($unique_tags);
                  ?>
                  
                  <?php if($tag_count > 0): ?>
                    <div class="<?php 
                      if($tag_count === 4 && ($height === 'h-88' || $height === 'h-84')) {
                        echo 'grid grid-cols-2 gap-2';
                      } else {
                        echo 'flex flex-wrap gap-2';
                      }
                    ?> <?php echo ($height === 'h-84') ? '' : 'mt-2'; ?>">
                      <?php foreach($unique_tags as $tag): ?>
                        <span class="text-xs bg-white/20 px-2 py-1 rounded-full <?php echo ($tag_count === 4 && ($height === 'h-88' || $height === 'h-84')) ? 'text-center' : ''; ?> whitespace-nowrap">
                          <?php echo esc_html($tag); ?>
                        </span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              
              <div class="flex items-center justify-between">
                
                  <span></span>
                
                <button class="creative-button  w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 <?php echo ($height === 'h-64' || $height === 'h-60') ? 'self-end' : ''; ?>">
                  <svg class=" w-<?php echo ($height === 'h-96' || $height === 'h-88') ? '6' : '5'; ?> h-<?php echo ($height === 'h-96' || $height === 'h-88') ? '6' : '5'; ?> text-white group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <?php endforeach; ?>
        
      <?php else: ?>
        <!-- Fallback to static services if no dynamic content -->
       

        <!-- Add more static fallback cards here if needed -->
        
      <?php endif; ?>

    </div>

    <!-- Revolutionary CTA Section -->
    <div class="mt-24 text-center">
      <div class="relative inline-block">
        <!-- Glowing Background Effect -->
        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 via-blue-600 to-blue-700 rounded-3xl blur-xl opacity-30"></div>
        
        <!-- Main CTA Card -->
        <div class="relative bg-gradient-to-r from-cyan-500/80 via-blue-600/80 to-blue-700/80 backdrop-blur-xl border border-white/20 rounded-3xl p-12 text-white hover:scale-105 transition-all duration-700 group cursor-pointer">
          <div class="flex items-start justify-center gap-8 max-w-4xl">
            <!-- Icon -->
            <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-3xl flex items-center justify-center group-hover:rotate-12 transition-transform duration-500">
              <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
              </svg>
            </div>
            
            <!-- Content -->
            <div class="text-left flex-1">
              <h3 class="md:text-3xl text-2xl font-black mb-4 glow-text">Ready to Transform Your Digital Future?</h3>
              <p class="md:text-xl text-lg text-cyan-100 opacity-90 leading-relaxed">
                Let's collaborate and create something extraordinary that will elevate your brand to new heights
              </p>
            </div>
            
            <!-- Action Arrow -->
            <div class="w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center group-hover:translate-x-4 transition-transform duration-500">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
              </svg>
            </div>
          </div>
          
          <!-- Animated Particles -->
          <div class="absolute top-4 right-4 w-2 h-2 bg-white rounded-full opacity-60 animate-ping"></div>
          <div class="absolute bottom-6 left-6 w-1 h-1 bg-cyan-300 rounded-full opacity-80 animate-pulse" style="animation-delay: 1s;"></div>
          <div class="absolute top-1/2 left-4 w-1.5 h-1.5 bg-blue-300 rounded-full opacity-70 animate-bounce" style="animation-delay: 0.5s;"></div>
        </div>
      </div>
    </div>

  </div>
</section>
