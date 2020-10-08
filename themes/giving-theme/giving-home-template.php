<?php
/* Template Name: Giving Home */
get_header();
?>
    <div class="container">
        <div class="container__inner">

			<?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
			<?php get_template_part( 'template-parts/content', 'latest-post' ); ?>

        </div>
    </div>
<?php
get_footer();
