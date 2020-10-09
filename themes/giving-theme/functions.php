<?php
if ( ! function_exists( 'giving_theme_setup' ) ) :
	function giving_theme_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'giving-theme' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'giving_theme_setup' );


/**
 * Register widget area.
 */
function giving_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'giving-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'giving-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'giving_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function giving_theme_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'giving-theme-style', get_stylesheet_uri(), array(), $theme_version );

	wp_enqueue_style('giving-theme-global-style', get_theme_file_uri( '/webpack/dist/app.css' ), array(), $theme_version );
	wp_enqueue_style('giving-theme-fontawesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', array() );

	wp_enqueue_script('giving-theme-scripts', get_theme_file_uri( '/webpack/dist/app.js' ), array(), $theme_version, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'giving_theme_scripts' );

/**
 * Portfolio Shortcode
 */

add_shortcode( 'portfolio', function () {

	ob_start();
	
	get_template_part( 'template-parts/content', 'portfolio' );
	
	$output = ob_get_contents();
	
	ob_clean();
	
	return $output;
	
});

/**
 * Latest Post Shortcode
 */

add_shortcode( 'latest-post', function () {

	ob_start();
	
	get_template_part( 'template-parts/content', 'latest-post' );
	
	$output = ob_get_contents();
	
	ob_clean();
	
	return $output;
	
});


/**
 * Implement the Custom Breadcrumbs.
 */
require get_template_directory() . '/inc/custom-breadcrumbs.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';



