<?php 
$projects = get_field('projects');



?>

<!-- Advanced Portfolio Section with Animations -->

<?php
// Get unique categories from projects for filter buttons
$unique_categories = array();
if($projects && is_array($projects)) {
  foreach($projects as $project) {
    $categories = $project['category']; // This is now a repeater
    if($categories && is_array($categories)) {
      foreach($categories as $cat) {
        $category_name = $cat['category_name'];
        if($category_name && !in_array($category_name, $unique_categories)) {
          $unique_categories[] = $category_name;
        }
      }
    }
  }
}

// Add default category if no categories exist
if(empty($unique_categories)) {
  $unique_categories[] = 'General';
}
?>

<!-- Filter Section -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="animate-fade-up text-4xl font-bold text-gray-800 mb-4">All Works</h2>
      <div class="section-divider animate-scale delay-200"></div>
    </div>
    
    <!-- Dynamic Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mb-12" id="portfolio-filters">
      <button class="filter-btn active animate-slide-left delay-100 px-6 py-3 rounded-full border-2 border-[#3773C9] text-[#3773C9] font-semibold" data-filter="all">
        All Works
      </button>
      <?php if($unique_categories && is_array($unique_categories)): ?>
        <?php $delay = 200; ?>
        <?php foreach($unique_categories as $category): ?>
          <?php 
          $category_slug = sanitize_title($category);
          $category_name = ucwords(str_replace('-', ' ', $category));
          ?>
          <button class="filter-btn animate-slide-left delay-<?php echo $delay; ?> px-6 py-3 rounded-full border-2 border-[#3773C9] text-[#3773C9] font-semibold" data-filter="<?php echo esc_attr($category_slug); ?>">
            <?php echo esc_html($category_name); ?>
          </button>
          <?php $delay += 100; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
    
    <!-- Dynamic Portfolio Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
      <?php if($projects): ?>
        <?php $delay = 100; ?>
        <?php foreach($projects as $project): ?>
          <?php 
          $companyName = $project['company_name'] ?: 'Company Name';
          $companySpeciality = $project['company_speciality'] ?: 'Company Specialty';
          $categories = $project['category']; // This is now a repeater
          $image = $project['image'];
          $project_url = $project['company_link'];
          
          // Get all category names and slugs for this project
          $category_names = array();
          $category_slugs = array();
          if($categories && is_array($categories)) {
            foreach($categories as $cat) {
              $category_name = $cat['category_name'];
              if($category_name) {
                $category_names[] = $category_name;
                $category_slugs[] = sanitize_title($category_name);
              }
            }
          }
          
          // If no categories, set default
          if(empty($category_names)) {
            $category_names[] = 'General';
            $category_slugs[] = 'general';
          }
          
          // Join category slugs for CSS classes
          $category_classes = implode(' ', $category_slugs);
          $display_category = implode(', ', $category_names);
          
          // Set default image if none provided
          $image_url = $image ? $image : 'https://placehold.co/600x400/png';
          $image_alt = $companyName ?: 'Portfolio Image';
          ?>
          
          <div class="portfolio-card <?php echo esc_attr($category_classes); ?> animate-fade-up delay-<?php echo $delay; ?> bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="relative">
              <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="w-full h-64 object-cover">
              <!-- Multiple Category Tags -->
              <div class="absolute top-4 left-4 flex flex-wrap gap-2">
                <?php foreach($category_names as $category_name): ?>
                  <span class="category-tag px-3 py-1 rounded-full text-xs font-semibold text-white bg-blue-600/80 backdrop-blur-sm">
                    <?php echo esc_html($category_name); ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-2"><?php echo esc_html($companyName); ?></h3>
              <p class="text-gray-600 mb-4"><?php echo esc_html($companySpeciality); ?></p>
              <?php if($project_url): ?>
                <a href="<?php echo esc_url($project_url); ?>" target="_blank" class="explore-btn w-full text-white py-3 rounded-lg font-semibold inline-block text-center">
                  Explore More
                </a>
              <?php else: ?>
                <button class="explore-btn w-full text-white py-3 rounded-lg font-semibold">
                  Explore More
                </button>
              <?php endif; ?>
            </div>
          </div>
          
          <?php 
          $delay += 100; 
          if($delay > 600) $delay = 100; // Reset delay after 6 items for better performance
          ?>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Fallback content when no projects are available -->
        <div class="col-span-full text-center py-12">
          <p class="text-gray-600 text-lg">No portfolio projects to display at the moment.</p>
          <p class="text-gray-500 mt-2">Please check back later or contact us for more information.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>



