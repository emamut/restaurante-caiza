<?php
function add_theme_scripts()
{
  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '1.1', 'all');
  wp_enqueue_style('bootstrap.css', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '1.1', 'all');

  // wp_enqueue_script('app.js', get_template_directory_uri() . '/dist/js/app.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );