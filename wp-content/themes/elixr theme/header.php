<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>

    <link rel="stylesheet" href="/wp-content/themes/idm-250-theme/dist/styles/main.css">
   <!-- Google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Outfit:wght@200;400;800&display=swap" rel="stylesheet">

   <?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php 
wp_body_open(); 
get_template_part('components/header');
?>

