<?php
function my_init_method() {
  if( !is_admin() ) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'style', get_bloginfo('template_directory') . '/css/style.css');
    wp_enqueue_style( 'style' );
  }
}
add_action( 'init', 'my_init_method' );

// Регистрация меню
function register_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Главное меню'),
        )
    );
}
add_action('init', 'register_custom_menus');

// Вывод меню с использованием рубрик и подрубрик
function custom_wp_nav_menu() {
    wp_nav_menu(array(
        'theme_location' => 'primary-menu', // Используем зарегистрированное местоположение меню
        'container' => 'nav',
        'container_class' => 'custom-menu', // Создайте класс стиля для меню
        'menu_class' => 'menu',
        'depth' => 2, // Уровень вложенности (0 - только верхний уровень, 1 - верхний уровень и подрубрики)
    ));
}

class Walker_Nav_Menu_Custom extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="submenu">';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args = null) {
        $classes = implode(' ', $item->classes);
        $has_children = in_array('menu-item-has-children', $item->classes);
        
        $output .= '<li class="' . $classes . '">';
        
        if ($depth === 0) {
            $output .= '<a href="' . $item->url . '" class="nav-link">' . $item->title;
        } else {
            $output .= '<a href="' . $item->url . '" class="subnav-link">' . $item->title;
        }
        
        if ($has_children) {
            $output .= ' <i class="fas fa-caret-down"></i>';
        }
        
        $output .= '</a>';
        
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $has_children = in_array('menu-item-has-children', $item->classes);
        
        
        $output .= '</li>';
    }

}

function enqueue_fancybox_scripts() {
    if (is_page()) {
        wp_enqueue_style('fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@4.2.5/dist/jquery.fancybox.min.css');
        wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@4.2.5/dist/jquery.fancybox.min.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_fancybox_scripts');

function add_contact_form_popup() {
    if (is_page()) {
        echo '<script>
            jQuery(document).ready(function($) {
                $(".open-contact-form").on("click", function() {
                    $.fancybox.open({
                        src: "#contact_form_pop",
                        type: "inline"
                    });
                });
            });
        </script>';
    }
}
add_action('wp_header', 'add_contact_form_popup');

