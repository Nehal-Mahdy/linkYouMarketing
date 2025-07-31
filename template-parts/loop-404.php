<!-- Creative 404 Error Page -->
<section class="py-20 min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-purple-50 relative overflow-hidden">
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 opacity-20">
    <div class="float-element absolute top-20 left-20 w-32 h-32 bg-blue-400 rounded-full blur-3xl"></div>
    <div class="float-element absolute bottom-20 right-20 w-40 h-40 bg-purple-400 rounded-full blur-3xl" style="animation-delay: 2s;"></div>
    <div class="float-element absolute top-40 right-40 w-24 h-24 bg-pink-400 rounded-full blur-2xl" style="animation-delay: 4s;"></div>
  </div>
  
  <!-- Moving Particles -->
  <div class="hero-particle"></div>
  <div class="hero-particle"></div>
  <div class="hero-particle"></div>
  <div class="hero-particle"></div>
  
  <div class="container mx-auto px-4 text-center relative z-10">
    <div class="max-w-4xl mx-auto">
      <!-- 404 Number with Animation -->
      <div class="animate-bounce mb-8">
        <h1 class="text-9xl md:text-[12rem] font-bold text-transparent bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 bg-clip-text leading-none">
          404
        </h1>
      </div>
      
      <!-- Error Message -->
      <div class="animate-fade-up delay-200 mb-8">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
          Oops! Page Not Found
        </h2>
        <p class="text-xl text-gray-600 mb-6">
          The page you're looking for seems to have taken a detour. Don't worry, it happens to the best of us!
        </p>
      </div>
      
      <!-- Illustration/Icon -->
      <div class="animate-scale delay-300 mb-8">
        <div class="text-8xl mb-4">🚀</div>
        <p class="text-gray-500">Lost in cyberspace...</p>
      </div>
      
      <!-- Search Box -->
      <div class="animate-fade-up delay-400 mb-8">
        <div class="max-w-md mx-auto">
          <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
            <input 
              type="search" 
              name="s" 
              placeholder="Search for something..." 
              class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition-colors duration-300"
              value="<?php echo get_search_query(); ?>"
            >
            <button 
              type="submit" 
              class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300"
            >
              Search
            </button>
          </form>
        </div>
      </div>
      
      <!-- Action Buttons -->
      <div class="animate-fade-up delay-500 flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
        <a 
          href="<?php echo esc_url(home_url('/')); ?>" 
          class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300"
        >
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          Go Home
        </a>
        
        <a 
          href="<?php echo esc_url(home_url('/portfolio')); ?>" 
          class="inline-flex items-center px-8 py-4 bg-white text-gray-700 font-semibold rounded-xl border-2 border-gray-300 hover:border-blue-500 hover:text-blue-600 transform hover:scale-105 transition-all duration-300"
        >
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
          </svg>
          View Portfolio
        </a>
        
        <a 
          href="<?php echo esc_url(home_url('/contact')); ?>" 
          class="inline-flex items-center px-8 py-4 bg-white text-gray-700 font-semibold rounded-xl border-2 border-gray-300 hover:border-blue-500 hover:text-blue-600 transform hover:scale-105 transition-all duration-300"
        >
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          Contact Us
        </a>
      </div>
      
      <!-- Popular Links -->
      <div class="animate-fade-up delay-600">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Popular Pages</h3>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-blue-600 hover:text-blue-800 underline transition-colors">Services</a>
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="text-blue-600 hover:text-blue-800 underline transition-colors">About Us</a>
          <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="text-blue-600 hover:text-blue-800 underline transition-colors">Portfolio</a>
          <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-blue-600 hover:text-blue-800 underline transition-colors">Blog</a>
        </div>
      </div>
      
      <!-- Help Text -->
      <div class="animate-fade-up delay-700 mt-12 p-6 bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200">
        <h4 class="text-lg font-semibold text-gray-800 mb-2">Need Help?</h4>
        <p class="text-gray-600 mb-4">
          If you believe this is an error, please contact our support team. We're here to help!
        </p>
        <div class="flex flex-col sm:flex-row gap-2 justify-center items-center text-sm text-gray-500">
          <span>Error Code: 404</span>
          <span class="hidden sm:inline">•</span>
          <span>Page Not Found</span>
          <span class="hidden sm:inline">•</span>
          <span>LinkYou.Marketing</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Additional CSS for 404 Page -->
<style>
@keyframes float404 {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}

.animate-bounce {
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 20%, 53%, 80%, 100% {
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    transform: translate3d(0,0,0);
  }
  40%, 43% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -30px, 0);
  }
  70% {
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    transform: translate3d(0, -15px, 0);
  }
  90% {
    transform: translate3d(0, -4px, 0);
  }
}

.bg-gradient-to-r {
  background-size: 200% 200%;
  animation: gradientShift 3s ease infinite;
}

@keyframes gradientShift {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>
