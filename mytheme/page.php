<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <p>固定ページ</p>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
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