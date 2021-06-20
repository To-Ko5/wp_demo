<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <div class="container">
    <h1>アイテムジャンル</h1>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <p><?php the_archive_title(); ?></p>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
</body>

</html>