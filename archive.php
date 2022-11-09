<?php get_header(); ?>
    <div class="header-image">
        <?php get_template_part( 'parts/content', 'header-image' ); ?><!-- #Load Header Image -->
    </div>
       <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>'); ?><!-- #Archive Title -->
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?><!-- #Archive Description -->
                    <div class="container">
                        <div class="archive-items">
                            <?php
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content' ); // #Load Content Posts
                                    endwhile;
                                    the_posts_pagination(); // #Pagination Posts
                                else:
                                    ?>
                                    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'template-default' ); ?></p>
                                    <?php
                                endif; ?>
                        </div>
                        <?php get_sidebar(); ?><!-- #Add Sidebar in the site -->
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>