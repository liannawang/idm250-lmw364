<?php get_header();?>

<h1><?php echo get_the_title(); ?></h1>

<h1> Beautiful skin starts here. </h1>

<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>

<?php get_template_part('component/content');?>

<?php get_footer(); ?>

