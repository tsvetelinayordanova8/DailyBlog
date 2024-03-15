<?php
add_theme_support('post-thumbnails');

function registerMenu(){
    register_nav_menu('main-menu', 'Main menu');
}
add_action('init', 'registerMenu');
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
  function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

  function registerSidebar(){
    $options = [
        'id' => 'sidebar',
        'name' => 'Sidebar',
        'description' => 'This is right sidebar'
    ];

    register_sidebar($options);
  }
  add_action('widgets_init', 'registerSidebar');

  function registerAdminMenu(){
    add_menu_page(
        'Theme settings','Theme settings',
        'manage_options', 'theme-settings',
        'showThemeSettings','dashicons-cover-image',50
    );
  }

  function showThemeSettings(){
    include __DIR__ . DIRECTORY_SEPARATOR .'views' . DIRECTORY_SEPARATOR . 'theme-settings.php';
  }
  add_action('admin_menu', 'registerAdminMenu');

  function registerThemeOptions(){
    register_setting('hpg', 'hp_heading');
    register_setting('hpg', 'hp_sub_heading');
    register_setting('hpg', 'logo');
  }
  add_action('admin_init', 'registerThemeOptions');