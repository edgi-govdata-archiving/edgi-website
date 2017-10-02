<?php
function my_theme_enqueue_styles() {

    $parent_style = 'sydney-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Fonts
 */
if ( !function_exists('sydney_google_fonts') ) :
function sydney_google_fonts() {
	$body_font 		= get_theme_mod('body_font_name', 'Open+Sans:400,400i,700,700i');
	$headings_font 	= get_theme_mod('headings_font_name', 'Open+Sans+Condensed:300,700');

	$fonts     		= array();
	$fonts[] 		= esc_attr( str_replace( '+', ' ', $body_font ) );
	$fonts[] 		= esc_attr( str_replace( '+', ' ', $headings_font ) );

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) )
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;
?>
