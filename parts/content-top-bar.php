<div class="container">
    <div class="top-contact">
        <?php
            $set_top_bar_address = get_theme_mod('set_top_bar_address', __('Please, type some address', 'template-default'));
            $set_top_bar_operation = get_theme_mod('set_top_bar_operation', __('Please, type some operation', 'template-default'));
            $set_top_bar_phone = get_theme_mod('set_top_bar_phone', __('Please, type some phone', 'template-default'));
        ?>
        <img src="/wp-content/themes/template-default/assets/images/location1.svg" alt="location">
        <p><?php echo esc_html($set_top_bar_address); ?></p>
        <img src="/wp-content/themes/template-default/assets/images/clock1.svg" alt="clock">
        <p><?php echo esc_html($set_top_bar_operation); ?></p>
        <img src="/wp-content/themes/template-default/assets/images/phone1.svg" alt="phone">
        <p><?php echo esc_html($set_top_bar_phone); ?></p>
    </div>
    <div class="top-social">
        <?php
        if (is_active_sidebar('social-medias')) {
            dynamic_sidebar('social-medias');
        }
        ?>
    </div>
</div>