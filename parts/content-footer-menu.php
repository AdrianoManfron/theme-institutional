<?php
    $footer_institutional_title = get_theme_mod('set_footer_institutional', __('Please, type some institutional title', 'template-default'));
    $footer_about = get_theme_mod('set_footer_about', __('Please, type some about title', 'template-default'));
    $about_link_footer = get_theme_mod('set_about_link_footer', '#');
    $footer_team = get_theme_mod('set_footer_team', __('Please, type some team title', 'template-default'));
    $team_link_footer = get_theme_mod('set_team_link_footer', '#');
    $footer_services = get_theme_mod('set_footer_services', __('Please, type some services title', 'template-default'));
    $services_link_footer = get_theme_mod('set_services_link_footer', '#');
    $footer_partners = get_theme_mod('set_footer_partners', __('Please, type some partners title', 'template-default'));
    $partners_link_footer = get_theme_mod('set_partners_link_footer', '#');
    $footer_blog = get_theme_mod('set_footer_blog', __('Please, type some blog title', 'template-default'));
    $blog_link_footer = get_theme_mod('set_blog_link_footer', '#');
    $footer_contact = get_theme_mod('set_footer_contact', __('Please, type some contact title', 'template-default'));
    $contact_link_footer = get_theme_mod('set_contact_link_footer', '#');
    $footer_privacy = get_theme_mod('set_footer_privacy', __('Please, type some privacy policy title', 'template-default'));
    $set_privacy_link_footer = get_theme_mod('set_privacy_link_footer', '#');
?>
<div class="container">
    <h4><?php echo esc_html($footer_institutional_title); ?></h4>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/about-us.svg" alt="about">
        <p><a href="<?php echo esc_url($about_link_footer); ?>"><?php echo esc_html($footer_about); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/team.svg" alt="team">
        <p><a href="<?php echo esc_url($team_link_footer); ?>"><?php echo esc_html($footer_team); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/services.svg" alt="services">
        <p><a href="<?php echo esc_url($services_link_footer); ?>"><?php echo esc_html($footer_services); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/partners.svg" alt="partners">
        <p><a href="<?php echo esc_url($partners_link_footer); ?>"><?php echo esc_html($footer_partners); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/blog.svg" alt="blog">
        <p><a href="<?php echo esc_url($blog_link_footer); ?>"><?php echo esc_html($footer_blog); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/contact.svg" alt="contact">
        <p><a href="<?php echo esc_url($contact_link_footer); ?>"><?php echo esc_html($footer_contact); ?></a></p>
    </div>
    <div class="link">
        <img src="/wp-content/themes/template-default/assets/images/privacy.svg" alt="privacy">
        <p><a href="<?php echo esc_url($set_privacy_link_footer); ?>"><?php echo esc_html($footer_privacy); ?></a></p>
    </div>
</div>