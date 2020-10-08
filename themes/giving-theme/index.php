<?php
get_header();
?>
    <div class="container">
        <div class="container__inner">

		<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}
		?>

        </div>
    </div>
<?php
get_footer();
