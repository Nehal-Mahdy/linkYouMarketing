<?php

class Moahal_Walker_Nav_Menu extends Walker_Nav_Menu
{
  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);

    $classes = "flex flex-col mt-4 font-medium md:flex-row items-center md:mt-0 md:space-x-8 rtl:space-x-reverse text-center text-xs leading-4";

    $output .= "\n$indent<ul class=\"$classes\">\n";
  }

  function end_lvl(&$output, $depth = 0, $args = null)
  {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = 'nav-link'; // default link class
    if (in_array('current-menu-item', $item->classes)) {
        $classes .= ' active'; // add active class if this is the current page
    }

    // 👉 Fix for #hash links: if URL starts with "/#", prepend home_url()
    if (isset($item->url) && strpos($item->url, '/#') === 0) {
        $item->url = home_url($item->url);
    }

    $output .= "$indent<li>";
    $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($classes) . '">';
    $output .= esc_html($item->title);
    $output .= '</a>';
}



 function end_el(&$output, $item, $depth = 0, $args = null) {
    $output .= "</li>\n";
}

}
class Moahal_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start level for mobile menu
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        // Add specific classes for the mobile menu
        $classes = "flex flex-col mt-4 font-medium items-center text-center text-xs leading-4";
        $output .= "\n$indent<ul class=\"$classes\">\n";
    }

    // End level for mobile menu
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start element for mobile menu
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Add default link class for mobile
        $classes = 'mobile-nav-link'; 
        if (in_array('current-menu-item', $item->classes)) {
            $classes .= ' active-mob-nav'; // add active class if this is the current page
        }

        // Add the <li> class for mobile
        $output .= "$indent<li class='pb-[14px]'>";
        $output .= '<a href="' . esc_attr($item->url) . '" class="' . esc_attr($classes) . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    // End element for mobile menu
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
