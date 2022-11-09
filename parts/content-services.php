<?php
    $set_services_title = get_theme_mod('set_services_title', __('Please, type some services title', 'template-default'));
    $set_services_subtitle = get_theme_mod('set_services_subtitle', __('Please, type some services subtitle', 'template-default'));
    $set_service_image_1 = wp_get_attachment_url(get_theme_mod('set_service_image_1'));
    $set_service_name_1 = get_theme_mod('set_service_name_1', __('Please, type some service name 1', 'template-default'));
    $set_service_about_1 = get_theme_mod('set_service_about_1', __('Please, type some service about 1', 'template-default'));
    $set_service_link_1 = get_theme_mod('set_service_link_1', '#');
    $set_service_image_2 = wp_get_attachment_url(get_theme_mod('set_service_image_2'));
    $set_service_name_2 = get_theme_mod('set_service_name_2', __('Please, type some service name 2', 'template-default'));
    $set_service_about_2 = get_theme_mod('set_service_about_2', __('Please, type some service about 2', 'template-default'));
    $set_service_link_2 = get_theme_mod('set_service_link_2', '#');
    $set_service_image_3 = wp_get_attachment_url(get_theme_mod('set_service_image_3'));
    $set_service_name_3 = get_theme_mod('set_service_name_3', __('Please, type some service name 3', 'template-default'));
    $set_service_about_3 = get_theme_mod('set_service_about_3', __('Please, type some service about 3', 'template-default'));
    $set_service_link_3 = get_theme_mod('set_service_link_3', '#');
    $set_service_image_4 = wp_get_attachment_url(get_theme_mod('set_service_image_4'));
    $set_service_name_4 = get_theme_mod('set_service_name_4', __('Please, type some service name 4', 'template-default'));
    $set_service_about_4 = get_theme_mod('set_service_about_4', __('Please, type some service about 4', 'template-default'));
    $set_service_link_4 = get_theme_mod('set_service_link_4', '#');
    $set_service_image_5 = wp_get_attachment_url(get_theme_mod('set_service_image_5'));
    $set_service_name_5 = get_theme_mod('set_service_name_5', __('Please, type some service name 5', 'template-default'));
    $set_service_about_5 = get_theme_mod('set_service_about_5', __('Please, type some service about 5', 'template-default'));
    $set_service_link_5 = get_theme_mod('set_service_link_5', '#');
    $set_service_image_6 = wp_get_attachment_url(get_theme_mod('set_service_image_6'));
    $set_service_name_6 = get_theme_mod('set_service_name_6', __('Please, type some service name 6', 'template-default'));
    $set_service_about_6 = get_theme_mod('set_service_about_6', __('Please, type some service about 6', 'template-default'));
    $set_service_link_6 = get_theme_mod('set_service_link_6', '#');
    $set_service_image_7 = wp_get_attachment_url(get_theme_mod('set_service_image_7'));
    $set_service_name_7 = get_theme_mod('set_service_name_7', __('Please, type some service name 7', 'template-default'));
    $set_service_about_7 = get_theme_mod('set_service_about_7', __('Please, type some service about 7', 'template-default'));
    $set_service_link_7 = get_theme_mod('set_service_link_7', '#');
    $set_service_image_8 = wp_get_attachment_url(get_theme_mod('set_service_image_8'));
    $set_service_name_8 = get_theme_mod('set_service_name_8', __('Please, type some service name 8', 'template-default'));
    $set_service_about_8 = get_theme_mod('set_service_about_8', __('Please, type some service about 8', 'template-default'));
    $set_service_link_8 = get_theme_mod('set_service_link_8', '#');
?>
<h2><?php echo esc_html($set_services_title); ?></h2>
<h4><?php echo nl2br(esc_html($set_services_subtitle)); ?></h4>
<div class="container">
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_1 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_1); ?>"><img src="/wp-content/themes/template-default/assets/images/196644.png" alt="services-1"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_1); ?>"><img src="<?php echo esc_url($set_service_image_1); ?>" alt="services-1"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_1); ?>"><?php echo esc_html($set_service_name_1); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_1)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_2 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_2); ?>"><img src="/wp-content/themes/template-default/assets/images/267350.png" alt="services-2"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_2); ?>"><img src="<?php echo esc_url($set_service_image_2); ?>" alt="services-2"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_2); ?>"><?php echo esc_html($set_service_name_2); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_2)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_3 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_3); ?>"><img src="/wp-content/themes/template-default/assets/images/270348.png" alt="services-3"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_3); ?>"><img src="<?php echo esc_url($set_service_image_3); ?>" alt="services-3"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_3); ?>"><?php echo esc_html($set_service_name_3); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_3)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_4 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_4); ?>"><img src="/wp-content/themes/template-default/assets/images/196644.png" alt="services-4"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_4); ?>"><img src="<?php echo esc_url($set_service_image_4); ?>" alt="services-4"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_4); ?>"><?php echo esc_html($set_service_name_4); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_4)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_5 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_5); ?>"><img src="/wp-content/themes/template-default/assets/images/267350.png" alt="services-5"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_5); ?>"><img src="<?php echo esc_url($set_service_image_5); ?>" alt="services-5"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_5); ?>"><?php echo esc_html($set_service_name_5); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_5)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_6 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_6); ?>"><img src="/wp-content/themes/template-default/assets/images/270348.png" alt="services-6"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_6); ?>"><img src="<?php echo esc_url($set_service_image_6); ?>" alt="services-6"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_6); ?>"><?php echo esc_html($set_service_name_6); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_6)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_7 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_7); ?>"><img src="/wp-content/themes/template-default/assets/images/196644.png" alt="services-7"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_7); ?>"><img src="<?php echo esc_url($set_service_image_7); ?>" alt="services-7"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_7); ?>"><?php echo esc_html($set_service_name_7); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_7)); ?></p>
    </div>
    <div class="services-item">
        <figure>
            <?php if ($set_service_image_8 == null) : ?>
                <a href="<?php echo esc_url($set_service_link_8); ?>"><img src="/wp-content/themes/template-default/assets/images/270348.png" alt="services-8"></a>
            <?php else : ?>
                <a href="<?php echo esc_url($set_service_link_8); ?>"><img src="<?php echo esc_url($set_service_image_8); ?>" alt="services-8"></a>
            <?php endif; ?>
        </figure>
        <h2><a href="<?php echo esc_url($set_service_link_8); ?>"><?php echo esc_html($set_service_name_8); ?></a></h2>
        <p><?php echo nl2br(esc_html($set_service_about_8)); ?></p>
    </div>
</div>