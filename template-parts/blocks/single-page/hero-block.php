

<?php 
// Get ACF fields
$page_title = get_field('page_title');
$sub_title = get_field('sub_title');
$badge = get_field('badge');

// Set fallback values if fields are empty
$page_title = $page_title ?: 'Services';
$sub_title = $sub_title ?: 'What We Offer';
$badge = $badge ?: 'Digital Excellence';
?>

<!-- Single Page Hero Section -->
<section class="single-page-hero relative py-20 overflow-hidden">
  <!-- Enhanced Animated Background Elements -->
  <div class="absolute inset-0 z-0">
    <!-- Floating Orbs with Various Sizes -->
    <div class="float-element absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
    <div class="float-element absolute bottom-20 right-10 w-32 h-32 bg-white/10 rounded-full blur-xl" style="animation-delay: 2s;"></div>
    <div class="float-element absolute top-40 right-20 w-16 h-16 bg-white/10 rounded-full blur-xl" style="animation-delay: 1s;"></div>
    <div class="float-element absolute top-60 left-1/4 w-24 h-24 bg-purple-300/8 rounded-full blur-2xl" style="animation-delay: 3s;"></div>
    <div class="float-element absolute bottom-40 right-1/3 w-28 h-28 bg-blue-300/8 rounded-full blur-xl" style="animation-delay: 4s;"></div>
    
    <!-- Moving Particles -->
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    <div class="hero-particle"></div>
    
    <!-- Animated Geometric Shapes -->
    <div class="moving-shape triangle-shape" style="animation-delay: 1s;"></div>
    <div class="moving-shape square-shape" style="animation-delay: 2s;"></div>
    <div class="moving-shape circle-shape" style="animation-delay: 3s;"></div>
    <div class="moving-shape diamond-shape" style="animation-delay: 4s;"></div>
    <div class="moving-shape hexagon-shape" style="animation-delay: 5s;"></div>
    
  
    <!-- Orbital Elements -->
    <div class="orbital-container">
      <div class="orbital-element orbital-1"></div>
      <div class="orbital-element orbital-2"></div>
      <div class="orbital-element orbital-3"></div>
    </div>
    
    <!-- Ripple Effects -->
    <div class="ripple-effect ripple-1"></div>
    <div class="ripple-effect ripple-2"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center text-white">
      <h1 class="animate-fade-up text-5xl md:text-7xl font-bold mb-6 delay-100">
        <?php echo esc_html($page_title); ?>
      </h1>
      <p class="animate-fade-up text-xl md:text-2xl mb-8 delay-200 opacity-90">
        <?php echo esc_html($sub_title); ?>
      </p>
      <div class="animate-scale delay-300">
        <div class="inline-block bg-white/20 backdrop-blur-md rounded-full px-8 py-3">
          <span class="text-lg font-semibold"><?php echo esc_html($badge); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>