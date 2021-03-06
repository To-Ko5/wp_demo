<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="contents">
        <!-- 一覧表示 -->
        <?php while (have_posts()) : the_post(); ?>
          <div class="card">
            <a href="<?php the_permalink(); ?>">
              <p><?php the_title(); ?>
              </p>
              <p><?php the_excerpt(); ?></p>
              <p><?php the_time(get_option('date_format')); ?></p>
              <p><?php the_author(); ?></p>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="pagination">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
      </div>
    <?php else : ?>
      <h1>記事がありません</h1>
      <div><a href="/">トップへ戻る</a></div>
    <?php endif; ?>
  </div>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>