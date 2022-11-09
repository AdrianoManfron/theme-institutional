<?php
    $contact_title = get_theme_mod('set_contact_title',  __('Please, type some contact title', 'template-default'));
    $contact_subtitle = get_theme_mod('set_contact_subtitle', __('Please, type some contact subtitle', 'template-default'));
    $phone = get_theme_mod('set_phone',  __('Please, type some contact phone', 'template-default'));
    $cellphone = get_theme_mod('set_cellphone',  __('Please, type some contact cellphone', 'template-default'));
    $cellphone_link = get_theme_mod('set_cellphone_link', '#');
    $email = get_theme_mod('set_email', __('Please, type some contact e-mail', 'template-default'));
    $email_link = get_theme_mod('set_email_link', '#');
    $address_contact = get_theme_mod('set_address_contact', __('Please, type some address', 'template-default'));
?>
<div class="container">
    <div class="container">
        <div class="phones">
            <h2><?php echo esc_html($contact_title); ?></h2>
            <h4><?php echo nl2br(esc_html($contact_subtitle)); ?></h4>
            <div class="icons">
                <img src="/wp-content/themes/template-default/assets/images/phone.svg" alt="phone">
                <p><?php echo esc_html($phone); ?></p>
            </div>
            <div class="icons">
                <img src="/wp-content/themes/template-default/assets/images/whatsapp.svg" alt="whatsapp">
                <p><a href="<?php echo esc_url($cellphone_link); ?>"><?php echo esc_html($cellphone); ?></a></p>
            </div>
            <div class="icons">
                <img src="/wp-content/themes/template-default/assets/images/mail.svg" alt="e-mail">
                <p><a href="<?php echo esc_url($email_link); ?>"><?php echo esc_html($email); ?></a></p>
            </div>
            <div class="icons">
                <img src="/wp-content/themes/template-default/assets/images/location.svg" alt="location">
                <p><?php echo esc_html($address_contact); ?></p>
            </div>
            <div class="maps">
                <?php
                if (is_active_sidebar('maps')) {
                    dynamic_sidebar('maps');
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form">
            <?php
            if (is_active_sidebar('contact')) {
                dynamic_sidebar('contact');
            }
            ?>
        </div>
    </div>
</div>