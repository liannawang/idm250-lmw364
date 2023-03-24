
      <header>
      <nav>
        <div class="container">
          <a class="logo" href="<?php echo site_url(); ?>">elixr.</a>
          <ul class="menu nav-links none">
          <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        // $menu = wp_get_nav_menu_items('primary-menu');
        ?>
          </ul>
          <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
          <!-- <div class="toggle"></div> -->
        </div>
      </nav>
    </header>
    <section class="hero">
      <div class="overlay"></div>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image"
      class="hero-img--home">
        <div class="hero-text">
        <h1><?php echo get_the_title(); ?></h1>
        <p><?php echo get_the_excerpt(); ?></p>
      </div>
    </section>