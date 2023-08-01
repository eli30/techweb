<?php
/**
 * theme breadcurmbs section
 *
 * @package Newscrunch Theme
*/
if (!function_exists('newscrunch_breadcrumbs')):

	function newscrunch_breadcrumbs() { 
		$enable_disable_banner = get_theme_mod('breadcrumb_banner_enable', true); 
		$breadcrumb='';
		if ($enable_disable_banner == true) { ?>
			<section data-wow-delay=".8s" class="wow-callback zoomIn page-title-section" <?php if( get_header_image() ){ ?> style="background:#17212c url('<?php header_image(); ?>'); background-size: cover;" <?php } ?> >
				<div class="breadcrumb-overlay"></div>
				<div class="spnc-container">
					<div class="spnc-row">
					<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
					if ( function_exists('yoast_breadcrumb') ) {
						$seo_bread_title = get_option('wpseo_titles');
				        if($seo_bread_title['breadcrumbs-enable'] == true) {
				         	$breadcrumbs = yoast_breadcrumb("","",false);
				           	$breadcrumb='<ul class="page-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
				           					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">'.wp_kses_post($breadcrumbs).'</li>
				           				</ul>';
				        }   
					}
					if(get_theme_mod('bredcrumb_position','page_header')=='page_header'  && get_theme_mod('breadcrumb_enable',true)==true):
					    $breadcrumb_col='8';
				    else:
				    	$breadcrumb_col='1';
				    endif;
				    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						$breadcrumb_enable_disable	= get_theme_mod('breadcrumb_enable',true);
						$newscrunch_breadcrumbs_choice=get_post_meta(get_the_ID(),'newscrunch_show_breadcrumb', true );
						if($newscrunch_breadcrumbs_choice == ''){
		                    if($breadcrumb_enable_disable == true ){
								if ( function_exists('yoast_breadcrumb') ){
									$seo_bread_title = get_option('wpseo_titles');
								    if($seo_bread_title['breadcrumbs-enable'] == true ) {
								        $breadcrumbs = yoast_breadcrumb("","",false);
								        $breadcrumb='<ul class="page-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
								           				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">'.wp_kses_post($breadcrumbs).'</li>
								           			</ul>';
								    }							       
								}
							}
						}
						elseif($newscrunch_breadcrumbs_choice == 'newscrunch_breadcrumbs_enable'){
							if ( function_exists('yoast_breadcrumb') ){
								$seo_bread_title = get_option('wpseo_titles');
							    if($seo_bread_title['breadcrumbs-enable'] == true ) {
							        $breadcrumbs = yoast_breadcrumb("","",false);
							        $breadcrumb='<ul class="page-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
							           				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">'.wp_kses_post($breadcrumbs).'</li>
							           			</ul>';
							    }							       
							}
						}
					    if(get_theme_mod('bredcrumb_alignment','parallel')=='parallel'){ 
					    	if(get_theme_mod('bredcrumb_position','page_header')=='page_header'):
					    		echo '<div class="spnc-col-8 parallel">';
					    		do_action('newscrunch_breadcrumbs_page_title_hook');
					    		echo '</div>';
					    	endif;
					    	if($breadcrumb){echo '<div class="spnc-col-'.$breadcrumb_col.' parallel">'.$breadcrumb.'</div>';} 
					    }
					    elseif(get_theme_mod('bredcrumb_alignment','parallel')=='parallelr'){
					    	if($breadcrumb){echo '<div class="spnc-col-'.$breadcrumb_col.' text-left parallel">'.$breadcrumb.'</div>';}
					    	if(get_theme_mod('bredcrumb_position','page_header')=='page_header'):
					    		if($breadcrumb){ $col='8';}else{ $col='1';}	    		 
						    	echo '<div class="spnc-col-'.$col.' text-right parallel">';
						    	do_action('newscrunch_breadcrumbs_page_title_hook');
						    	echo '</div>';
					    	endif;
					    }
					    elseif(get_theme_mod('bredcrumb_alignment','parallel')=='centered'){ 
					    	echo '<div class="spnc-col-1 text-center">';
					    	
					    	if($breadcrumb){echo $breadcrumb;}
					    	if(get_theme_mod('bredcrumb_position','page_header')=='page_header'):
					    		do_action('newscrunch_breadcrumbs_page_title_hook');
					    	endif;
					    	echo'</div>';
					    }
					    elseif(get_theme_mod('bredcrumb_alignment','parallel')=='left'){ 
					    	echo '<div class="spnc-col-1 text-left">';
					    	if($breadcrumb){echo $breadcrumb;}
					    	if(get_theme_mod('bredcrumb_position','page_header')=='page_header'):do_action('newscrunch_breadcrumbs_page_title_hook');
					    	endif;
					    	echo'</div>';
					    }
					    elseif(get_theme_mod('bredcrumb_alignment','parallel')=='right'){ 
					    	echo '<div class="spnc-col-1 text-right">';
					    	if($breadcrumb){echo $breadcrumb;}
					    	if(get_theme_mod('bredcrumb_position','page_header')=='page_header'):
					    		do_action('newscrunch_breadcrumbs_page_title_hook');
					    	endif;
					    	
					    	echo'</div>';
					    }?>
				    </div>
				</div>
			</section>
		<?php
		}
	}
	add_action('newscrunch_breadcrumbs_hook','newscrunch_breadcrumbs');
endif;?>