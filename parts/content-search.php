<h1><?php esc_html_e('Search results for:', 'template-default'); ?> <?php echo get_search_query(); ?></h1>
<?php 
    get_search_form();

    while (have_posts()) :
        the_post();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if ('post' == get_post_type()) : ?>
            <div class="meta-info">
                <p><?php esc_html_e('Posted in', 'template-default'); ?> <?php echo esc_html(get_the_date()); ?> <?php esc_html_e('by', 'template-default'); ?> <?php the_author_posts_link(); ?></p>
                <p><?php esc_html_e('Categories:', 'template-default'); ?> <?php the_category(' '); ?></p>
                <p><?php esc_html_e('Tags:', 'template-default'); ?> <?php the_tags('', ', '); ?></p>
            </div>
        <?php endif; ?>
        <div class="content">
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php
endwhile;
the_posts_pagination(); ?>