<?php if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'custom-sidebar' ); ?>
    </div><!-- #secondary -->
<?php endif; ?>
