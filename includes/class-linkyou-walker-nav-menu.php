<?php

class LinkYou_Walker_Nav_Menu extends Walker_Nav_Menu
{
    public $has_children = false;

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        if ($depth == 0) {
            // First level dropdown - enhanced design
            $classes = "absolute top-full left-0 mt-3 w-80 bg-white rounded-xl shadow-2xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-[99999] overflow-hidden backdrop-blur-sm";
        } else {
            // Second level and beyond (sub-sub items) - appear below parent instead of to the right
            $classes = "relative mt-2 w-full bg-gradient-to-r from-gray-50 to-blue-50 rounded-lg border border-gray-100 overflow-hidden";
        }

        $output .= "\n$indent<ul class=\"$classes " . ($depth > 0 ? 'submenu-nested' : 'dropdown-menu') . "\" style=\"" . ($depth == 0 ? 'z-index: 99999 !important; position: absolute !important;' : '') . "\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Check for active states (current item or current item ancestor/parent)
        $is_current = in_array('current-menu-item', $item->classes);
        $is_current_ancestor = in_array('current-menu-ancestor', $item->classes);
        $is_current_parent = in_array('current-menu-parent', $item->classes);
        $is_active = $is_current || $is_current_ancestor || $is_current_parent;

        if ($depth == 0) {
            // Top level items
            $li_classes = $has_children ? 'relative group' : '';
            $classes = 'nav-link relative transition-all duration-500 ease-out hover:text-primary-600 group flex items-center gap-2';

            if ($is_active) {
                $classes .= ' active text-primary-600 font-medium';
            }

            // Fix for #hash links
            if (isset($item->url) && strpos($item->url, '/#') === 0) {
                $item->url = home_url($item->url);
            }

            $output .= "$indent<li class=\"$li_classes\">";
            $output .= '<a href="' . esc_url($item->url) . '" class="px-4 py-3 ' . esc_attr($classes) . '">';
            $output .= esc_html($item->title);

            // Add dropdown arrow for parent items
            if ($has_children) {
                $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300 group-hover:rotate-180"><polyline points="6,9 12,15 18,9"/></svg>';
            }

            // Add hover/active underline
            $underline_width = $is_active ? 'w-full' : 'w-0 group-hover:w-full';
            $output .= '<span class="absolute bottom-0 left-0 ' . $underline_width . ' h-[3px] bg-gradient-to-r from-primary-500 to-primary-700 rounded-sm transition-all duration-500 ease-out group-hover:shadow-[0_2px_8px_rgba(30,64,175,0.4)]"></span>';
            $output .= '</a>';

        } else {
            // Dropdown items (sub and sub-sub) - enhanced design
            if ($depth == 1) {
                // First level sub items
                $li_classes = $has_children ? 'group border-b border-gray-50 last:border-b-0' : 'border-b border-gray-50 last:border-b-0';
                $classes = 'flex items-center justify-between px-6 py-4 text-sm font-medium text-gray-700 hover:bg-gradient-to-r hover:from-primary-50 hover:to-blue-50 hover:text-primary-700 transition-all duration-300 group relative';
            } else {
                // Second level sub items (sub-sub) - nested within the dropdown
                $li_classes = '';
                $classes = 'flex items-center px-4 py-3 text-sm text-gray-600 hover:bg-white hover:text-primary-600 transition-all duration-300 group relative border-l-4 border-transparent hover:border-primary-400';
            }

            if ($is_current) {
                if ($depth == 1) {
                    $classes .= ' bg-gradient-to-r from-primary-100 to-blue-100 text-primary-700 font-semibold shadow-sm';
                } else {
                    $classes .= ' bg-white text-primary-600 font-medium border-l-4 border-primary-500';
                }
            }

            $output .= "$indent<li class=\"$li_classes\">";
            $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($classes) . '">';

            // Add visual indicators for different levels
            if ($depth == 1) {
                $output .= '<div class="flex items-center gap-3">';
                $dot_color = $is_current ? 'bg-primary-600' : 'bg-primary-400 opacity-60 group-hover:opacity-100';
                $output .= '<div class="w-2.5 h-2.5 rounded-full ' . $dot_color . ' transition-all duration-300 flex-shrink-0"></div>';
                $output .= '<span class="font-medium">' . esc_html($item->title) . '</span>';
                $output .= '</div>';

                // Add arrow for sub items that have children (pointing down instead of right)
                if ($has_children) {
                    $arrow_color = $is_current ? 'text-primary-600' : 'text-gray-400 group-hover:text-primary-500';
                    $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="' . $arrow_color . ' transition-all duration-300 flex-shrink-0 group-hover:rotate-180"><polyline points="6,9 12,15 18,9"/></svg>';
                }
            } else {
                $output .= '<div class="flex items-center gap-3">';
                $dot_color = $is_current ? 'bg-primary-500' : 'bg-gray-400 opacity-60 group-hover:opacity-100';
                $output .= '<div class="w-1.5 h-1.5 rounded-full ' . $dot_color . ' transition-all duration-300 flex-shrink-0"></div>';
                $output .= '<span>' . esc_html($item->title) . '</span>';
                $output .= '</div>';
            }

            $output .= '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
class LinkYou_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        // Add padding based on depth for visual hierarchy
        $padding_class = $depth == 0 ? 'pl-4' : 'pl-8';
        $classes = "flex flex-col mt-2 space-y-2 $padding_class";

        $output .= "\n$indent<ul class=\"$classes submenu\" data-depth=\"$depth\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Check if this item has children
        $has_children = in_array('menu-item-has-children', $item->classes);

        // Base classes for mobile navigation
        $base_classes = 'mobile-nav-link relative transition-all duration-300 ease-out hover:text-primary-600 flex items-center justify-between';

        if ($depth == 0) {
            // Top level mobile items
            $classes = $base_classes . ' text-[20px] py-3';
            $li_classes = 'pb-2 border-b border-gray-100 last:border-b-0';
        } else {
            // Sub items - smaller text and padding
            $classes = $base_classes . ' text-[16px] py-2 text-gray-600';
            $li_classes = 'py-1';
        }

        // Add active state
        if (in_array('current-menu-item', $item->classes)) {
            $classes .= $depth == 0 ? ' text-primary-600 font-semibold' : ' text-primary-500';
        }

        // Fix for #hash links
        if (isset($item->url) && strpos($item->url, '/#') === 0) {
            $item->url = home_url($item->url);
        }

        $output .= "$indent<li class='$li_classes'>";

        if ($has_children) {
            // For items with children, make them expandable
            $output .= '<div class="mobile-dropdown-toggle">';
            $output .= '<button type="button" class="w-full ' . esc_attr($classes) . ' mobile-toggle-btn" data-target="submenu-' . $item->ID . '">';
            $output .= '<span>' . esc_html($item->title) . '</span>';
            $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transform transition-transform duration-300 toggle-arrow"><polyline points="6,9 12,15 18,9"/></svg>';
            $output .= '</button>';
            $output .= '</div>';
        } else {
            // Regular link without children
            $output .= '<a href="' . esc_url($item->url) . '" class="' . esc_attr($classes) . '">';
            $output .= '<span>' . esc_html($item->title) . '</span>';
            $output .= '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
