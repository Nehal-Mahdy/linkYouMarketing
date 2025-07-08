<?php
  $title = get_field('title');
  $companies = get_field('companies'); // Repeater field for company logos
  $cta_title = get_field('cta_title');
  $cta_btn_text = get_field('cta_button_text');
  $cta_btn_link = get_field('cta_button_link');
?>

<!-- Featured In Section -->
<section class="bg-white py-16 sm:py-20 lg:py-24" id="featured-in">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header -->
    <div class="text-center mb-12 sm:mb-16">
      <!-- Brand Icon -->
      <div class="inline-flex items-center justify-center mb-6">
        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
          <div class="w-4 h-4 bg-white rounded-sm"></div>
        </div>
        <div class="w-3 h-3 bg-gradient-to-r from-pink-500 to-red-500 rounded ml-1"></div>
      </div>
      
      <!-- Title -->
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 mb-4">
        <?php echo $title ?: "We're Featured In"; ?>
      </h2>
    </div>

    <!-- Companies Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6 lg:gap-8 mb-16 sm:mb-20">
      
      <!-- Company 1 - Canada Recruitment -->
      <div class="group relative bg-white border-2 border-blue-200 rounded-2xl p-6 sm:p-8 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-blue-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-blue-800 mb-1">Canada</h3>
          <p class="text-xs text-blue-600 font-semibold">Recruitment</p>
        </div>
      </div>

      <!-- Company 2 - Dubai Recruitment -->
      <div class="group relative bg-white border-2 border-gray-200 rounded-2xl p-6 sm:p-8 hover:border-gray-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-gray-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-gray-800 mb-1">Dubai</h3>
          <p class="text-xs text-gray-600 font-semibold">Recruitment</p>
        </div>
      </div>

      <!-- Company 3 - Haraj Simsar -->
      <div class="group relative bg-white border-2 border-orange-200 rounded-2xl p-6 sm:p-8 hover:border-orange-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-orange-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-orange-800 mb-1">Haraj</h3>
          <p class="text-xs text-orange-600 font-semibold">Simsar</p>
        </div>
      </div>

      <!-- Company 4 - Dubai Simsar -->
      <div class="group relative bg-white border-2 border-green-200 rounded-2xl p-6 sm:p-8 hover:border-green-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-green-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-green-800 mb-1">Dubai</h3>
          <p class="text-xs text-green-600 font-semibold">Simsar</p>
        </div>
      </div>

      <!-- Company 5 - LinkYou Academy -->
      <div class="group relative bg-white border-2 border-gray-200 rounded-2xl p-6 sm:p-8 hover:border-gray-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-gray-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-gray-800 mb-1">LinkYou</h3>
          <p class="text-xs text-gray-600 font-semibold">Academy</p>
        </div>
      </div>

      <!-- Company 6 - LinkYou.ca -->
      <div class="group relative bg-white border-2 border-blue-200 rounded-2xl p-6 sm:p-8 hover:border-blue-400 hover:shadow-lg transition-all duration-300 flex items-center justify-center min-h-[140px] sm:min-h-[160px]">
        <div class="text-center">
          <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3 mx-auto group-hover:bg-blue-200 transition-colors duration-300">
            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H6.9C4.29 7 2.2 9.09 2.2 11.7v.6c0 2.61 2.09 4.7 4.7 4.7H11v-1.9H6.9c-1.71 0-3.1-1.39-3.1-3.1v-.6zm8.1 2h4c1.71 0 3.1-1.39 3.1-3.1S17.71 7.9 16 7.9h-4V9h4c1.11 0 2.1.89 2.1 2s-.99 2-2.1 2h-4v1z"/>
            </svg>
          </div>
          <h3 class="text-sm font-bold text-blue-800 mb-1">LinkYou</h3>
          <p class="text-xs text-blue-600 font-semibold">.ca</p>
        </div>
      </div>

    </div>

    <!-- CTA Section -->
    <div class="text-center">
      <!-- Brand Icon -->
      <div class="inline-flex items-center justify-center mb-6">
        <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
          <div class="w-3 h-3 bg-white rounded-sm"></div>
        </div>
        <div class="w-2 h-2 bg-gradient-to-r from-pink-500 to-red-500 rounded ml-1"></div>
      </div>
      
      <!-- CTA Title -->
      <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-8 sm:mb-10">
        <?php echo $cta_title ?: "Looking for a Free Marketing Consultation?"; ?>
      </h3>
      
      <!-- CTA Button -->
      <a href="<?php echo $cta_btn_link ?: '#contact'; ?>" 
         class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-lg rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 group">
        <?php echo $cta_btn_text ?: "Reach Us Now!"; ?>
        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
        </svg>
      </a>
    </div>

  </div>
</section>
 