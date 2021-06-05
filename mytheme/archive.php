<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <h1>categoryページ<span><?php wp_title(); ?></span></h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <p><?php the_title(); ?></p>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>