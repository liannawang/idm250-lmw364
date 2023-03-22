<div class="hero-home">
    <h1> <?php echo get_the_title(); ?> </h1>
    <?php $image = get_field('header_img'); ?>

    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    
    <p> <?php echo get_field('caption'); ?> </p>

    <?php $cta_button = get_field('cta_button');
    if ($cta_button): ?>
        <button onclick="window.location.href = '<?php echo $cta_button['button_link']?>';" type="button"> <?php echo $cta_button['button_text']; ?> </button>
    <?php endif; ?>
    <div class="horizontal-line horizontal-line-home hero-line"></div>
</div>