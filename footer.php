        <div class="site-footer">
            <div class="container">
                <section class="footer-menu">
                    <?php get_template_part( 'parts/content', 'footer-menu' ); ?><!-- #Load Footer Menu -->
                </section>
                <section class="footer-services">
                    <?php get_template_part( 'parts/content', 'footer-services' ); ?><!-- #Load Footer Services -->
                </section>
                <section class="footer-logo-socials">
                    <?php get_template_part( 'parts/content', 'footer-logo-socials' ); ?><!-- #Load Footer Logo and Social -->
                </section>
            </div>
        </div>
        <footer class="footer">
            <?php get_template_part( 'parts/content', 'footer' ); ?><!-- #Load Footer -->
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>