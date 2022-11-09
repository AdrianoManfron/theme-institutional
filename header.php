<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div id="page" class="site">
            <header>
                <section class="top-bar">
                    <?php get_template_part( 'parts/content', 'top-bar' ); ?><!-- #Load Top Bar -->
                </section><!-- #Top Bar -->
                <section class="logo-menu">
                    <?php get_template_part( 'parts/content', 'logo-menu' ); ?><!-- #Load Logo and Menu -->
                </section><!-- #Logo Menu -->
            </header><!-- #Site Header -->
        <div class="arrow-up">
            <a href="#page"><img src="/wp-content/themes/template-default/assets/images/up-arrow.svg" alt="arrow-up"></a>
        </div>