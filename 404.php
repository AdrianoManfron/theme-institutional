<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="error-404">
                        <h1><?php esc_html_e( 'Page not found!', 'template-default' ); ?></h1>
                        <p><?php esc_html_e( 'Unfortunately, the page you tried to readh does not exist on this site.', 'template-default'); ?></p>
                    <!-- #Error 404  -->
                    <div class="error">
                        <p><?php esc_html_e( 'How about doing a search?', 'template-default' ); ?></p>
                        <?php get_search_form(); ?>
                        <?php the_widget( 'WP_Widget_Recent_Posts', array(
                            'title' =>  esc_html__( 'Latest Posts', 'template-default' ),
                            'number'    =>  5
                        ) ); ?><!-- #Latest Posts -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>