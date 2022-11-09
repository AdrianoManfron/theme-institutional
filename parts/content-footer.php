<div class="container">
    <div class="copyright">
        <p>Copyright © <?php echo esc_html(
                            date_i18n(
                                /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
                                _x('Y', 'copyright date format', 'template-default')
                            )
                        ); ?> - <?php esc_html_e('All Rights Reserved', 'template-default'); ?>
    </div>
    <div class="developed">
        <?php esc_html_e('Developed by', 'template-default'); ?> <a href="https://manfron.com.br/">Adriano Manfron</a></p>
    </div>
</div>