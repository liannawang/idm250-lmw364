<?php get_header(); ?>

This is a single .php

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php get_template_part('components/content');?>
</article>
<h2> Categories for this post </h2>

<?php
$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

foreach ($terms as $term) {
    echo $term->name;

}

?>

<?php get_footer(); ?>