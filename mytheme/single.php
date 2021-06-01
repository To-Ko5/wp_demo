<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/header'); ?>
  <p>詳細ページ</p>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()) : ?>
        <div><?php the_post_thumbnail(array(32, 32), array("alt" => "アイキャッチ")); ?></div>

        <!-- 背景としてthumbnailを表示する場合 -->
        <?php $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id); ?>
        <div style="background-image: url('<?php echo $img[0]; ?>'); width: 400px; height: 200px;"></div>
      <?php endif; ?>

      <p>作者: <span><?php the_author(); ?> </span></p>
      <p>日付: <span><?php the_date(); ?> </span></p>
      <div>
        <p><?php the_content(); ?></p>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>