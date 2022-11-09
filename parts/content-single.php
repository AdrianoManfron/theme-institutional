<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <div class="meta-info">
        <p><?php esc_html_e('Posted in', 'template-default'); ?> <?php echo esc_html(get_the_date()); ?> <?php esc_html_e('by', 'template-default'); ?> <?php the_author_posts_link(); ?></p>
        <p><?php esc_html_e('Categories:', 'template-default'); ?> <?php the_category(' '); ?></p>
        <p><?php esc_html_e('Tags:', 'template-default'); ?> <?php the_tags('', ', '); ?></p>
    </div><!-- #Infos the Posts -->
    <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>