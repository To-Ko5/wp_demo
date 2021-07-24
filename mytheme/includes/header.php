<?php wp_body_open(); ?>
<header class="header">
  <div class="header__title">
    <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>

  <div class="header_menu header_menu__pc">
    <?php wp_nav_menu(); ?>
  </div>
  <div id="menu" class="header_menu header_menu__not_pc">
    <?php wp_nav_menu(); ?>
  </div>

  <div class="menu_button">
    <button id="menu_button">
      Menu
    </button>
  </div>
</header>