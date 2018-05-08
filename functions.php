<?php

function load_scripts() {

  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Gloria+Hallelujah|Shadows+Into+Light|Maven+Pro');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.12/css/all.css');
  wp_enqueue_style('css_stylesheet', get_stylesheet_uri());

  wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
  wp_enqueue_script('popper-js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
  wp_enqueue_style('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'load_scripts');
