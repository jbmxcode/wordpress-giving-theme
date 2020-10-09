<?php
get_header();

$args = array( 'post_type' => 'portfolio' );
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        if ( !is_front_page() ) :
            get_template_part( 'template-parts/content', 'header' ); 
        endif;
?>
        
    <main id="content_main" class="site-content" aria-label="<?php esc_attr_e( 'Main Site Content', 'giving-theme' ); ?>" tabindex="-1" role="main">
        <div class="container">
            <div class="container__inner">
                <?php 
                    get_template_part( 'template-parts/content', 'single' );
                    get_sidebar(); 
                ?>
            </div>
        </div>
    </main>
<?php
    endwhile;
endif;

get_footer();