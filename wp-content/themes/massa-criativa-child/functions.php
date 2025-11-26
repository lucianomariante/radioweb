<?php
/**
 * Theme functions: Massa Criativa Child (Hello Elementor child)
 */

// Enqueue estilos e scripts
add_action('wp_enqueue_scripts', function(){
  // carrega CSS do filho
  wp_enqueue_style('mc-child-global', get_stylesheet_directory_uri() . '/assets/css/global.css', [], '1.0.0', 'all');
  // carrega JS
  wp_enqueue_script('mc-site', get_stylesheet_directory_uri() . '/assets/js/site.js', [], '1.0.0', true);
}, 20);

// Defer para o JS do tema
add_filter('script_loader_tag', function($tag, $handle){
  if ($handle === 'mc-site') {
    $tag = str_replace(' src', ' defer src', $tag);
  }
  return $tag;
}, 10, 2);

// Suportes do tema
add_action('after_setup_theme', function(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus([
    'primary' => __('Menu Principal', 'massa-criativa-child'),
    'footer'  => __('Menu Rodapé', 'massa-criativa-child'),
  ]);
});

// Permite upload de SVG (com cautela)
add_filter('upload_mimes', function($mimes){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

// Desativa emojis nativos do WP
add_action('init', function(){
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
});

// Resource Hints (preconnect)
add_filter('wp_resource_hints', function($hints, $relation_type){
  if ($relation_type === 'preconnect') {
    $hints[] = 'https://fonts.gstatic.com';
    $hints[] = 'https://fonts.googleapis.com';
  }
  return $hints;
}, 10, 2);

// Insere GTM (substitua MC_GTM_ID por seu ID, ex: GTM-XXXX)
add_action('wp_head', function(){
  $gtm = defined('MC_GTM_ID') ? MC_GTM_ID : '';
  if (!$gtm) return;
  echo "<!-- Google Tag Manager -->\n";
  echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{$gtm}');</script>\n";
  echo "<!-- End Google Tag Manager -->\n";
}, 1);

add_action('wp_body_open', function(){
  $gtm = defined('MC_GTM_ID') ? MC_GTM_ID : '';
  if (!$gtm) return;
  echo "<!-- Google Tag Manager (noscript) -->\n";
  echo "<noscript><iframe src='https://www.googletagmanager.com/ns.html?id={$gtm}' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>\n";
  echo "<!-- End Google Tag Manager (noscript) -->\n";
}, 1);

// Preload de fontes locais (exemplo, ajuste caminhos reais)
add_action('wp_head', function(){
  $fonts = [
    // exemplo: get_stylesheet_directory_uri() . '/assets/fonts/Inter-Variable.woff2'
  ];
  foreach ($fonts as $href){
    printf("<link rel='preload' href='%s' as='font' type='font/woff2' crossorigin>\n", esc_url($href));
  }
}, 2);

// Helper para adicionar classes no body (útil para Elementor Conditions)
add_filter('body_class', function($classes){
  if (is_front_page()) $classes[] = 'mc-is-home';
  if (is_page()) $classes[] = 'mc-is-page';
  return $classes;
});