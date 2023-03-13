<?php get_header();?>
<div class="error">
    <h1>Looks like something went wrong!</h1>
    <img class="error-image" src="<?php echo get_template_directory_uri(); ?>/404.png" alt="404 error">
    <button>Back to home</button>
</div>
<?php get_footer('simple'); ?>