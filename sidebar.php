<?php if( is_active_sidebar( 'sidebar-blog' ) ): ?>
    <aside class="sidebar">
        <?php get_search_form(); ?>
        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    </aside><!-- #Sidebar the site -->
<?php endif;