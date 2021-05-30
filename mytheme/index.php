<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TK Theme</title>
  <?php wp_head(); ?>
  <!-- required -->
</head>

<body>
  <div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- 一覧表示 -->
        <h1><?php the_title(); ?>
        </h1>
      <?php endwhile; ?>
    <?php else : ?>
      <h1>記事がありません</h1>
    <?php endif; ?>
  </div>
  <?php wp_footer(); ?>
  <!-- required -->
</body>

</html>