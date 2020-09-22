<?php
function add_theme_scripts()
{
  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '1.1', 'all');
  wp_enqueue_style('bootstrap.css', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '1.1', 'all');

  wp_enqueue_script('vue.js', '//cdn.jsdelivr.net/npm/vue/dist/vue.js', array (), 1.1, true);
  wp_enqueue_script('axios.js', '//cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array (), 1.1, true);
  wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function register_php(){
  require_once get_template_directory() . '/helpers/required-plugins.php';
  require_once get_template_directory() . '/helpers/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';
  require_once get_template_directory() . '/helpers/rest_custom_endpoints.php';
}
add_action( 'after_setup_theme', 'register_php' );