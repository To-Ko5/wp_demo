<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- 一覧表示 -->
        <div>
          <a href="<?php the_permalink(); ?>">
            <h1><?php the_title(); ?>
            </h1>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_time(get_option('date_format')); ?></p>
            <p><?php the_author(); ?></p>
          </a>
        </div>
      <?php endwhile; ?>
      <div>
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
      </div>
    <?php else : ?>
      <h1>記事がありません</h1>
    <?php endif; ?>
  </div>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>