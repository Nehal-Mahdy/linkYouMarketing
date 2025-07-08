<?php 
$services = get_field('services');
$section_title = get_field('section_title');
$sub_heading = get_field('sub_heading');

// Set fallback values if fields are empty
$section_title = $section_title ?: 'Our Premium Services';
$sub_heading = $sub_heading ?: 'Transforming businesses through innovative digital solutions and cutting-edge technology';

$services_per_page = 8; // Number of services to show per page
$current_page = isset($_GET['service_page']) ? max(1, intval($_GET['service_page'])) : 1;
$total_services = $services ? count($services) : 0;
$total_pages = ceil($total_services / $services_per_page);
$offset = ($current_page - 1) * $services_per_page;
$current_services = $services ? array_slice($services, $offset, $services_per_page) : array();
?>

<!-- Advanced Services Section with Animations -->



<!-- Services Grid Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden">
  <!-- Background Decoration -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-20 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
  </div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16">
      <h2 class="animate-fade-up text-4xl md:text-5xl font-bold text-gray-800 mb-6">
        <?php echo esc_html($section_title); ?>
      </h2>
      <p class="animate-fade-up delay-100 text-xl text-gray-600 max-w-3xl mx-auto mb-8">
        <?php echo esc_html($sub_heading); ?>
      </p>
      <div class="section-divider animate-scale delay-200"></div>
    </div>
    
    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-16" id="services-grid">
      <?php if($current_services): ?>
        <?php $delay = 100; ?>
        <?php foreach($current_services as $service): ?>
          <?php 
          $service_title = $service['service_title'] ?: 'Digital Service';
          $service_description = $service['service_description'] ?: 'Professional digital solutions for your business needs';
          $service_icon = $service['service_icon'] ?: '🚀';
          $tags = $service['tags'] ?: array();
          
          // Create a unique gradient for each service
          $gradients = [
            'from-blue-500 to-purple-600',
            'from-purple-500 to-pink-600', 
            'from-green-500 to-blue-500',
            'from-orange-500 to-red-500',
            'from-teal-500 to-cyan-500',
            'from-indigo-500 to-purple-500',
            'from-pink-500 to-rose-500',
            'from-cyan-500 to-blue-500'
          ];
          $gradient = $gradients[array_rand($gradients)];
          ?>
          
          <div class="service-card group rounded-2xl animate-fade-up delay-<?php echo $delay; ?> transform hover:-translate-y-2 transition-all duration-500 cursor-pointer">
            <!-- Card Background with Gradient Border -->
            <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden border border-gray-100 h-full">
              <!-- Animated Gradient Border -->
              <div class="absolute inset-0 bg-gradient-to-r <?php echo $gradient; ?> opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
              <div class="absolute inset-[1px] bg-white rounded-2xl"></div>
              
              <!-- Card Content -->
              <div class="relative p-6 h-full flex flex-col">
                <!-- Icon Container -->
                <div class="relative mb-6">
                  <div class="w-16 h-16 mx-auto bg-gradient-to-br <?php echo $gradient; ?> rounded-xl flex items-center justify-center text-white text-2xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 animate-glow-pulse">
                    <?php echo $service_icon; ?>
                  </div>
                  <!-- Glow Effect -->
                  <div class="absolute inset-0 w-16 h-16 mx-auto bg-gradient-to-br <?php echo $gradient; ?> rounded-xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-300"></div>
                </div>
                
                <!-- Title -->
                <h3 class="text-xl text-center font-bold text-gray-800 mb-3 transition-all duration-300">
                  <?php echo esc_html($service_title); ?>
                </h3>
                
                <!-- Description -->
                <p class="text-gray-600 mb-6 leading-relaxed flex-grow">
                  <?php echo esc_html($service_description); ?>
                </p>
                
                <!-- Tags -->
                <?php if($tags): ?>
                  <div class="flex flex-wrap gap-2 mb-6">
                    <?php foreach($tags as $tag_item): ?>
                      <?php if(!empty($tag_item['tag'])): ?>
                        <span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                          <?php echo esc_html($tag_item['tag']); ?>
                        </span>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                
                <!-- Action Button -->
                <div class="mt-auto">
                  <button class="creative-button w-full py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r <?php echo $gradient; ?> hover:shadow-lg transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">Learn More</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <?php 
          $delay += 100; 
          if($delay > 800) $delay = 100; // Reset delay after 8 items
          ?>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Fallback Services -->
        <?php 
        $fallback_services = [
          ['title' => 'Web Development', 'description' => 'Custom web applications built with modern technologies', 'icon' => '💻', 'tags' => ['React', 'Node.js', 'PHP']],
          ['title' => 'Digital Marketing', 'description' => 'Comprehensive marketing strategies to grow your online presence', 'icon' => '📱', 'tags' => ['SEO', 'Social Media', 'PPC']],
          ['title' => 'Brand Design', 'description' => 'Creative branding solutions that make your business stand out', 'icon' => '🎨', 'tags' => ['Logo', 'UI/UX', 'Graphics']],
          ['title' => 'E-commerce', 'description' => 'Full-featured online stores with secure payment systems', 'icon' => '🛒', 'tags' => ['WooCommerce', 'Shopify', 'Magento']]
        ];
        
        $delay = 100;
        foreach($fallback_services as $service):
          $gradients = ['from-blue-500 to-purple-600', 'from-purple-500 to-pink-600', 'from-green-500 to-blue-500', 'from-orange-500 to-red-500'];
          $gradient = $gradients[array_rand($gradients)];
        ?>
          <div class="service-card group animate-fade-up delay-<?php echo $delay; ?> transform hover:-translate-y-2 transition-all duration-500 cursor-pointer">
            <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden border border-gray-100 h-full">
              <div class="absolute inset-0 bg-gradient-to-r <?php echo $gradient; ?> opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-2xl"></div>
              <div class="absolute inset-[1px] bg-white rounded-2xl"></div>
              
              <div class="relative p-6 h-full flex flex-col">
                <div class="relative mb-6">
                  <div class="w-16 h-16 mx-auto bg-gradient-to-br <?php echo $gradient; ?> rounded-xl flex items-center justify-center text-white text-2xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 animate-glow-pulse">
                    <?php echo $service['icon']; ?>
                  </div>
                  <div class="absolute inset-0 w-16 h-16 mx-auto bg-gradient-to-br <?php echo $gradient; ?> rounded-xl opacity-0 group-hover:opacity-30 blur-xl transition-all duration-300"></div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-800 mb-3 transition-all duration-300">
                  <?php echo esc_html($service['title']); ?>
                </h3>
                
                <p class="text-gray-600 mb-6 leading-relaxed flex-grow">
                  <?php echo esc_html($service['description']); ?>
                </p>
                
                <div class="flex flex-wrap gap-2 mb-6">
                  <?php foreach($service['tags'] as $tag): ?>
                    <span class="inline-block bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm font-medium group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                      <?php echo esc_html($tag); ?>
                    </span>
                  <?php endforeach; ?>
                </div>
                
                <div class="mt-auto">
                  <button class="creative-button w-full py-3 px-6 rounded-lg font-semibold text-white bg-gradient-to-r <?php echo $gradient; ?> hover:shadow-lg transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                    <span class="relative z-10">Learn More</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <?php $delay += 100; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    
    <!-- Pagination -->
    <?php if($total_pages > 1): ?>
      <div class="flex justify-center items-center space-x-2 mt-12">
        <!-- Previous Button -->
        <?php if($current_page > 1): ?>
          <a href="?service_page=<?php echo $current_page - 1; ?>" class="pagination-btn bg-white text-gray-600 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white px-4 py-2 rounded-lg border border-gray-200 transition-all duration-300 flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Previous
          </a>
        <?php endif; ?>
        
        <!-- Page Numbers -->
        <?php for($i = 1; $i <= $total_pages; $i++): ?>
          <a href="?service_page=<?php echo $i; ?>" class="pagination-btn <?php echo $i == $current_page ? 'bg-gradient-to-r from-blue-500 to-purple-600 text-white' : 'bg-white text-gray-600 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white'; ?> px-4 py-2 rounded-lg border border-gray-200 transition-all duration-300 font-semibold">
            <?php echo $i; ?>
          </a>
        <?php endfor; ?>
        
        <!-- Next Button -->
        <?php if($current_page < $total_pages): ?>
          <a href="?service_page=<?php echo $current_page + 1; ?>" class="pagination-btn bg-white text-gray-600 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-600 hover:text-white px-4 py-2 rounded-lg border border-gray-200 transition-all duration-300 flex items-center">
            Next
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </a>
        <?php endif; ?>
      </div>
      
      <!-- Pagination Info -->
      <div class="text-center mt-6 text-gray-600">
        <p>Showing <?php echo $offset + 1; ?>-<?php echo min($offset + $services_per_page, $total_services); ?> of <?php echo $total_services; ?> services</p>
      </div>
    <?php endif; ?>
  </div>
</section>