<div class="container">
    <div class="logo">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
        ?>
            <a href="<?php echo esc_html(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
        <?php
        }
        ?>
        <!-- #Site title or logo -->
    </div><!-- .Logo Area -->
    <div class="menu-area">
        <div class="container">
            <nav class="main-menu">
                <button class="check-button">
                    <div class="menu-icon">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button><!-- #Mobile Nav Menu Button -->
                <?php wp_nav_menu(array('theme_location' => 'template_default_main_menu', 'depth' => 2)); ?>
            </nav><!-- #Nav Menu Area -->
        </div>
    </div>
</div>