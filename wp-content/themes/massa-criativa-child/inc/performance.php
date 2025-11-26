<?php
// Exemplo de micro-otimizações específicas (ajuste conforme plugins instalados)
add_action('wp_enqueue_scripts', function(){
  // Desenfileira o block library se não usar Gutenberg nas páginas
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-blocks-style');
}, 200);