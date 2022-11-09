<?php
    $about_title = get_theme_mod('set_about_title', __('Please, type some about title', 'template-default'));
    $about_text_area = get_theme_mod('set_about_text', __('Please, type some about us text', 'template-default'));
    $about_height = get_theme_mod('set_about_height', 800);
    $about_image = wp_get_attachment_url(get_theme_mod('set_about_image'));
?>
<div class="container">
    <div class="about-content">
        <h2><?php echo esc_html($about_title); ?></h2>
        <p><?php echo nl2br(esc_html($about_text_area)); ?></p>
    </div>
    <div class="about-image" style="min-height: <?php echo esc_attr($about_height); ?>px">
        <?php if ($about_image == null) : ?>
            <img src="/wp-content/themes/template-default/assets/images/about.webp" alt="about">
        <?php else : ?>
            <img src="<?php echo esc_url($about_image); ?>" alt="about">
        <?php endif; ?>
    </div>
</div>