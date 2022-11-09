<?php
    $hero_title = get_theme_mod('set_hero_title', __('Please, type some banner title', 'template-default'));
    $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please, type some banner subtitle', 'template-default'));
    $text_button = get_theme_mod('set_hero_text_button', __('Learn More', 'template-default'));
    $link_button = get_theme_mod('set_hero_link_button', '#');
    $hero_height = get_theme_mod('set_hero_height', 800);
    $hero_image = wp_get_attachment_url(get_theme_mod('set_hero_image'));
?>
<section class="hero" style="background-image: url(<?php echo esc_url($hero_image); ?>)">
    <div class="overlay" style="min-height: <?php echo esc_attr($hero_height); ?>px">
        <div class="container">
            <div class="hero-items">
                <h1><?php echo esc_html($hero_title); ?></h1>
                <p><?php echo nl2br(esc_html($hero_subtitle)); ?></p>
                <a href="<?php echo esc_html($link_button); ?>"><?php echo esc_html($text_button); ?></a>
            </div>
        </div>
    </div>
</section>