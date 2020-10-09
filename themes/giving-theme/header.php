<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="header_main" class="site-header" aria-label="<?php esc_attr_e( 'Main Site Header', 'giving-theme' ); ?>"role="banner">
		<div class="container">
			<div class="container__inner">
				<div class="row">
					<div class="row__inner">
						<h1 class="site-title">
							<a href="/"><?php bloginfo( 'name' ); ?></a>
						</h1>

						<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Top Menu', 'giving-theme' ); ?>" role="navigation">
							<button id="sitenav_main_mobile_toggle" class="nav-mobile-toggle accessible-megamenu-toggle animated"><span class="nav-mobile-toggle-inner"><?php echo _e('Main Menu Toggle', 'giving-theme') ?></span></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_class'     => 'primary-menu',
									'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>
	</header>

    <?php 
    if ( is_front_page() ) :
        get_template_part( 'template-parts/content', 'hero' ); 
    endif;
    ?>
