<?php
require_once get_template_directory() . '/includes/class-linkyou-walker-nav-menu.php';

/**
 * The header
 *
 * @package Bathe
 */



/**
 * Get custom logo URL
 * @link https://developer.wordpress.org/reference/functions/the_custom_logo/
 */
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>



  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />


  <!-- External Stylesheets -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="icon" href="<?php echo $image[0]; ?>" type="image/png">


  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <?php wp_head(); ?>

  <style>
    /* Mobile menu blur effect */
    #menu-toggle:checked~label {
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }

    /* Ensure the overlay covers everything */
    .mobile-blur-overlay {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      width: 100vw !important;
      height: 100vh !important;
      z-index: 45 !important;
      backdrop-filter: blur(12px) !important;
      -webkit-backdrop-filter: blur(12px) !important;
    }

    /* User dropdown menu styles */
    .group:hover .group-hover\:opacity-100 {
      opacity: 1 !important;
      visibility: visible !important;
    }

    .group:hover .group-hover\:visible {
      visibility: visible !important;
    }

    /* Ensure dropdown stays visible on hover */
    .user-dropdown {
      z-index: 9999 !important;
    }

    .user-dropdown:hover {
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* Navigation dropdown styles */
    .dropdown-menu {
      max-height: 500px;
      overflow-y: auto;
      z-index: 99999 !important;
      position: absolute !important;
    }

    .dropdown-menu:hover {
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* Ensure nested dropdowns work properly */
    .group:hover>.dropdown-menu {
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* Ensure parent containers don't hide dropdowns */
    nav,
    header {
      overflow: visible !important;
    }

    /* Desktop navigation container should allow overflow */
    .hidden.md\\:flex {
      overflow: visible !important;
    }

    /* Navigation menu items with dropdowns */
    .group {
      position: relative;
    }

    /* Ensure dropdowns appear above everything */
    .group .dropdown-menu {
      position: absolute !important;
      z-index: 99999 !important;
    }

    /* Sub-sub menu nested design */
    .submenu-nested {
      display: none;
      animation: slideDown 0.3s ease-out;
    }

    .group:hover>.submenu-nested {
      display: block;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-10px);
        max-height: 0;
      }

      to {
        opacity: 1;
        transform: translateY(0);
        max-height: 300px;
      }
    }



    /* Sub-sub menu specific styling */
    .submenu-nested::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, #60A5FA, #A78BFA);
      border-radius: 8px 8px 0 0;
    }

    /* Smooth animations */
    .dropdown-menu {
      animation: dropdownSlideIn 0.3s ease-out;
      transform-origin: top center;
    }

    @keyframes dropdownSlideIn {
      from {
        opacity: 0;
        transform: translateY(-10px) scale(0.95);
      }

      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    /* Enhanced hover effects for sub items */
    .dropdown-menu li:hover {
      transform: translateX(3px);
    }

    .submenu-nested li:hover {
      transform: translateX(0);
      background-color: rgba(255, 255, 255, 0.8);
    }

    /* Custom scrollbar for dropdown menus */
    .dropdown-menu::-webkit-scrollbar {
      width: 6px;
    }

    .dropdown-menu::-webkit-scrollbar-track {
      background: #f8fafc;
      border-radius: 3px;
    }

    .dropdown-menu::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #cbd5e1, #94a3b8);
      border-radius: 3px;
    }

    .dropdown-menu::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(to bottom, #94a3b8, #64748b);
    }

    /* Active menu item bounce animation */
    @keyframes activeMenuBounce {

      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      10% {
        transform: translateY(-3px);
      }

      30% {
        transform: translateY(-2px);
      }

      40% {
        transform: translateY(-1px);
      }

      60% {
        transform: translateY(-1px);
      }
    }

    @keyframes activeMenuFloat {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-2px);
      }
    }

    /* Apply animation to active menu items */
    .nav-link.active {
      animation: activeMenuBounce 2s ease-in-out;
      animation-delay: 0.3s;
    }

    /* Continuous floating effect for active items */
    .nav-link.active:after {
      animation: activeMenuFloat 2s ease-in-out infinite;
      animation-delay: 2.3s;
    }

    /* Enhanced active state styling */
    .nav-link.active {
      position: relative;
      transform-origin: center bottom;
    }


    /* Mobile dropdown functionality */
    .mobile-dropdown-toggle .submenu {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }

    .mobile-dropdown-toggle.active .submenu {
      max-height: 500px;
      transition: max-height 0.3s ease-in;
    }

    .mobile-dropdown-toggle.active .toggle-arrow {
      transform: rotate(180deg);
    }

    /* Smooth scrolling for mobile menu */
    .mobile-nav-menu {
      scroll-behavior: smooth;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Mobile dropdown toggle functionality
      const mobileToggleBtns = document.querySelectorAll('.mobile-toggle-btn');

      mobileToggleBtns.forEach(btn => {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          const parent = this.closest('.mobile-dropdown-toggle');
          const submenu = parent.nextElementSibling;

          // Toggle active state
          parent.classList.toggle('active');

          // Close other open dropdowns at the same level
          const siblings = parent.parentElement.parentElement.children;
          Array.from(siblings).forEach(sibling => {
            const siblingToggle = sibling.querySelector('.mobile-dropdown-toggle');
            if (siblingToggle && siblingToggle !== parent) {
              siblingToggle.classList.remove('active');
            }
          });
        });
      });
    });
  </script>






</head>

<body class="font-poppins">
  <header class="font-poppins">

    <nav class="">
      <section
        class=" fixed top-0 left-0 z-40 w-full header-gradient header-dots header-shimmer animate-slide-down shadow-lg transition-all duration-300">

        <div
          class="flex items-center justify-between px-4 sm:px-12 md:px-12 lg:px-16 gap-4 sm:gap-6 md:gap-8 lg:gap-12 bg-transparent py-3 relative z-10">
          <!-- Logo with animation -->
          <div class="flex items-center animate-fade-in-left">

            <img src="<?php echo $image[0]; ?>" alt="Logo"
              class="w-auto md:h-[95px] h-[70px] transition-transform duration-300 hover:scale-105" />
          </div>

          <!-- Mobile menu toggle with animation -->
          <label for="menu-toggle"
            class="text-2xl cursor-pointer flex items-center gap-2 md:hidden relative group animate-fade-in-right">
            <div class="p-2 rounded-lg transition-all duration-300 group-hover:bg-primary-50 group-active:scale-95">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none"
                class="transition-transform duration-300 group-hover:scale-110">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.20215 23.8333H31.4521V26.75H5.20215V23.8333ZM5.20215 16.5417H31.4521V19.4583H5.20215V16.5417ZM5.20215 9.25H31.4521V12.1667H5.20215V9.25Z"
                  fill="currentColor" class="transition-colors duration-300 text-neutral-700" />
              </svg>
            </div>
          </label>


          <!-- Desktop Navigation Menu -->
          <div class="hidden md:flex items-center justify-end lg:gap-6  w-full animate-fade-in-up">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class' => 'flex items-center text-neutral-800 font-medium text-[15px] lg:gap-6',
              'container' => false,
              'walker' => new LinkYou_Walker_Nav_Menu(),
              'fallback_cb' => false,
            ));
            ?>

            <!-- Login/User Account Section -->
            <?php if (!is_user_logged_in()): ?>
              <!-- Login Icon for Non-logged Users -->
              <a href="<?php echo home_url('/login'); ?>"
                class="login-icon relative p-3 text-neutral-700 hover:text-primary-600 transition-all duration-300 ease-in-out group"
                title="Login to your account">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="transition-transform duration-300 group-hover:scale-110">
                  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                  <polyline points="10,17 15,12 10,7" />
                  <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
                <span
                  class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                  Login
                </span>
              </a>
            <?php else: ?>
              <!-- User Account Dropdown for Logged Users -->
              <div class="relative group">
                <button
                  class="user-account-btn flex items-center gap-2 p-2 text-neutral-700 hover:text-primary-600 transition-all duration-300 ease-in-out">
                  <div
                    class="w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                    <?php echo strtoupper(substr(wp_get_current_user()->display_name, 0, 1)); ?>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="transition-transform duration-300 group-hover:rotate-180">
                    <polyline points="6,9 12,15 18,9" />
                  </svg>
                </button>

                <!-- Dropdown Menu -->
                <div
                  class="user-dropdown absolute right-0 top-full mt-2 w-48 bg-white rounded-lg shadow-xl border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[9999]">
                  <div class="py-2">
                    <div class="px-4 py-2 border-b border-gray-100">
                      <p class="text-sm font-medium text-gray-900 truncate">
                        <?php echo wp_get_current_user()->display_name; ?>
                      </p>
                      <p class="text-xs text-gray-500 break-all leading-tight">
                        <?php echo wp_get_current_user()->user_email; ?>
                      </p>
                    </div>
                    <a href="<?php echo home_url(); ?>/dashboard"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                      <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                    <a href="<?php echo home_url(); ?>/dashboard/enrolled-courses"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                      <i class="fas fa-book mr-2"></i>My Courses
                    </a>
                    <a href="<?php echo wp_logout_url(home_url()); ?>"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-200 border-t border-gray-100">
                      <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                  </div>
                </div>
              </div>
            <?php endif; ?>

            <!-- CTA Button -->
            <a href="<?php echo esc_url(home_url('/contact-us')); ?>"
              class="cta-button ml-4 relative px-6 py-3 text-sm font-semibold text-white bg-gradient-to-br from-blue-500 via-blue-600 via-purple-600 to-orange-500 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out overflow-hidden group whitespace-nowrap">
              <span class="relative z-10 flex items-center gap-2">
                <span>Get Started</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="transition-transform duration-300 group-hover:translate-x-1">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </span>
              <!-- Always visible gradient overlay -->
              <div
                class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/30 to-orange-600/20 opacity-100 transition-opacity duration-300">
              </div>
              <!-- Enhanced hover effect -->
              <div
                class="absolute inset-0 bg-gradient-to-br from-blue-600/40 via-purple-600/50 to-orange-600/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              </div>
              <!-- Subtle shine effect -->
              <div
                class="absolute top-0 -left-full h-full w-1/2 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12 group-hover:left-full transition-all duration-700 ease-out">
              </div>
            </a>
          </div>

        </div>
      </section>




      <div class="md:hidden">
        <!-- Hidden checkbox for toggle state -->
        <input type="checkbox" id="menu-toggle" class="hidden peer" />

        <!-- Mobile menu with peer-based toggle -->
        <ul
          class="mobile-nav-menu fixed font-medium text-neutral-800 text-[20px] top-0 left-0 z-50 flex flex-col w-2/3 h-screen gap-4 py-4 px-4 transition-transform duration-300 -translate-x-full peer-checked:translate-x-0 bg-primary-50 shadow-lg overflow-y-auto">

          <!-- Mobile Menu Logo -->
          <div class="flex items-center justify-between mb-6">
            <div class="mobile-menu-logo">
              <img src="<?php echo $image[0]; ?>" alt="Logo" class="h-[50px] w-auto" />
            </div>
            <!-- Close Button -->
            <label for="menu-toggle" class="text-2xl cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path
                  d="M16.0001 17.8667L9.46673 24.4C9.22229 24.6444 8.91118 24.7667 8.5334 24.7667C8.15562 24.7667 7.84451 24.6444 7.60006 24.4C7.35562 24.1556 7.2334 23.8444 7.2334 23.4667C7.2334 23.0889 7.35562 22.7778 7.60006 22.5333L14.1334 16L7.60006 9.46667C7.35562 9.22223 7.2334 8.91111 7.2334 8.53334C7.2334 8.15556 7.35562 7.84445 7.60006 7.6C7.84451 7.35556 8.15562 7.23334 8.5334 7.23334C8.91118 7.23334 9.22229 7.35556 9.46673 7.6L16.0001 14.1333L22.5334 7.6C22.7778 7.35556 23.089 7.23334 23.4667 7.23334C23.8445 7.23334 24.1556 7.35556 24.4001 7.6C24.6445 7.84445 24.7667 8.15556 24.7667 8.53334C24.7667 8.91111 24.6445 9.22223 24.4001 9.46667L17.8667 16L24.4001 22.5333C24.6445 22.7778 24.7667 23.0889 24.7667 23.4667C24.7667 23.8444 24.6445 24.1556 24.4001 24.4C24.1556 24.6444 23.8445 24.7667 23.4667 24.7667C23.089 24.7667 22.7778 24.6444 22.5334 24.4L16.0001 17.8667Z"
                  fill="currentColor" class="text-neutral-800" />
              </svg>
            </label>
          </div>

          <!-- Mobile Navigation Menu -->
          <div class="flex-1">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class' => '',
              'container' => false,
              'walker' => new LinkYou_Mobile_Walker_Nav_Menu(),
              'items_wrap' => '%3$s',
              'fallback_cb' => false,
            ));
            ?>
          </div>

          <!-- Mobile Login/User Section -->
          <?php if (!is_user_logged_in()): ?>
            <!-- Mobile Login Button -->
            <li class="border-t border-gray-200 pt-4 mt-4">
              <a href="<?php echo wp_login_url(get_permalink()); ?>"
                class="flex items-center gap-3 p-3 text-neutral-800 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                  <polyline points="10,17 15,12 10,7" />
                  <line x1="15" y1="12" x2="3" y2="12" />
                </svg>
                Login to Account
              </a>
            </li>
          <?php else: ?>
            <!-- Mobile User Account Section -->
            <li class="border-t border-gray-200 pt-4 mt-4">
              <div class="flex items-center gap-3 p-3 bg-primary-50 rounded-lg mb-3">
                <div
                  class="w-10 h-10 bg-primary-500 rounded-full flex items-center justify-center text-white font-semibold flex-shrink-0">
                  <?php echo strtoupper(substr(wp_get_current_user()->display_name, 0, 1)); ?>
                </div>
                <div class="min-w-0 flex-1">
                  <p class="text-sm font-medium text-gray-900 truncate"><?php echo wp_get_current_user()->display_name; ?>
                  </p>
                  <p class="text-xs text-gray-500 break-all leading-tight">
                    <?php echo wp_get_current_user()->user_email; ?>
                  </p>
                </div>
              </div>

              <div class="space-y-2">
                <a href="<?php echo tutor_utils()->get_tutor_dashboard_url(); ?>"
                  class="flex items-center gap-3 p-2 text-neutral-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-all duration-300">
                  <i class="fas fa-tachometer-alt w-5"></i>
                  Dashboard
                </a>
                <a href="<?php echo tutor_utils()->get_tutor_dashboard_url() . 'enrolled-courses'; ?>"
                  class="flex items-center gap-3 p-2 text-neutral-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-all duration-300">
                  <i class="fas fa-book w-5"></i>
                  My Courses
                </a>
                <a href="<?php echo wp_logout_url(home_url()); ?>"
                  class="flex items-center gap-3 p-2 text-red-600 hover:bg-red-50 rounded-lg transition-all duration-300">
                  <i class="fas fa-sign-out-alt w-5"></i>
                  Logout
                </a>
              </div>
            </li>
          <?php endif; ?>

          <!-- Mobile Contact Button -->
          <a href="#contact"
            class="mt-4 flex relative px-6 py-3 text-sm font-semibold text-white bg-gradient-to-br from-blue-500 via-blue-600 via-purple-600 to-orange-500 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out overflow-hidden group whitespace-nowrap items-center justify-center">
            <span class="relative z-10">Contact Us</span>
            <!-- Always visible gradient overlay -->
            <div
              class="absolute inset-0 bg-gradient-to-br from-blue-600/20 via-purple-600/30 to-orange-600/20 opacity-100 transition-opacity duration-300">
            </div>
            <!-- Enhanced hover effect -->
            <div
              class="absolute inset-0 bg-gradient-to-br from-blue-600/40 via-purple-600/50 to-orange-600/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <!-- Subtle shine effect -->
            <div
              class="absolute top-0 -left-full h-full w-1/2 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12 group-hover:left-full transition-all duration-700 ease-out">
            </div>
          </a>
        </ul>

        <!-- Overlay that closes menu when clicked -->
        <label for="menu-toggle"
          class="mobile-blur-overlay fixed top-0 left-0 z-40 w-full h-screen bg-black bg-opacity-50 backdrop-blur-xl opacity-0 invisible peer-checked:opacity-100 peer-checked:visible transition-all duration-500 cursor-pointer"></label>
      </div>


      <div class="md:h-[120px] h-24"></div>
    </nav>

  </header>

  <div class="">
    <main id="primary" class="grow" role="main">