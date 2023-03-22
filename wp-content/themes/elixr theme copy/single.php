<?php get_header(); ?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part('components/content');?>
</article>
<!-- <h2> Categories for this post </h2> -->



<?php get_footer(); ?>