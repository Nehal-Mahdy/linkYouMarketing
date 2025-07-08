<?php
require_once get_template_directory() . '/includes/class-linkyou-walker-nav-menu.php';

/**
 * The header
 *
 * @package Bathe
 */

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

  <link rel="icon" href="<?php echo home_url(); ?>/wp-content/uploads/2025/06/logooooo.png" type="image/png">


  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <?php wp_head(); ?>






</head>

<body class="font-poppins">
  <header class="font-poppins">

    <nav>
      <section class=" fixed top-0 left-0 z-40 w-full bg-white">

        <div
          class=" flex items-center justify-between px-4  sm:px-12 md:px-16 gap-4 sm:gap-6 md:gap-8 lg:gap-12 bg-white">
          <div class="flex items-center">
            <?php
            /**
             * Get custom logo URL
             * @link https://developer.wordpress.org/reference/functions/the_custom_logo/
             */
            $custom_logo_id = get_theme_mod('custom_logo');
            $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>

            <img src="<?php echo $image[0]; ?>" alt="Logo" class="md:w-full md:h-[95px] h-[60px] w-[132px]" />
          </div>

          <label for="menu-toggle" class="text-2xl cursor-pointer flex items-center gap-2 md:hidden relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.20215 23.8333H31.4521V26.75H5.20215V23.8333ZM5.20215 16.5417H31.4521V19.4583H5.20215V16.5417ZM5.20215 9.25H31.4521V12.1667H5.20215V9.25Z"
                fill="#2C5CA1" />
            </svg>
          </label>

          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'hidden items-center text-[#132846] font-medium  text-[15px] py-7 md:flex md:justify-end gap-6 md:w-full',
            'container' => false,
            'walker' => new LinkYou_Walker_Nav_Menu(),
            'fallback_cb' => false,
          ));
          ?>


          <button href="#contact"
            class="hidden md:flex relative px-6 py-3 text-sm font-semibold text-white bg-gradient-to-r from-[#3773C9] to-[#1E4CA3] rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out overflow-hidden group whitespace-nowrap items-center justify-center">
            <span class="relative z-10">Contact Us</span>
            <!-- Hover overlay effect -->
            <div
              class="absolute inset-0 bg-gradient-to-r from-[#2D5ED1] to-[#0F3A7A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <!-- Subtle shine effect -->
            <div
              class="absolute top-0 -left-full h-full w-1/2 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12 group-hover:left-full transition-all duration-700 ease-out">
            </div>
          </button>

        </div>
      </section>




      <div class="md:hidden">
        <!-- Hidden checkbox for toggle state -->
        <input type="checkbox" id="menu-toggle" class="hidden peer" />

        <!-- Mobile menu with peer-based toggle -->
        <ul
          class="fixed font-medium text-[#132846] text-[20px] top-0 left-0 z-50 flex flex-col w-2/3 h-screen gap-4 py-4 px-4 transition-transform duration-300 -translate-x-full peer-checked:translate-x-0 bg-[#EBF1FA] shadow-lg">
          
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
                  fill="#132846" />
              </svg>
            </label>
          </div>

          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => '',
            'container' => false,
            'walker' => new LinkYou_Mobile_Walker_Nav_Menu(),  // Mobile menu walker
            'items_wrap' => '%3$s',
            'fallback_cb' => false,
          ));
          ?>

          <!-- Mobile Contact Button -->
          <a href="#contact"
            class="mt-4 flex relative px-6 py-3 text-sm font-semibold text-white bg-gradient-to-r from-[#3773C9] to-[#1E4CA3] rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 ease-in-out overflow-hidden group whitespace-nowrap items-center justify-center">
            <span class="relative z-10">Contact Us</span>
            <!-- Hover overlay effect -->
            <div
              class="absolute inset-0 bg-gradient-to-r from-[#2D5ED1] to-[#0F3A7A] opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <!-- Subtle shine effect -->
            <div
              class="absolute top-0 -left-full h-full w-1/2 bg-gradient-to-r from-transparent via-white/20 to-transparent transform skew-x-12 group-hover:left-full transition-all duration-700 ease-out">
            </div>
          </a>
        </ul>

        <!-- Overlay that closes menu when clicked -->
        <label for="menu-toggle"
          class="fixed top-0 left-0 z-45 w-full h-screen bg-black bg-opacity-50 backdrop-blur-sm opacity-0 invisible peer-checked:opacity-100 peer-checked:visible transition-all duration-300 cursor-pointer"></label>
      </div>


      <div class="md:h-[65px] h-5"></div>
    </nav>

  </header>

  <div class="">
    <main id="primary" class="grow" role="main">