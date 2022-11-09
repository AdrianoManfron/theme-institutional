<div class="container">
    <?php
        $set_team_title = get_theme_mod('set_team_title', __('Please, type some team title', 'template-default'));
        $set_team_subtitle = get_theme_mod('set_team_subtitle', __('Please, type some team subtitle', 'template-default'));
        $set_team_image_1 = wp_get_attachment_url(get_theme_mod('set_team_image_1'));
        $set_team_name_1 = get_theme_mod('set_team_name_1', __('Please, type some team name 1', 'template-default'));
        $set_team_about_1 = get_theme_mod('set_team_about_1', __('Please, type some team about 1', 'template-default'));
        $set_team_image_2 = wp_get_attachment_url(get_theme_mod('set_team_image_2'));
        $set_team_name_2 = get_theme_mod('set_team_name_2', __('Please, type some team name 2', 'template-default'));
        $set_team_about_2 = get_theme_mod('set_team_about_2', __('Please, type some team about 2', 'template-default'));
        $set_team_image_3 = wp_get_attachment_url(get_theme_mod('set_team_image_3'));
        $set_team_name_3 = get_theme_mod('set_team_name_3', __('Please, type some team name 3', 'template-default'));
        $set_team_about_3 = get_theme_mod('set_team_about_3', __('Please, type some team about 3', 'template-default'));
        $set_team_image_4 = wp_get_attachment_url(get_theme_mod('set_team_image_4'));
        $set_team_name_4 = get_theme_mod('set_team_name_4', __('Please, type some team name 4', 'template-default'));
        $set_team_about_4 = get_theme_mod('set_team_about_4', __('Please, type some team about 4', 'template-default'));
        $set_team_image_5 = wp_get_attachment_url(get_theme_mod('set_team_image_5'));
        $set_team_name_5 = get_theme_mod('set_team_name_5', __('Please, type some team name 5', 'template-default'));
        $set_team_about_5 = get_theme_mod('set_team_about_5', __('Please, type some team about 5', 'template-default'));
        $set_team_image_6 = wp_get_attachment_url(get_theme_mod('set_team_image_6'));
        $set_team_name_6 = get_theme_mod('set_team_name_6', __('Please, type some team name 6', 'template-default'));
        $set_team_about_6 = get_theme_mod('set_team_about_6', __('Please, type some team about 6', 'template-default'));
    ?>
    <h2><?php echo esc_html($set_team_title); ?></h2>
    <h4><?php echo nl2br(esc_html($set_team_subtitle)); ?></h4>
</div>
</section>
<section class="team">
    <div class="container">
        <div class="team-items">
            <div class="team-item-1">
                <?php if ($set_team_image_1 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr1.webp" alt="team-1">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_1); ?>" alt="team-1">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_1); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_1)); ?></p>
            </div>
            <div class="team-item">
                <?php if ($set_team_image_2 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr3.webp" alt="team-2">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_2); ?>" alt="team-2">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_2); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_2)); ?></p>
            </div>
            <div class="team-item">
                <?php if ($set_team_image_3 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr1.webp" alt="team-3">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_3); ?>" alt="team-3">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_3); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_3)); ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="team-items">
            <div class="team-item1">
                <?php if ($set_team_image_4 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr3.webp" alt="team-4">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_4); ?>" alt="team-4">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_4); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_4)); ?></p>
            </div>
            <div class="team-item1">
                <?php if ($set_team_image_5 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr1.webp" alt="team-5">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_5); ?>" alt="team-5">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_5); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_5)); ?></p>
            </div>
            <div class="team-item1">
                <?php if ($set_team_image_6 == null) : ?>
                    <img src="/wp-content/themes/template-default/assets/images/dr3.webp" alt="team-6">
                <?php else : ?>
                    <img src="<?php echo esc_url($set_team_image_6); ?>" alt="team-6">
                <?php endif; ?>
                <h3><?php echo esc_html($set_team_name_6); ?></h3>
                <p><?php echo nl2br(esc_html($set_team_about_6)); ?></p>
            </div>
        </div>
    </div>