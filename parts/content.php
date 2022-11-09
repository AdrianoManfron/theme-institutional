<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 275, 275 ) ); ?></a>
    <div class="meta-info">
        <p><?php esc_html_e( 'Posted in', 'template-default' ); ?> <?php echo esc_html( get_the_date() ); ?> <?php esc_html_e( 'by', 'template-default' ); ?> <?php the_author_posts_link(); ?></p>
        <p><?php esc_html_e( 'Categories', 'template-default' ); ?>: <?php the_category( ' ' ); ?></p>
        <p><?php esc_html_e( 'Tags', 'template-default' ); ?>: <?php the_tags( '', ', ' ); ?></p>
    </div>
    <?php the_excerpt(); ?>
</article><!-- #Loop the Posts -->