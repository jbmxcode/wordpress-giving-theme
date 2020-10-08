<?php
get_header();
?>

<?php
while ( have_posts() ) :
    the_post(); ?>

    <div class="container">
        <div class="container__inner">
            <aside class="widgets">
                <div class="row">
                    <div class="row__inner">   
                            <?php get_template_part( 'template-parts/content', 'widgets' ); ?>   
                    </div>
                </div>
            </aside>
            <div class="single-post">
                <div class="row">
                    <div class="row__inner">
                        <div class="column">
                            <?php get_template_part( 'template-parts/content' ); ?>
                        </div>        
                    </div>
                </div>
            </div>      
        </div>
    </div>
        
<?php
endwhile; 
?>

<?php
get_footer();
