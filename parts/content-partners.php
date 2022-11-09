<?php
    $partners_title = get_theme_mod('set_partners_title',  __('Please, type some partners title', 'template-default'));
    $partners_subtitle = get_theme_mod('set_partners_subtitle', __('Please, type some partners subtitle', 'template-default'));
    $partner_image_1 = wp_get_attachment_url(get_theme_mod('set_partner_image_1'));
    $partner_image_2 = wp_get_attachment_url(get_theme_mod('set_partner_image_2'));
    $partner_image_3 = wp_get_attachment_url(get_theme_mod('set_partner_image_3'));
    $partner_image_4 = wp_get_attachment_url(get_theme_mod('set_partner_image_4'));
?>
<div class="container">
    <div class="partners">
        <h2><?php echo esc_html($partners_title); ?></h2>
        <h4><?php echo nl2br(esc_html($partners_subtitle)); ?></h4>
        <div class="slide-images">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <?php if ($partner_image_1 == null) : ?>
                            <img src="/wp-content/themes/template-default/assets/images/invisalign.png" alt="partner-1">
                        <?php else : ?>
                            <img src="<?php echo esc_url($partner_image_1); ?>" alt="partner-1">
                        <?php endif; ?>
                    </div>
                    <div class="slide">
                        <?php if ($partner_image_2 == null) : ?>
                            <img src="/wp-content/themes/template-default/assets/images/invisalign.png" alt="partner-2">
                        <?php else : ?>
                            <img src="<?php echo esc_url($partner_image_2); ?>" alt="partner-2">
                        <?php endif; ?>
                    </div>
                    <div class="slide">
                        <?php if ($partner_image_3 == null) : ?>
                            <img src="/wp-content/themes/template-default/assets/images/invisalign.png" alt="partner-3">
                        <?php else : ?>
                            <img src="<?php echo esc_url($partner_image_3); ?>" alt="partner-3">
                        <?php endif; ?>
                    </div>
                    <div class="slide">
                        <?php if ($partner_image_4 == null) : ?>
                            <img src="/wp-content/themes/template-default/assets/images/invisalign.png" alt="partner-4">
                        <?php else : ?>
                            <img src="<?php echo esc_url($partner_image_4); ?>" alt="partner-4">
                        <?php endif; ?>
                    </div>
                    <!--slide images end-->
                </div>
            </div>
        </div>
    </div>
</div>