<?php

/* Template Name: Sidebar */

// good for: Contact Pages
// can also be named templates-sidebar.php

// <!-- For all other pages on your site -->
 get_header();?>

<!-- Gets the title of the page and puts it on the page -->
<h1> <?php echo get_the_title(); ?> </h1>


<h1> This is just a sidebar template.</h1>

<?php get_footer(); ?>
