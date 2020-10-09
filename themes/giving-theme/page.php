<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( !is_front_page() ) :
            get_template_part( 'template-parts/content', 'header' ); 
        endif;
?>
        
    <main id="content_main" class="site-content" aria-label="<?php esc_attr_e( 'Main Site Content', 'giving-theme' ); ?>" tabindex="-1" role="main">
        <div class="container">
            <div class="container__inner">
                <?php 
                    get_template_part( 'template-parts/content', get_post_type() );
                    get_sidebar(); 
                ?>
            </div>
        </div>
    </main>
<?php
    endwhile;
endif;

get_footer();