<?php
    $blog_title = get_theme_mod('set_blog_title',  __('Please, type some blog title', 'template-default'));
    $blog_subtitle = get_theme_mod('set_blog_subtitle', __('Please, type some blog subtitle', 'template-default'));
    $blog_per_page = get_theme_mod('set_per_page', 3);
    $blog_category_include = get_theme_mod('set_category_include');
    $blog_category_exclude = get_theme_mod('set_category_exclude');
?>
<h2><?php echo esc_html($blog_title); ?></h2>
<h4><?php echo nl2br(esc_html($blog_subtitle)); ?></h4>
<div class="container">
    <?php
        $args = array(
            'post_type' =>  'post',
            'posts_per_page' =>  esc_html($blog_per_page),
            'category__in'  =>  explode(",", esc_html($blog_category_include)),
            'category__not_in'  =>  explode(",", esc_html($blog_category_exclude))
        );

        $postlist = new WP_Query($args);

        if ($postlist->have_posts()) :
            while ($postlist->have_posts()) : $postlist->the_post();
            get_template_part( 'parts/content', 'blog' ); // #Load Content Blog
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <p><?php esc_html_e('Nothing yet to be displayed!', 'template-default'); ?></p>
    <?php
    endif; ?>
</div>