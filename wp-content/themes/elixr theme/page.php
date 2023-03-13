<!-- For all other pages on your site -->
<?php get_header();?>

<!-- Gets the title of the page and puts it on the page -->
<h1> <?php echo get_the_title(); ?> </h1>

<?php get_template_part('components/content'); ?>

<?php get_footer(); ?>
