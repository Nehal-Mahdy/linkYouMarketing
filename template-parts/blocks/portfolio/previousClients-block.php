<?php 
// Get clients from ACF repeater field
?>
<!-- Client Showcase Section -->
<section class="py-20 client-showcase-bg relative">
  <!-- Floating Achievement Badges - Hidden on mobile -->
  <div class="floating-badges-wrapper hidden lg:block">
    <div class="floating-badge top-20 left-10" style="animation-delay: 0s;">✨ Trusted Partners</div>
    <div class="floating-badge top-40 right-20" style="animation-delay: 2s;">🚀 Growing Together</div>
    <div class="floating-badge bottom-32 left-20" style="animation-delay: 4s;">💼 Success Stories</div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl font-bold text-gray-800 mb-4">Companies We Had Worked For</h2>
      <p class="animate-fade-up delay-200 text-xl text-gray-600 mb-8">Know More About Our Works</p>
      <div class="section-divider animate-scale delay-300"></div>
    </div>
    
    <!-- Enhanced Client Logos Grid -->
    <div class="client-grid-enhanced grid grid-cols-2 md:grid-cols-4 gap-8 mb-20">
      <?php if (have_rows('clients')): ?>
        <?php $delay_counter = 1; ?>
        <?php while (have_rows('clients')): the_row(); ?>
          <?php 
            $company_name = get_sub_field('company_name');
            $client_image = get_sub_field('image');
            $delay_class = 'animate-scale-delay-' . $delay_counter;
          ?>
          <div class="logo-container client-logo <?php echo $delay_class; ?>">
            <div class="text-center">
              <?php if ($client_image): ?>
                <img src="<?php echo esc_url($client_image); ?>" 
                     alt="<?php echo esc_attr($company_name ?: $company_name); ?>" 
                     class="max-w-full h-auto mx-auto mb-3 transition-transform duration-300 hover:scale-105">
              <?php else: ?>
                <img src="https://placehold.co/600x400/png" 
                     alt="<?php echo esc_attr($company_name); ?>" 
                     class="max-w-full h-auto mx-auto mb-3 transition-transform duration-300 hover:scale-105">
              <?php endif; ?>
              <?php if ($company_name): ?>
                <p class="text-sm text-gray-600 font-medium"><?php echo esc_html($company_name); ?></p>
              <?php endif; ?>
            </div>
          </div>
          <?php $delay_counter++; ?>
        <?php endwhile; ?>
      <?php else: ?>
        <!-- Fallback static content if no clients are added -->
        <div class="logo-container client-logo animate-scale delay-100">
          <div class="text-center">
            <img src="https://placehold.co/600x400/png" alt="LinkYou Marketing" class="max-w-full h-auto mx-auto mb-3">
            <p class="text-sm text-gray-600 font-medium">Digital Marketing</p>
          </div>
        </div>
        <div class="logo-container client-logo animate-scale delay-200">
          <div class="text-center">
            <img src="https://placehold.co/600x400/png" alt="TechCorp Solutions" class="max-w-full h-auto mx-auto mb-3">
            <p class="text-sm text-gray-600 font-medium">Web Development</p>
          </div>
        </div>
        <div class="logo-container client-logo animate-scale delay-300">
          <div class="text-center">
            <img src="https://placehold.co/600x400/png" alt="InnovateX Labs" class="max-w-full h-auto mx-auto mb-3">
            <p class="text-sm text-gray-600 font-medium">App Development</p>
          </div>
        </div>
        <div class="logo-container client-logo animate-scale delay-400">
          <div class="text-center">
            <img src="https://placehold.co/600x400/png" alt="Global Company" class="max-w-full h-auto mx-auto mb-3">
            <p class="text-sm text-gray-600 font-medium">E-commerce</p>
          </div>
        </div>
      <?php endif; ?>
    </div>
    
    <!-- Enhanced Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
      <?php if (have_rows('company_stats')): ?>
        <?php $stats_delay = 100; ?>
        <?php while (have_rows('company_stats')): the_row(); ?>
          <?php 
            $icon = get_sub_field('icon') ?: '📊';
            $number = get_sub_field('number') ?: '0';
            $title = get_sub_field('title') ?: 'Projects';
            $subtitle = get_sub_field('subtitle') ?: 'Completed';
          ?>
          <div class="stats-card animate-fade-up delay-<?php echo $stats_delay; ?>">
            <div class="stats-icon">
              <?php echo esc_html($icon); ?>
            </div>
            <div class="stats-counter" data-target="<?php echo esc_attr($number); ?>">0</div>
            <p class="text-gray-600 font-semibold mt-2"><?php echo esc_html($title); ?></p>
            <p class="text-sm text-gray-500 mt-1"><?php echo esc_html($subtitle); ?></p>
          </div>
          <?php $stats_delay += 100; ?>
        <?php endwhile; ?>
      <?php else: ?>
        <!-- Fallback static stats if no custom stats are set -->
        <div class="stats-card animate-fade-up delay-100">
          <div class="stats-icon">
            📊
          </div>
          <div class="stats-counter" data-target="50">0</div>
          <p class="text-gray-600 font-semibold mt-2">Projects Completed</p>
          <p class="text-sm text-gray-500 mt-1">Delivered with Excellence</p>
        </div>
        <div class="stats-card animate-fade-up delay-200">
          <div class="stats-icon">
            😊
          </div>
          <div class="stats-counter" data-target="30">0</div>
          <p class="text-gray-600 font-semibold mt-2">Happy Clients</p>
          <p class="text-sm text-gray-500 mt-1">Satisfaction Guaranteed</p>
        </div>
        <div class="stats-card animate-fade-up delay-300">
          <div class="stats-icon">
            🎯
          </div>
          <div class="stats-counter" data-target="5">0</div>
          <p class="text-gray-600 font-semibold mt-2">Years Experience</p>
          <p class="text-sm text-gray-500 mt-1">Industry Expertise</p>
        </div>
        <div class="stats-card animate-fade-up delay-400">
          <div class="stats-icon">
            👥
          </div>
          <div class="stats-counter" data-target="15">0</div>
          <p class="text-gray-600 font-semibold mt-2">Team Members</p>
          <p class="text-sm text-gray-500 mt-1">Dedicated Professionals</p>
        </div>
      <?php endif; ?>
    </div>
    
    <!-- Client Testimonials Section -->
    <div class="mt-20 text-center mb-16">      
      <?php 
      // Count total testimonials first
      $total_testimonials = 0;
      if (have_rows('testimonials')):
        while (have_rows('testimonials')): the_row();
          $total_testimonials++;
        endwhile;
      endif;
      ?>
      
      <?php if ($total_testimonials > 3): ?>
        <!-- Carousel Layout for 4+ testimonials -->
        <div class="max-w-6xl mx-auto">
          <!-- Carousel Navigation - Above content for better spacing -->
          <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-800">What Our Clients Say</h3>
            <div class="flex space-x-4">
              <button class="carousel-btn carousel-prev bg-white shadow-lg rounded-full p-3 hover:bg-gray-50 transition-colors duration-300">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
              </button>
              <button class="carousel-btn carousel-next bg-white shadow-lg rounded-full p-3 hover:bg-gray-50 transition-colors duration-300">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>
            </div>
          </div>
          
          <div class="testimonials-carousel relative overflow-hidden" data-total="<?php echo ceil($total_testimonials / 3); ?>">
            <div class="testimonials-track flex transition-transform duration-500 ease-in-out">
                <?php if (have_rows('testimonials')): ?>
                  <?php $testimonial_counter = 0; ?>
                  <?php $slide_counter = 0; ?>
                  <?php while (have_rows('testimonials')): the_row(); ?>
                    <?php 
                      // Start new slide every 3 testimonials
                      if ($testimonial_counter % 3 === 0) {
                        if ($testimonial_counter > 0) echo '</div></div>'; // Close previous slide
                        echo '<div class="testimonial-slide flex-none w-full"><div class="grid grid-cols-1 md:grid-cols-3 gap-6 min-h-[300px] py-2">';
                      }
                      
                      $name = get_sub_field('name') ?: 'Anonymous';
                      $position = get_sub_field('position') ?: 'Client';
                      $company = get_sub_field('company') ?: '';
                      $testimonial = get_sub_field('testimonial') ?: 'Great service!';
                      $rating = get_sub_field('rating') ?: 5;
                      $initials = substr($name, 0, 2);
                      
                      // Generate random gradient colors for avatar
                      $gradients = [
                        'from-blue-500 to-purple-500',
                        'from-green-500 to-blue-500',  
                        'from-purple-500 to-pink-500',
                        'from-orange-500 to-red-500',
                        'from-teal-500 to-green-500'
                      ];
                      $gradient = $gradients[$testimonial_counter % count($gradients)];
                    ?>
                    <div class="testimonial-card bg-white p-6 rounded-xl shadow-lg border border-gray-100 h-full flex flex-col justify-between">
                      <div class="text-4xl mb-4">
                        <?php echo str_repeat('⭐', $rating); ?>
                      </div>
                      <p class="text-gray-600 italic mb-4 flex-grow">"<?php echo esc_html($testimonial); ?>"</p>
                      <div class="flex items-center justify-center mt-auto">
                        <div class="w-12 h-12 bg-gradient-to-r <?php echo $gradient; ?> rounded-full flex items-center justify-center mr-3">
                          <span class="text-white font-bold"><?php echo esc_html(strtoupper($initials)); ?></span>
                        </div>
                        <div class="text-left">
                          <p class="font-semibold text-gray-800"><?php echo esc_html($name); ?></p>
                          <p class="text-sm text-gray-600"><?php echo esc_html($position); ?></p>
                          <?php if ($company): ?>
                            <p class="text-sm text-[#3773C9] font-medium"><?php echo esc_html($company); ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <?php $testimonial_counter++; ?>
                  <?php endwhile; ?>
                  <?php echo '</div></div>'; // Close last slide ?>
                <?php endif; ?>
            </div>
          </div>
          
          <!-- Carousel Indicators -->
          <div class="flex justify-center mt-8 space-x-2">
            <?php for ($i = 0; $i < ceil($total_testimonials / 3); $i++): ?>
              <button class="carousel-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-[#3773C9] transition-colors duration-300 <?php echo $i === 0 ? 'bg-[#3773C9]' : ''; ?>" data-slide="<?php echo $i; ?>"></button>
            <?php endfor; ?>
          </div>
        </div>
        
      <?php else: ?>
        <!-- Grid Layout for 1-3 testimonials -->
        <h3 class="animate-fade-up text-2xl font-bold text-gray-800 mb-8">What Our Clients Say</h3>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-<?php echo min($total_testimonials ?: 3, 3); ?> gap-6">
          <?php if (have_rows('testimonials')): ?>
            <?php $testimonial_counter = 0; ?>
            <?php $animation_classes = ['animate-slide-left', 'animate-fade-up', 'animate-slide-right']; ?>
            <?php while (have_rows('testimonials')): the_row(); ?>
              <?php 
                $name = get_sub_field('name') ?: 'Anonymous';
                $position = get_sub_field('position') ?: 'Client';
                $company = get_sub_field('company') ?: '';
                $testimonial = get_sub_field('testimonial') ?: 'Great service!';
                $rating = get_sub_field('rating') ?: 5;
                $initials = substr($name, 0, 2);
                $delay = ($testimonial_counter % 3 + 1) * 100;
                $animation_class = $animation_classes[$testimonial_counter % 3];
                
                // Generate random gradient colors for avatar
                $gradients = [
                  'from-blue-500 to-purple-500',
                  'from-green-500 to-blue-500',  
                  'from-purple-500 to-pink-500',
                  'from-orange-500 to-red-500',
                  'from-teal-500 to-green-500'
                ];
                $gradient = $gradients[$testimonial_counter % count($gradients)];
              ?>
              <div class="testimonial-card <?php echo $animation_class; ?> delay-<?php echo $delay; ?> bg-white p-6 rounded-xl shadow-lg border border-gray-100 h-full flex flex-col justify-between min-h-[300px]">
                <div class="text-4xl mb-4">
                  <?php echo str_repeat('⭐', $rating); ?>
                </div>
                <p class="text-gray-600 italic mb-4 flex-grow">"<?php echo esc_html($testimonial); ?>"</p>
                <div class="flex items-center justify-center mt-auto">
                  <div class="w-12 h-12 bg-gradient-to-r <?php echo $gradient; ?> rounded-full flex items-center justify-center mr-3">
                    <span class="text-white font-bold"><?php echo esc_html(strtoupper($initials)); ?></span>
                  </div>
                  <div class="text-left">
                    <p class="font-semibold text-gray-800"><?php echo esc_html($name); ?></p>
                    <p class="text-sm text-gray-600"><?php echo esc_html($position); ?></p>
                    <?php if ($company): ?>
                      <p class="text-sm text-[#3773C9] font-medium"><?php echo esc_html($company); ?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php $testimonial_counter++; ?>
            <?php endwhile; ?>
          <?php else: ?>
            <!-- Fallback static testimonials -->
            <div class="testimonial-card animate-slide-left delay-100 bg-white p-6 rounded-xl shadow-lg border border-gray-100 h-full flex flex-col justify-between min-h-[300px]">
              <div class="text-4xl mb-4">⭐⭐⭐⭐⭐</div>
              <p class="text-gray-600 italic mb-4 flex-grow">"Outstanding service and exceptional results. LinkYou transformed our digital presence completely."</p>
              <div class="flex items-center justify-center mt-auto">
                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mr-3">
                  <span class="text-white font-bold">JD</span>
                </div>
                <div class="text-left">
                  <p class="font-semibold text-gray-800">John Davis</p>
                  <p class="text-sm text-gray-600">CEO</p>
                  <p class="text-sm text-[#3773C9] font-medium">TechCorp</p>
                </div>
              </div>
            </div>
            
            <div class="testimonial-card animate-fade-up delay-200 bg-white p-6 rounded-xl shadow-lg border border-gray-100 h-full flex flex-col justify-between min-h-[300px]">
              <div class="text-4xl mb-4">⭐⭐⭐⭐⭐</div>
              <p class="text-gray-600 italic mb-4 flex-grow">"Professional team with creative solutions. Highly recommend their services to anyone."</p>
              <div class="flex items-center justify-center mt-auto">
                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mr-3">
                  <span class="text-white font-bold">SM</span>
                </div>
                <div class="text-left">
                  <p class="font-semibold text-gray-800">Sarah Miller</p>
                  <p class="text-sm text-gray-600">Founder</p>
                  <p class="text-sm text-[#3773C9] font-medium">InnovateX</p>
                </div>
              </div>
            </div>
            
            <div class="testimonial-card animate-slide-right delay-300 bg-white p-6 rounded-xl shadow-lg border border-gray-100 h-full flex flex-col justify-between min-h-[300px]">
              <div class="text-4xl mb-4">⭐⭐⭐⭐⭐</div>
              <p class="text-gray-600 italic mb-4 flex-grow">"Incredible attention to detail and customer service. They exceeded all our expectations."</p>
              <div class="flex items-center justify-center mt-auto">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mr-3">
                  <span class="text-white font-bold">MK</span>
                </div>
                <div class="text-left">
                  <p class="font-semibold text-gray-800">Mike Kumar</p>
                  <p class="text-sm text-gray-600">Director</p>
                  <p class="text-sm text-[#3773C9] font-medium">Global Co</p>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 bg-gradient-to-br from-[#3773C9] to-[#1E4CA3] text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="animate-fade-up text-4xl font-bold mb-6">We are determined to take your business to success</h2>
    <div class="animate-fade-up delay-200 max-w-3xl mx-auto mb-8">
      <p class="text-xl mb-4">Trusting us is the key to your business success.</p>
      <p class="text-lg opacity-90 mb-4">Once we manage your business, we consider it as our business.</p>
      <p class="text-lg opacity-90">LinkYou.Marketing makes your business expandable, as we have a huge network all around the world to grow your business.</p>
    </div>
    <div class="animate-scale delay-400">
      <button class="bg-white text-[#3773C9] px-8 py-4 rounded-xl font-bold text-lg hover:transform hover:scale-105 transition-all duration-300 shadow-lg">
        Contact Us Now and Get a Free Consultation
      </button>
    </div>
  </div>
</section>

<!-- Newsletter & Updates Section -->
<section class="py-20 bg-white relative overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0">
    <div class="float-element absolute top-20 right-20 w-32 h-32 bg-gradient-to-br from-blue-100/30 to-purple-100/20 rounded-full blur-2xl" style="animation-delay: 2s;"></div>
    <div class="float-element absolute bottom-20 left-20 w-40 h-40 bg-gradient-to-br from-purple-100/20 to-blue-100/30 rounded-full blur-2xl" style="animation-delay: 4s;"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl font-bold text-gray-800 mb-6">Stay Updated with Our Latest Work</h2>
      <p class="animate-fade-up delay-200 text-xl text-gray-600 mb-8">Subscribe to get the latest updates from LinkYou.Marketing</p>
      <div class="section-divider animate-scale delay-300"></div>
    </div>
    
    <div class="max-w-4xl mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Newsletter Form -->
        <div class="animate-slide-left delay-100">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Get the Latest Updates</h3>
          <p class="text-gray-600 mb-6">Enter your email address and stay informed about our newest projects, services, and industry insights.</p>
          
          <div class="space-y-4">
            <div class="flex flex-col sm:flex-row gap-4">
              <input 
                type="email" 
                placeholder="Enter your email address" 
                class="flex-1 px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-[#3773C9] focus:outline-none transition-colors duration-300"
              >
              <button class="px-8 py-3 bg-gradient-to-r from-[#3773C9] to-[#1E4CA3] text-white font-semibold rounded-lg hover:transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                Subscribe Now!
              </button>
            </div>
            <p class="text-sm text-gray-500">We respect your privacy. Unsubscribe at any time.</p>
          </div>
        </div>
        
        <!-- Social Media Links -->
        <div class="animate-slide-right delay-200">
          <h3 class="text-2xl font-bold text-gray-800 mb-4">Follow Us</h3>
          <p class="text-gray-600 mb-6">Connect with us on social media for daily updates and behind-the-scenes content.</p>
          
          <div class="grid grid-cols-2 gap-4">
            <a href="#" class="flex items-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:transform hover:scale-105 transition-all duration-300 group">
              <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-600 transition-colors">
                <span class="text-white font-bold">f</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Facebook</h4>
                <p class="text-sm text-gray-600">Follow us</p>
              </div>
            </a>
            
            <a href="#" class="flex items-center p-4 bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl hover:transform hover:scale-105 transition-all duration-300 group">
              <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center mr-4 group-hover:bg-pink-600 transition-colors">
                <span class="text-white font-bold">📷</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">Instagram</h4>
                <p class="text-sm text-gray-600">@linkyou</p>
              </div>
            </a>
            
            <a href="#" class="flex items-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl hover:transform hover:scale-105 transition-all duration-300 group">
              <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mr-4 group-hover:bg-blue-800 transition-colors">
                <span class="text-white font-bold">in</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">LinkedIn</h4>
                <p class="text-sm text-gray-600">Connect</p>
              </div>
            </a>
            
            <a href="#" class="flex items-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-xl hover:transform hover:scale-105 transition-all duration-300 group">
              <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4 group-hover:bg-green-600 transition-colors">
                <span class="text-white font-bold">📱</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                <p class="text-sm text-gray-600">Chat now</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Quick Stats -->
      <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div class="animate-fade-up delay-100">
          <div class="text-3xl font-bold text-[#3773C9] mb-2">500+</div>
          <p class="text-gray-600">Newsletter Subscribers</p>
        </div>
        <div class="animate-fade-up delay-200">
          <div class="text-3xl font-bold text-[#3773C9] mb-2">1K+</div>
          <p class="text-gray-600">Social Followers</p>
        </div>
        <div class="animate-fade-up delay-300">
          <div class="text-3xl font-bold text-[#3773C9] mb-2">24/7</div>
          <p class="text-gray-600">Support Available</p>
        </div>
        <div class="animate-fade-up delay-400">
          <div class="text-3xl font-bold text-[#3773C9] mb-2">100%</div>
          <p class="text-gray-600">Client Satisfaction</p>
        </div>
      </div>
    </div>
  </div>
</section>
