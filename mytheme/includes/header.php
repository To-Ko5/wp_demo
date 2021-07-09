<?php wp_body_open(); ?>
<header class="header">
  <div class="header__title">
    <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>

  <div class="header__menu">
    <?php wp_nav_menu(); ?>
  </div>
</header>