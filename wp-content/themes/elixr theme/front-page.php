<?php get_header();?>
<?php get_template_part('components/content');?>
<!-- <h1><?php echo get_the_title(); ?></h1>

<h1> Beautiful skin starts here. </h1> -->
<div class="posts-container">
<?php
// Define the WP_Query arguments
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // Display all posts
);
// Instantiate a new WP_Query object
$query = new WP_Query($args);

// Check if any posts were found
if ($query->have_posts()) {

    // Loop through the posts and display them
    while ($query->have_posts()) {
        $query->the_post();

        // Get the post categories
        $categories = get_the_category();

        // Loop through the categories and add a class to the post
        foreach ($categories as $category) {
            $class = 'post-category-' . $category->slug;
        }
        ?>
        <section class="post">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>" />
                <?php endif; ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            </section>
        <?php
    }

    // Restore the global post object
    wp_reset_postdata();

} else {

    // Display a message if no posts were found
    echo 'No posts found.';

}
?>
</div>





<?php get_footer(); ?>

