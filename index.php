<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <main>
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_title( '<h1>', '</h1>' );
                the_content();
            }
        } else {
            echo '<p>No content found</p>';
        }
        ?>
    </main>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
