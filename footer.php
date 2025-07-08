<?php
/**
 * The footer
 *
 * @package Bathe
 */

?>
</main>

</div>
<footer class="relative overflow-hidden">
  
  <!-- Newsletter Section -->
  <section class="relative bg-gradient-to-br from-[#3773C9] via-[#2D5ED1] to-[#1E4CA3] py-20 px-4 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
      <!-- Floating Background Shapes -->
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full animate-pulse"></div>
      <div class="absolute top-1/2 -left-20 w-60 h-60 bg-white/5 rounded-full animate-bounce duration-[3000ms]"></div>
      <div class="absolute bottom-10 right-1/4 w-32 h-32 bg-white/10 rounded-full animate-pulse delay-1000"></div>
      
      <!-- Business Professional Illustration -->
      <div class="absolute left-4 md:left-12 top-12 opacity-30">
        <div class="relative">
          <!-- Business person silhouette -->
          <div class="w-24 h-40 bg-gradient-to-b from-blue-900/40 to-blue-800/60 rounded-t-full relative animate-float">
            <!-- Head -->
            <div class="w-8 h-8 bg-blue-800/80 rounded-full mx-auto mb-2"></div>
            <!-- Body -->
            <div class="w-16 h-20 bg-blue-900/60 mx-auto rounded-lg relative">
              <!-- Arms -->
              <div class="absolute -left-2 top-2 w-4 h-12 bg-blue-800/60 rounded-full transform rotate-12"></div>
              <div class="absolute -right-2 top-2 w-4 h-12 bg-blue-800/60 rounded-full transform -rotate-12"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Cloud Elements -->
      <div class="absolute top-16 right-12 opacity-20">
        <div class="flex space-x-2">
          <div class="w-16 h-8 bg-white/30 rounded-full animate-float delay-500"></div>
          <div class="w-12 h-6 bg-white/20 rounded-full animate-float delay-700"></div>
        </div>
      </div>
      
      <!-- Floating Dots Animation -->
      <div class="absolute top-20 left-1/4 w-2 h-2 bg-white/30 rounded-full animate-ping"></div>
      <div class="absolute bottom-20 right-1/3 w-3 h-3 bg-white/20 rounded-full animate-ping delay-500"></div>
      <div class="absolute top-1/3 right-20 w-1 h-1 bg-white/40 rounded-full animate-ping delay-1000"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto text-center">
      <!-- Main Newsletter Content -->
      <div class="mb-8">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-slideInUp">
          Subscribe Now!
        </h2>
        <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed animate-slideInUp delay-200">
          Get the Latest Updates from LinkYou.Marketing
        </p>
      </div>

      <!-- Newsletter Form -->
      <div class="max-w-lg mx-auto animate-slideInUp delay-400">
        <form class="flex flex-col sm:flex-row gap-4 p-2 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 shadow-2xl">
          <input 
            type="email" 
            placeholder="Enter your email address" 
            class="flex-1 px-6 py-4 bg-white rounded-xl border-0 outline-none text-gray-800 placeholder-gray-500 text-lg focus:ring-2 focus:ring-white/50 transition-all duration-300 shadow-inner"
            required
          >
          <button 
            type="submit" 
            class="px-8 py-4 bg-gradient-to-r from-[#1E4CA3] to-[#0F3666] text-white font-semibold rounded-xl hover:from-[#0F3666] hover:to-[#1E4CA3] transform hover:scale-95 transition-all duration-300 shadow-lg hover:shadow-xl whitespace-nowrap"
          >
            Subscribe
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Main Footer -->
  <div class="relative bg-gradient-to-br from-[#1a1a2e] via-[#16213e] to-[#0f172a] text-white overflow-hidden">
    <!-- Animated Background Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-[#3773C9]/20 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-12">
        
        <!-- Company Info & Logo -->
        <div class="lg:col-span-2 space-y-8">
          <div class="flex items-center space-x-4">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id, 'full');
            ?>
            <div class="w-16 h-16 bg-gradient-to-br from-white to-gray-300 rounded-xl flex items-center justify-center animate-float shadow-lg">
              <?php if($image): ?>
                <img src="<?php echo $image[0]; ?>" class="w-12 h-12 object-contain" alt="LinkYou Marketing">
              <?php else: ?>
                <span class="text-white font-bold text-xl">LY</span>
              <?php endif; ?>
            </div>
            <h3 class="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
              LinkYou.Marketing
            </h3>
          </div>
          
          <p class="text-gray-300 text-lg leading-relaxed max-w-lg">
            We help you import your products easily and safely, with comprehensive shipping and customs clearance solutions.
          </p>

          <!-- Social Media Icons -->
          <div class="flex flex-wrap gap-4">
            <a href="https://www.instagram.com/moahal.import/" target="_blank" class="group p-3 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
              <svg class="w-6 h-6 text-white group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            <a href="https://api.whatsapp.com/message/YAUXKFUB5U5AJ1?autoload=1&app_absent=0" target="_blank" class="group p-3 bg-gradient-to-br from-green-500 to-green-600 rounded-full hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
              <svg class="w-6 h-6 text-white group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.488"/>
              </svg>
            </a>
            <a href="#" class="group p-3 bg-gradient-to-br from-blue-600 to-blue-700 rounded-full hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
              <svg class="w-6 h-6 text-white group-hover:rotate-12 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
            <a href="https://www.snapchat.com/add/ecommercegroup?share_id=ObOHFWWWeHE&locale=en-GB" target="_blank" class="group p-3 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full hover:scale-110 transition-all duration-300 shadow-lg hover:shadow-xl">
              
              <svg class="w-6 h-6 text-white group-hover:rotate-12 transition-transform duration-300" fill="currentColor"  xmlns="http://www.w3.org/2000/svg"  class="bi bi-snapchat" viewBox="0 0 16 16">
  <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1 1 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.4 3.4 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.3.3 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.4 1.4 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.8 1.8 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.3 4.3 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0s-1.76.216-2.505.641c-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.8 1.8 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.4 1.4 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.4.4 0 0 1 .109.11c.026.053.027.11-.012.217a3.4 3.4 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075q.18.189.409.31a4.4 4.4 0 0 0 1 .4.7.7 0 0 1 .202.09c.118.104.102.26.259.488q.12.178.296.3c.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.6.6 0 0 1 .19-.087 4.5 4.5 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047m-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082s-2.045-.801-2.904-1.084c-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a1 1 0 0 1 .197.022c.396.086.78.285 1.002.338q.04.01.082.011c.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.4.4 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a1 1 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464"/>
</svg>
            </a>
          </div>
        </div>

        <!-- Navigation Links -->
        <div class="space-y-6">
          <div class="flex items-center space-x-2 mb-6">
            <div class="w-1 h-8 bg-gradient-to-b from-[#3773C9] to-[#1E4CA3] rounded-full"></div>
            <h4 class="text-xl font-bold text-white">Quick Links</h4>
          </div>
          <nav class="space-y-4">
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 text-[#3773C9] group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
              </svg>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Home</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 text-[#3773C9] group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 1L9 7V9C9 10.1 9.9 11 11 11V12C8.24 12 6 14.24 6 17H18C18 14.24 15.76 12 13 12V11C14.1 11 15 10.1 15 9Z"/>
              </svg>
              <span class="group-hover:translate-x-1 transition-transform duration-300">About Us</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 text-[#3773C9] group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7L12 12L22 7L12 2ZM2 17L12 22L22 17L12 12L2 17Z"/>
              </svg>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Portfolio</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 text-[#3773C9] group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3ZM17.5 17.5C17.1 17.9 16.4 17.9 16 17.5L12 13.5L8 17.5C7.6 17.9 6.9 17.9 6.5 17.5C6.1 17.1 6.1 16.4 6.5 16L10.5 12L6.5 8C6.1 7.6 6.1 6.9 6.5 6.5C6.9 6.1 7.6 6.1 8 6.5L12 10.5L16 6.5C16.4 6.1 17.1 6.1 17.5 6.5C17.9 6.9 17.9 7.6 17.5 8L13.5 12L17.5 16C17.9 16.4 17.9 17.1 17.5 17.5Z"/>
              </svg>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Services</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <svg class="w-5 h-5 text-[#3773C9] group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM20 8L12 13L4 8V6L12 11L20 6V8Z"/>
              </svg>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Contact us</span>
            </a>
          </nav>
        </div>

        <!-- Services -->
        <div class="space-y-6">
          <div class="flex items-center space-x-2 mb-6">
            <div class="w-1 h-8 bg-gradient-to-b from-[#3773C9] to-[#1E4CA3] rounded-full"></div>
            <h4 class="text-xl font-bold text-white">Our Services</h4>
          </div>
          <nav class="space-y-4">
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <div class="w-2 h-2 bg-[#3773C9] rounded-full group-hover:scale-125 transition-transform duration-300"></div>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Import Solutions</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <div class="w-2 h-2 bg-[#3773C9] rounded-full group-hover:scale-125 transition-transform duration-300"></div>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Customs Clearance</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <div class="w-2 h-2 bg-[#3773C9] rounded-full group-hover:scale-125 transition-transform duration-300"></div>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Shipping Services</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <div class="w-2 h-2 bg-[#3773C9] rounded-full group-hover:scale-125 transition-transform duration-300"></div>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Market Research</span>
            </a>
            <a href="#" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
              <div class="w-2 h-2 bg-[#3773C9] rounded-full group-hover:scale-125 transition-transform duration-300"></div>
              <span class="group-hover:translate-x-1 transition-transform duration-300">Quality Control</span>
            </a>
          </nav>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-white/10 bg-black/20 backdrop-blur-sm">
      <div class="max-w-7xl mx-auto px-4 py-6 text-center">
        <p class="text-gray-400 text-lg">
          2022 © All rights reserved by <span class="text-white font-semibold">LinkYou.Marketing</span>
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Custom CSS for Animations -->
<style>
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

@keyframes slideInUp {
  0% { transform: translateY(50px); opacity: 0; }
  100% { transform: translateY(0); opacity: 1; }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

.animate-slideInUp {
  animation: slideInUp 0.8s ease-out forwards;
}

.delay-200 { animation-delay: 0.2s; }
.delay-400 { animation-delay: 0.4s; }
.delay-500 { animation-delay: 0.5s; }
.delay-700 { animation-delay: 0.7s; }
.delay-1000 { animation-delay: 1s; }
</style>




<?php wp_footer(); ?>
</body>
</html>