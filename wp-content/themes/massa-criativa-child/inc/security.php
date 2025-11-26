<?php
// Remove versão do WP do head e assets
add_filter('the_generator', '__return_empty_string');
add_filter('style_loader_src', function($src){
  return remove_query_arg('ver', $src);
}, 15);
add_filter('script_loader_src', function($src){
  return remove_query_arg('ver', $src);
}, 15);