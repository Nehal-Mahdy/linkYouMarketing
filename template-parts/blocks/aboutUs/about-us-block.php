<?php 
// Get ACF fields for dynamic content
$company_description = get_field('company_description') ?: 'LinkYou.Marketing Is One of The Best Digital Marketing Agencies Mainly Located in Canada, Milton. Let us take care of your online presence!';
$team_members = get_field('team_members');
$company_stats = get_field('company_stats');
$services = get_field('services');
?>


<!-- Company Introduction Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden">
  <!-- Background Decoration -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-20 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <!-- Company Info -->
      <div class="animate-slide-left">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-8">
          About <span class="text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text">LinkYou.Marketing</span>
        </h2>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
          <?php echo esc_html($company_description); ?>
        </p>
        
        <!-- Key Points -->
        <div class="space-y-4">
          <?php 
          $key_points = [
            'We are Result Oriented',
            'We Create to Execute', 
            'Our Experts Work Harder',
            'We Resolve Problems',
            'Our Minds are Always Fresh',
            'We Manage Your Budget'
          ];
          $delay = 100;
          foreach($key_points as $point): ?>
            <div class="flex items-center animate-fade-up delay-<?php echo $delay; ?>">
              <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mr-4 animate-pulse"></div>
              <span class="text-gray-700 font-medium"><?php echo esc_html($point); ?></span>
            </div>
            <?php $delay += 50; ?>
          <?php endforeach; ?>
        </div>
        
        <div class="mt-8 animate-scale delay-400">
          <a href="#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Contact Us
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Stats Cards -->
      <div class="animate-slide-right">
        <div class="grid grid-cols-2 gap-6">
          <!-- Dynamic Stats from ACF -->
          <?php if($company_stats): ?>
            <?php $delay = 100; ?>
            <?php foreach($company_stats as $stat): ?>
              <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-up delay-<?php echo $delay; ?>">
                <div class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text mb-2">
                  <?php echo esc_html($stat['number'] ?: '00'); ?>
                </div>
                <div class="text-gray-600 font-medium">
                  <?php echo esc_html($stat['label'] ?: 'Metric'); ?>
                </div>
              </div>
              <?php $delay += 100; ?>
            <?php endforeach; ?>
          <?php else: ?>
            <!-- Fallback Stats -->
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-up delay-100">
              <div class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text mb-2">5/5</div>
              <div class="text-gray-600 font-medium">Stars Rated</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-up delay-200">
              <div class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text mb-2">50+</div>
              <div class="text-gray-600 font-medium">Projects</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-up delay-300">
              <div class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text mb-2">100K+</div>
              <div class="text-gray-600 font-medium">Lines of Code</div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-up delay-400">
              <div class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text mb-2">50K+</div>
              <div class="text-gray-600 font-medium">Followers</div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What We Provide Section -->
<section class="py-20 bg-white relative overflow-hidden">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl md:text-5xl font-bold text-gray-800 mb-6">
        What We Provide for Our <span class="text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text">Clients</span>
      </h2>
      <p class="animate-fade-up delay-100 text-xl text-gray-600 max-w-3xl mx-auto">
        And Much More ...
      </p>
      <div class="section-divider animate-scale delay-200"></div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php if($services): ?>
        <?php $delay = 100; ?>
        <?php foreach($services as $service): ?>
          <div class="service-card group animate-fade-up delay-<?php echo $delay; ?> bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
            <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">
              <?php echo esc_html($service['icon'] ?: '📈'); ?>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">
              <?php echo esc_html($service['title'] ?: 'Service Title'); ?>
            </h3>
            <p class="text-gray-600 leading-relaxed">
              <?php echo esc_html($service['description'] ?: 'Service description'); ?>
            </p>
          </div>
          <?php $delay += 100; ?>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Fallback Services -->
        <?php 
        $services_list = [
          ['icon' => '📈', 'title' => 'Effective Marketing Plans', 'description' => 'Strategic marketing solutions tailored to your business goals'],
          ['icon' => '💻', 'title' => 'Analyzing & Developing Websites', 'description' => 'Modern, responsive websites that convert visitors into customers'],
          ['icon' => '👥', 'title' => 'A Committed Team to Serve Your Business', 'description' => 'Dedicated professionals working exclusively for your success'],
          ['icon' => '📊', 'title' => 'Monitoring & Evaluating Your Business', 'description' => 'Continuous analysis and optimization of your business performance']
        ];
        
        $delay = 100;
        foreach($services_list as $service): ?>
          <div class="service-card group animate-fade-up delay-<?php echo $delay; ?> bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
            <div class="text-4xl mb-4 transform group-hover:scale-110 transition-transform duration-300">
              <?php echo $service['icon']; ?>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">
              <?php echo esc_html($service['title']); ?>
            </h3>
            <p class="text-gray-600 leading-relaxed">
              <?php echo esc_html($service['description']); ?>
            </p>
          </div>
          <?php $delay += 100; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-gradient-to-br from-blue-500 to-purple-600 text-white relative overflow-hidden">
  <!-- Animated Background -->
  <div class="absolute inset-0">
    <div class="float-element absolute top-20 left-20 w-32 h-32 bg-white/10 rounded-full blur-2xl"></div>
    <div class="float-element absolute bottom-20 right-20 w-40 h-40 bg-white/10 rounded-full blur-2xl" style="animation-delay: 2s;"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <!-- Content -->
      <div class="animate-slide-left">
        <h2 class="text-4xl md:text-5xl font-bold mb-8">
          Why <span class="text-yellow-300">LinkYou.Marketing</span>?
        </h2>
        <div class="space-y-6">
          <p class="text-xl leading-relaxed opacity-90">
            We know your business is successful, but LinkYou.Marketing could take you even further
          </p>
          <p class="text-lg leading-relaxed opacity-90">
            We customize a package specifically for you based on your business' needs and we take your business' success seriously
          </p>
        </div>
        
        <!-- Features List -->
        <div class="mt-8 space-y-4">
          <?php 
          $features = [
            'Customized Solutions for Your Business',
            'Result-Driven Marketing Strategies', 
            'Experienced Team of Professionals',
            '24/7 Support and Monitoring',
            'Proven Track Record of Success'
          ];
          $delay = 100;
          foreach($features as $feature): ?>
            <div class="flex items-center animate-fade-up delay-<?php echo $delay; ?>">
              <div class="w-2 h-2 bg-yellow-300 rounded-full mr-4 animate-pulse"></div>
              <span class="text-white/90"><?php echo esc_html($feature); ?></span>
            </div>
            <?php $delay += 50; ?>
          <?php endforeach; ?>
        </div>
      </div>
      
      <!-- Visual Element -->
      <div class="animate-slide-right">
        <div class="relative">
          <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
            <div class="text-center">
              <div class="w-24 h-24 mx-auto mb-6 bg-gradient-to-br from-yellow-300 to-orange-400 rounded-full flex items-center justify-center text-4xl animate-bounce">
                🚀
              </div>
              <h3 class="text-2xl font-bold mb-4">Ready to Grow?</h3>
              <p class="text-white/80 mb-6">Let's take your business to the next level</p>
              <button class="bg-white text-blue-600 px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors duration-300 transform hover:scale-105">
                Get Started Today
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platforms Support Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl md:text-5xl font-bold text-gray-800 mb-6">
        Our Services and Platforms <span class="text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text">Support Your Business</span>
      </h2>
      <div class="section-divider animate-scale delay-200"></div>
    </div>
    
    <!-- Platforms Grid -->
    <div class="flex flex-wrap justify-center items-center gap-12">
      <?php 
      $platforms = [
        ['name' => 'Facebook', 'icon' => '📘', 'color' => 'from-blue-600 to-blue-700'],
        ['name' => 'LinkedIn', 'icon' => '💼', 'color' => 'from-blue-700 to-blue-800'],
        ['name' => 'Instagram', 'icon' => '📷', 'color' => 'from-pink-500 to-purple-600'],
        ['name' => 'Twitter', 'icon' => '🐦', 'color' => 'from-blue-400 to-blue-500'],
        ['name' => 'YouTube', 'icon' => '📺', 'color' => 'from-red-500 to-red-600'],
        ['name' => 'TikTok', 'icon' => '🎵', 'color' => 'from-gray-800 to-gray-900']
      ];
      
      $delay = 100;
      foreach($platforms as $platform): ?>
        <div class="platform-card group animate-fade-up delay-<?php echo $delay; ?> text-center transform hover:scale-110 transition-all duration-300">
          <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br <?php echo $platform['color']; ?> rounded-2xl flex items-center justify-center text-3xl text-white group-hover:rotate-12 transition-transform duration-300 shadow-lg">
            <?php echo $platform['icon']; ?>
          </div>
          <h3 class="font-semibold text-gray-800"><?php echo esc_html($platform['name']); ?></h3>
        </div>
        <?php $delay += 100; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Team Members Section -->
<?php if($team_members): ?>
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl md:text-5xl font-bold text-gray-800 mb-6">
        Meet Our <span class="text-transparent bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text">Team</span>
      </h2>
      <p class="animate-fade-up delay-100 text-xl text-gray-600 max-w-3xl mx-auto">
        The passionate professionals behind LinkYou.Marketing
      </p>
      <div class="section-divider animate-scale delay-200"></div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php $delay = 100; ?>
      <?php foreach($team_members as $member): ?>
        <div class="team-card group animate-fade-up delay-<?php echo $delay; ?> bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
          <?php if($member['image']): ?>
            <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-gradient-to-r from-blue-500 to-purple-600">
              <img src="<?php echo esc_url($member['image']['url']); ?>" alt="<?php echo esc_attr($member['name']); ?>" class="w-full h-full object-cover">
            </div>
          <?php else: ?>
            <div class="w-32 h-32 mx-auto mb-4 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-3xl font-bold">
              <?php echo esc_html(substr($member['name'], 0, 1)); ?>
            </div>
          <?php endif; ?>
          
          <div class="text-center">
            <h3 class="text-xl font-bold text-gray-800 mb-2">
              <?php echo esc_html($member['name']); ?>
            </h3>
            <p class="text-blue-600 font-semibold mb-3">
              <?php echo esc_html($member['position']); ?>
            </p>
            <?php if($member['bio']): ?>
              <p class="text-gray-600 leading-relaxed">
                <?php echo esc_html($member['bio']); ?>
              </p>
            <?php endif; ?>
          </div>
        </div>
        <?php $delay += 100; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
