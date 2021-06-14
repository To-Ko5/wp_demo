<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <p>アイテムページ</p>
  <?php get_template_part("template-parts/content", get_post_type()); ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>