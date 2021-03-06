<?php

add_shortcode('date', function () {
  return date('Y/n/j');
});

add_shortcode('sum', function ($atts) {
  $atts = shortcode_atts([
    'x' => 0,
    'y' => 0
  ], $atts, 'sum');
  return $atts['x'] + $atts['y'];
});

add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // menuを追加
  register_nav_menus([
    'globanl_nav' => 'グローバルナビゲーション'
  ]);

  // カスタム投稿
  register_post_type('item', [
    'label' => '商品',
    'public' => true,
    'menu_icon' => 'dashicons-store',
    'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
    'has_archive' => true
  ]);

  // カスタムタクソノミー
  register_taxonomy('genre', 'item', [
    'label' => 'item genre',
    'hierarchical' => true
  ]);
});



/*
eyecatch imageを取得する
*/
function get_eyecatch_image()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
  endif;

  return $img;
}
