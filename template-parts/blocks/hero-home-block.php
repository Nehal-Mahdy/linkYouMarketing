<?php
$title = get_field('main_heading');
$description = get_field('subheading');
?>

<section class="relative  bg-gradient-to-br from-slate-50 to-blue-50 overflow-hidden" id="hero">
  <!-- Background Elements -->
  <div class="absolute inset-0">
    <!-- Grid Pattern -->
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))]">
    </div>

    <!-- Gradient Orbs -->
    <div
      class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse">
    </div>
    <div
      class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-2000">
    </div>
    <div
      class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-4000">
    </div>

    <!-- Floating Elements -->
    <div class="absolute top-1/4 right-1/4 w-4 h-4 bg-blue-400 rounded-full animate-bounce opacity-60"></div>
    <div class="absolute top-1/3 right-1/3 w-6 h-6 bg-purple-400 rounded-full animate-pulse opacity-40"></div>
    <div class="absolute bottom-1/4 right-1/5 w-3 h-3 bg-pink-400 rounded-full animate-ping opacity-50"></div>
    <div
      class="absolute top-2/3 right-1/6 w-2 h-2 bg-indigo-400 rounded-full animate-bounce opacity-70 animation-delay-1000">
    </div>
  </div>

  <!-- Content -->
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl pt-[6rem] pb-[3rem] md:pt-[90px] md:pb-[90px]">
      <div class="text-center">

        <!-- Brand Badge -->
        <div class="mb-6 sm:mb-8 flex justify-center">
          <div
            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 transition-all duration-300 hover:scale-105">
            <span class="flex items-center space-x-2 font-semibold text-indigo-600">
              <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
              </svg>
              <span>LinkYou.Marketing</span>
            </span>
          </div>
        </div>

        <h1 class="text-3xl sm:text-4xl md:text-4xl  font-bold tracking-tight text-gray-900 leading-tight">
          <?php if ($title): ?>
            <?php
            $title_clean = trim($title);

            $predefined_lines = [
              "Let Us Take Care of Your",
              "Online Presence",
              "and We'll Help You Get the",
              "Business Hustle Off",
              "of Your Shoulders"
            ];

            // Check if the title matches our expected content and use predefined split
            if (strpos($title_clean, "Let Us Take Care") !== false && strpos($title_clean, "Online Presence") !== false) {
              $title_lines = $predefined_lines;
            } else {
              // For other custom titles, split intelligently to create 5 lines max
              $words = explode(' ', $title_clean);
              $total_words = count($words);

              if ($total_words <= 10) {
                // Split into 3 lines for shorter titles
                $per_line = ceil($total_words / 3);
                $title_lines = [
                  implode(' ', array_slice($words, 0, $per_line)),
                  implode(' ', array_slice($words, $per_line, $per_line)),
                  implode(' ', array_slice($words, $per_line * 2))
                ];
              } else {
                // Split into 5 lines for longer titles to match static structure
                $per_line = ceil($total_words / 5);
                $title_lines = [
                  implode(' ', array_slice($words, 0, $per_line)),
                  implode(' ', array_slice($words, $per_line, $per_line)),
                  implode(' ', array_slice($words, $per_line * 2, $per_line)),
                  implode(' ', array_slice($words, $per_line * 3, $per_line)),
                  implode(' ', array_slice($words, $per_line * 4))
                ];
              }
            }

            // Remove empty lines
            $title_lines = array_filter($title_lines, function ($line) {
              return !empty(trim($line));
            });

            // Animation delays matching static version exactly
            $delay_classes = ['', 'animation-delay-300', 'animation-delay-600', 'animation-delay-900', 'animation-delay-1200'];

            foreach ($title_lines as $index => $line):
              $line = trim($line);
              if (!empty($line)):
                $delay_class = isset($delay_classes[$index]) ? $delay_classes[$index] : '';

                // Apply gradient pattern EXACTLY like static version:
                // Index 1 (2nd line) = indigo-purple gradient
                // Index 3 (4th line) = purple-pink gradient  
                // All others = normal text
                if ($index == 1): ?>
                  <span
                    class="block bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent animate-fade-in-up <?php echo $delay_class; ?>">
                    <?php echo esc_html($line); ?>
                  </span>
                <?php elseif ($index == 3): ?>
                  <span
                    class="block bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent animate-fade-in-up <?php echo $delay_class; ?>">
                    <?php echo esc_html($line); ?>
                  </span>
                <?php else: ?>
                  <span class="block animate-fade-in-up <?php echo $delay_class; ?>">
                    <?php echo esc_html($line); ?>
                  </span>
                <?php endif;
              endif;
            endforeach;
            ?>
          <?php else: ?>
            <span class="block animate-fade-in-up">Let Us Take Care of Your</span>
            <span
              class="block bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent animate-fade-in-up animation-delay-300">
              Online Presence
            </span>
            <span class="block animate-fade-in-up animation-delay-600">and We'll Help You Get the</span>
            <span
              class="block bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent animate-fade-in-up animation-delay-900">
              Business Hustle Off
            </span>
            <span class="block animate-fade-in-up animation-delay-1200">of Your Shoulders</span>
          <?php endif; ?>
        </h1>


        <!-- Description -->
        <p
          class="mt-4 sm:mt-6 text-base sm:text-lg lg:text-xl leading-7 sm:leading-8 text-gray-600 animate-fade-in-up animation-delay-1500 max-w-2xl lg:max-w-3xl mx-auto px-2 sm:px-0">
          <?php if ($description): ?>
            <?php echo $description; ?>
          <?php else: ?>
            We are delighted to have a powerful and experienced team that will customize everything to your needs to make
            your business standout
          <?php endif; ?>
        </p>

        <!-- CTA Buttons -->
        <div
          class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-x-6 animate-fade-in-up animation-delay-1800 px-4 sm:px-0">
          <a href="#contact" id="hero-cta"
            class="group relative inline-flex items-center justify-center rounded-lg bg-indigo-600 px-6 sm:px-8 py-3 sm:py-3.5 text-sm sm:text-base font-semibold text-white transition-all duration-200 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 hover:scale-105 hover:shadow-lg w-full sm:w-auto max-w-xs sm:max-w-none">
            <!-- Button shine effect -->
            <div
              class="absolute inset-0 rounded-lg bg-gradient-to-r from-transparent via-white/20 to-transparent opacity-0 group-hover:opacity-100 group-hover:animate-shine transition-opacity duration-500">
            </div>
            <span class="relative flex items-center space-x-2">
              <svg class="h-4 w-4 transition-transform duration-200 group-hover:scale-110" fill="currentColor"
                viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg>
              <span>Contact Us</span>
            </span>
          </a>

          <a href="#services"
            class="inline-flex items-center space-x-2 text-sm sm:text-base font-semibold leading-6 text-gray-900 transition-all duration-200 hover:text-indigo-600 group py-3 sm:py-0">
            <span>Learn more</span>
            <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="currentColor"
              viewBox="0 0 24 24">
              <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
            </svg>
          </a>
        </div>


      </div>
    </div>

    <!-- Right Side Illustration -->
    <div class="absolute inset-y-0 right-0 -z-10 w-full overflow-hidden ring-1 ring-white/5 lg:w-1/2 hidden sm:block">
      <svg
        class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
        aria-hidden="true">
        <defs>
          <pattern id="hero-pattern" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse">
            <path d="M.5 200V.5H200" fill="none" />
          </pattern>
        </defs>
        <svg x="100%" y="-1" class="overflow-visible fill-gray-50">
          <path d="m-1 0 1-1v1z" stroke="none" />
        </svg>
        <rect width="100%" height="100%" stroke-width="0" fill="url(#hero-pattern)" />
      </svg>

      <!-- Floating Cards - Hidden on mobile, visible on larger screens -->
      <div class="absolute top-1/4 right-8 lg:right-12 transform animate-float hidden md:block">
        <div class="bg-white rounded-lg shadow-lg p-3 lg:p-4 w-40 lg:w-48 border border-gray-100">
          <div class="flex items-center space-x-2 lg:space-x-3 mb-2 lg:mb-3">
            <div class="w-6 lg:w-8 h-6 lg:h-8 bg-green-100 rounded-full flex items-center justify-center">
              <svg class="w-3 lg:w-4 h-3 lg:h-4 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
              </svg>
            </div>
            <div>
              <p class="text-xs lg:text-sm font-medium text-gray-900">Traffic Growth</p>
              <p class="text-xs text-gray-500">+125% this month</p>
            </div>
          </div>
          <div class="space-y-2">
            <div class="flex justify-between text-xs">
              <span class="text-gray-500">Progress</span>
              <span class="text-gray-900 font-medium">87%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-1.5">
              <div class="bg-green-500 h-1.5 rounded-full w-[87%] animate-grow"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute top-1/2 right-4 lg:right-8 transform animate-float animation-delay-1000 hidden md:block">
        <div class="bg-white rounded-lg shadow-lg p-3 lg:p-4 w-32 lg:w-40 border border-gray-100">
          <div class="text-center">
            <div
              class="w-10 lg:w-12 h-10 lg:h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-2">
              <svg class="w-5 lg:w-6 h-5 lg:h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
              </svg>
            </div>
            <p class="text-base lg:text-lg font-semibold text-gray-900">4.9/5</p>
            <p class="text-xs text-gray-500">Client Rating</p>
          </div>
        </div>
      </div>

      <div class="absolute bottom-1/4 right-8 lg:right-16 transform animate-float animation-delay-2000 hidden md:block">
        <div class="bg-white rounded-lg shadow-lg p-3 lg:p-4 w-36 lg:w-44 border border-gray-100">
          <div class="flex items-center space-x-2 lg:space-x-3">
            <div class="w-6 lg:w-8 h-6 lg:h-8 bg-purple-100 rounded-full flex items-center justify-center">
              <svg class="w-3 lg:w-4 h-3 lg:h-4 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4Z" />
              </svg>
            </div>
            <div>
              <p class="text-xs lg:text-sm font-medium text-gray-900">ROI Increase</p>
              <p class="text-base lg:text-lg font-bold text-purple-600">340%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* Modern CSS animations with proper delays */
  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-10px);
    }
  }

  @keyframes shine {
    0% {
      transform: translateX(-100%);
    }

    100% {
      transform: translateX(100%);
    }
  }

  @keyframes grow {
    0% {
      width: 0%;
    }

    100% {
      width: 87%;
    }
  }

  @keyframes pulse {

    0%,
    100% {
      opacity: 1;
    }

    50% {
      opacity: 0.5;
    }
  }

  @keyframes bounce {

    0%,
    20%,
    53%,
    80%,
    100% {
      transform: translateY(0);
    }

    40%,
    43% {
      transform: translateY(-10px);
    }

    70% {
      transform: translateY(-5px);
    }
  }

  @keyframes ping {

    75%,
    100% {
      transform: scale(2);
      opacity: 0;
    }
  }

  /* Animation classes */
  .animate-fade-in-up {
    animation: fade-in-up 0.6s ease-out forwards;
  }

  .animate-float {
    animation: float 3s ease-in-out infinite;
  }

  .animate-shine {
    animation: shine 0.75s ease-out;
  }

  .animate-grow {
    animation: grow 2s ease-out forwards;
  }

  .animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
  }

  .animate-bounce {
    animation: bounce 1s infinite;
  }

  .animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
  }

  /* Animation delays */
  .animation-delay-300 {
    animation-delay: 300ms;
  }

  .animation-delay-600 {
    animation-delay: 600ms;
  }

  .animation-delay-900 {
    animation-delay: 900ms;
  }

  .animation-delay-1000 {
    animation-delay: 1000ms;
  }

  .animation-delay-1200 {
    animation-delay: 1200ms;
  }

  .animation-delay-1500 {
    animation-delay: 1500ms;
  }

  .animation-delay-1800 {
    animation-delay: 1800ms;
  }

  .animation-delay-2000 {
    animation-delay: 2000ms;
  }

  .animation-delay-2100 {
    animation-delay: 2100ms;
  }

  .animation-delay-4000 {
    animation-delay: 4000ms;
  }

  /* Background grid utility */
  .bg-grid-slate-100 {
    background-image: linear-gradient(to right, rgb(241 245 249 / 1) 1px, transparent 1px),
      linear-gradient(to bottom, rgb(241 245 249 / 1) 1px, transparent 1px);
    background-size: 40px 40px;
  }

  /* Enhanced Mobile Responsiveness */
  @media (max-width: 640px) {

    /* Typography improvements for mobile */
    .text-3xl {
      font-size: 1.875rem;
      line-height: 2.25rem;
    }

    .text-4xl {
      font-size: 2.25rem;
      line-height: 2.5rem;
    }

    /* Better spacing for mobile */
    .py-20 {
      padding-top: 4rem;
      padding-bottom: 4rem;
    }

    /* Ensure proper padding on mobile */
    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem;
    }

    /* Mobile button improvements */
    .max-w-xs {
      max-width: 16rem;
    }

    /* Hide complex background elements on small screens */
    .bg-grid-slate-100 {
      background-size: 20px 20px;
      opacity: 0.5;
    }
  }

  @media (max-width: 480px) {

    /* Extra small screens */
    .text-3xl {
      font-size: 1.5rem;
      line-height: 2rem;
    }

    .text-4xl {
      font-size: 1.875rem;
      line-height: 2.25rem;
    }

    .text-5xl {
      font-size: 2.25rem;
      line-height: 2.5rem;
    }

    /* Tighter spacing for very small screens */
    .py-20 {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }

    .mt-4 {
      margin-top: 0.75rem;
    }

    .mt-8 {
      margin-top: 1.5rem;
    }

    .mt-12 {
      margin-top: 2rem;
    }
  }

  /* Tablet responsiveness */
  @media (min-width: 641px) and (max-width: 1024px) {

    /* Adjust floating cards for tablets */
    .absolute.right-8 {
      right: 1rem;
    }

    .absolute.right-12 {
      right: 2rem;
    }

    .absolute.right-16 {
      right: 2.5rem;
    }
  }

  /* Large screen optimizations */
  @media (min-width: 1025px) {

    /* Better spacing for large screens */
    .py-48 {
      padding-top: 10rem;
      padding-bottom: 10rem;
    }

    .xl\:py-56 {
      padding-top: 12rem;
      padding-bottom: 12rem;
    }
  }

  /* Performance optimizations */
  .animate-fade-in-up,
  .animate-float,
  .animate-pulse,
  .animate-bounce,
  .animate-ping {
    will-change: transform, opacity;
  }

  /* Improved focus states for accessibility */
  .focus-visible\:outline:focus-visible {
    outline: 2px solid;
    outline-offset: 2px;
  }

  .focus-visible\:outline-indigo-600:focus-visible {
    outline-color: rgb(79 70 229);
  }

  /* Touch targets for mobile */
  @media (max-width: 640px) {

    a,
    button {
      min-height: 44px;
      /* iOS recommended minimum touch target */
    }
  }

  /* Reduce motion for accessibility */
  @media (prefers-reduced-motion: reduce) {

    *,
    *::before,
    *::after {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
    }
  }
</style>