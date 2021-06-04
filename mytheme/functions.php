<?php
add_action("init", function () {
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
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
