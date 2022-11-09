<?php get_header(); ?>
<div class="header-image">
    <?php get_template_part( 'parts/content', 'header-image' ); ?>
    </div>
       <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php
                                while( have_posts() ) : the_post();
                            ?>
                            <article>
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                            </article>
                            <?php 
                                if( comments_open() || get_comments_number() ){
                                    comments_template();
                                }
                            endwhile; ?><!-- #Enable comments in the posts -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>