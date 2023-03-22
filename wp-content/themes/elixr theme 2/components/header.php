<div class="header-back"></div>
<header> 
    <p> Elixr. </p>
    <nav class="menu">
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        $menu = wp_get_nav_menu_items('primary-menu');
        ?>
        <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
<div class=wrapper>
<main>
    <div class="top-space"></div>