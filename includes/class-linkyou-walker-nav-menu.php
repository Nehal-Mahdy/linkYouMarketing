<?php

class LinkYou_Walker_Nav_Menu extends Walker_Nav_Menu
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

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = 'nav-link relative transition-all duration-500 ease-out hover:text-[#0063a4] group'; // default link class with hover effects
        if (in_array('current-menu-item', $item->classes)) {
            $classes .= ' active'; // add active class if this is the current page
        }

        // 👉 Fix for #hash links: if URL starts with "/#", prepend home_url()
        if (isset($item->url) && strpos($item->url, '/#') === 0) {
            $item->url = home_url($item->url);
        }

        $output .= "$indent<li>";
        $output .= '<a href="' . esc_url($item->url) . '" class="px-3 py-2 ' . esc_attr($classes) . '">';
        $output .= esc_html($item->title);
        // Add hover underline that matches the active state
        $output .= '<span class="absolute bottom-[-2px] left-0 w-0 h-[3px] bg-gradient-to-r from-[#3773C9] to-[#1E4CA3] rounded-sm transition-all duration-500 ease-out group-hover:w-full group-hover:shadow-[0_2px_8px_rgba(55,115,201,0.4)]"></span>';
        $output .= '</a>';
    }



    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }

}
class LinkYou_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
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

        // Add default link class for mobile with hover effects matching active state
        $classes = 'mobile-nav-link relative transition-all duration-500 ease-out hover:text-[#0063a4] group';
        if (in_array('current-menu-item', $item->classes)) {
            $classes .= ' active-mob-nav'; // add active class if this is the current page
        }

        // Add the <li> class for mobile
        $output .= "$indent<li class='pb-[14px]'>";
        $output .= '<a href="' . esc_attr($item->url) . '" class="' . esc_attr($classes) . '">';
        $output .= esc_html($item->title);
        // Add hover underline that matches the active state for mobile
        $output .= '<span class="absolute bottom-[-2px] left-1/2 transform -translate-x-1/2 w-0 h-[3px] bg-gradient-to-r from-[#3773C9] to-[#1E4CA3] rounded-sm transition-all duration-500 ease-out group-hover:w-full group-hover:shadow-[0_2px_8px_rgba(55,115,201,0.4)]"></span>';
        $output .= '</a>';
    }

    // End element for mobile menu
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
