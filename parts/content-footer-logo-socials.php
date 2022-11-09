<div class="container">
    <div class="logo-socials">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
        ?>
            <a href="<?php echo esc_html(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
        <?php
        }

        if (is_active_sidebar('social-medias')) {
            dynamic_sidebar('social-medias');
        }
        ?>
        <!-- #Site title or logo and Social Medias-->
    </div>
</div>