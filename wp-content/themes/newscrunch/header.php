<?php
/**
 * The header for our theme
 *
 * @package Newscrunch
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head itemscope itemtype="http://schema.org/WebSite">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<?php if (is_singular() && pings_open(get_queried_object())) : 
	            echo '<link rel="pingback" href=" '.esc_url(get_bloginfo( 'pingback_url' )).' ">';
	        endif;
		wp_head(); ?>
	</head>

<?php do_action('newscrunch_wide_boxed_layout');
	  wp_body_open(); ?>
<div class="spnc-wrapper" id="wrapper">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newscrunch' ); ?></a>
		<?php
		if ( class_exists('Newscrunch_Plus') ):
			if(get_theme_mod('progress_bar_enable',true)):echo '<div id="spnc_scroll_progressbar"></div>';endif;
			do_action('spncp_preloader_hook');
			do_action( 'spncp_header_variation' );
		else:
			do_action('newscrunch_preloader');
			do_action( 'newscrunch_header' ); 
		endif;