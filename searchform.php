<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ) ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php esc_html_e( 'Search for:', 'template-default' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <input type="submit" id="searchsubmit" value="<?php esc_html_e( 'Search', 'template-default' ); ?>">
        <input type="hidden" value="post" name="post_type" id="post_type" />
    </div>
</form>