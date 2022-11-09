<?php
    $services_title = get_theme_mod('set_footer_services_title', __('Please, type some services title', 'template-default'));
    $footer_service_1 = get_theme_mod('set_footer_service_1', __('Please, type some service 1', 'template-default'));
    $service_1_link_footer = get_theme_mod('set_service_1_link_footer', '#');
    $footer_service_2 = get_theme_mod('set_footer_service_2', __('Please, type some service 2', 'template-default'));
    $service_2_link_footer = get_theme_mod('set_service_2_link_footer', '#');
    $footer_service_3 = get_theme_mod('set_footer_service_3', __('Please, type some service 3', 'template-default'));
    $service_3_link_footer = get_theme_mod('set_service_3_link_footer', '#');
    $footer_service_4 = get_theme_mod('set_footer_service_4', __('Please, type some service 4', 'template-default'));
    $service_4_link_footer = get_theme_mod('set_service_4_link_footer', '#');
    $footer_service_5 = get_theme_mod('set_footer_service_5', __('Please, type some service 5', 'template-default'));
    $service_5_link_footer = get_theme_mod('set_service_5_link_footer', '#');
    $footer_service_6 = get_theme_mod('set_footer_service_6', __('Please, type some service 6', 'template-default'));
    $service_6_link_footer = get_theme_mod('set_service_6_link_footer', '#');
?>
<div class="container">
    <h4><?php echo esc_html($services_title); ?></h4>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_1_link_footer); ?>"><?php echo esc_html($footer_service_1); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_2_link_footer); ?>"><?php echo esc_html($footer_service_2); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_3_link_footer); ?>"><?php echo esc_html($footer_service_3); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_4_link_footer); ?>"><?php echo esc_html($footer_service_4); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_5_link_footer); ?>"><?php echo esc_html($footer_service_5); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/arrow-right.svg" alt="arrow-right">
        <p><a href="<?php echo esc_url($service_6_link_footer); ?>"><?php echo esc_html($footer_service_6); ?></a></p>
    </div>
</div>