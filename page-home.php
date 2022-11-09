<?php get_header(); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php get_template_part( 'parts/content', 'hero' ); ?> <!-- #Load Content Hero -->
                <section id="about" class="about">
                    <?php get_template_part( 'parts/content', 'about' ); ?> <!-- #Load Content About -->
                </section>
                <section id="team" class="team-top">
                    <?php get_template_part( 'parts/content', 'team' ); ?> <!-- #Load Content Team -->
                </section>
                <section id="services" class="services">
                    <?php get_template_part( 'parts/content', 'services' ); ?> <!-- #Load Content Services -->
                </section>
                <section id="partners" class="partners">
                    <?php get_template_part( 'parts/content', 'partners' ); ?> <!-- #Load Content Partners -->
                </section>
                <section id="home-blog" class="home-blog">
                    <?php get_template_part( 'parts/content', 'home-blog' ); ?> <!-- #Load Content Blog -->
                </section>
                <section id="contact" class="contact">
                    <?php get_template_part( 'parts/content', 'contact' ); ?> <!-- #Load Content Contact -->
                </section>
            </main>
        </div>
    </div>
<?php get_footer(); ?>