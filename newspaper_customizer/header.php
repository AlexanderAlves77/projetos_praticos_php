<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT Newspaper Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="all" />
<![endif]-->
<?php 
	wp_head(); 
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	if( !get_option( $themename ) ) {
	require get_template_directory() . '/index-default.php';
	exit;
	}
?>
</head>
<body <?php body_class(); ?>>
<div id="main">
 <div id="wrapper">
 
 <div class="header">
            <div class="header-top">
            <?php $headline = of_get_option('headline'); ?>
            <?php if(!empty($headline)) { ?>
            	<div class="headline">
                	<span><?php echo of_get_option( 'headline', true ); ?></span>
                </div>
                <?php } ?>
                <div class="news-ticker">
                 <p><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><?php echo of_get_option( 'headlinetext', true ); ?></marquee></p>
                </div>

                <div class="searchright">
                <form role="search" method="get" class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>">		
                <input type="search" class="searchbox-input" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'skt-newspaper' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" onKeyUp="buttonUp();">
                <input type="submit" class="" value="<?php echo esc_attr_x( '', 'submit button', 'skt-newspaper' ); ?>">
                <span class="searchbox-icon"><i class="fa fa-search"></i></span>
                </form>
              </div>

        
              <div class="clear"></div>
            </div><!--end header-top-->
            
            <div class="container">
            	<div class="row">
                	<div class="col-4">
                    	<a class="logo" href="<?php echo home_url('/'); ?>">
                            <?php if( of_get_option( 'logo', true ) != '' ) { ; ?>
                               <img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / >
                               <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                            <?php } else { ?>
                                <h2><?php bloginfo('name'); ?></h2>
                                <span class="tagline"><?php bloginfo( 'description' ); ?></span>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-8">
                      <?php if( !dynamic_sidebar('header-widget') ): ?>
                    	<a href="<?php echo home_url('/'); ?>">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/add-banner.jpg" alt=" " class="alignright" />
                        </a>
                      <?php endif; ?> 
                    </div>
                    <div class="clear"></div>
                </div>
                </div>
                <a href="#" class="toggleMenu" style="display:none;"><?php _e('Menu','skt-newspaper'); ?></a>
                                
                <div class="nav">
                    <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                </div><!-- sitenav -->               
               
                <div class="clear"></div>
 </div><!--end header-->
  <?php // if ( !is_home() || !is_front_page() ) { ?>
  <?php if (!is_front_page() ) { ?>
         <div class="innerbanner">                 
 			<?php
			 if( is_single() || is_archive() || is_category() || is_author()|| is_search() || is_home()) { 
				 echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';
		   	 }
			 else{
				if( has_post_thumbnail() ) {
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                $thumbnailSrc = $src[0];
				echo '<img src="'.$thumbnailSrc.'" />';
               } 
			   else{
				echo '<img src="'.esc_url( of_get_option( 'innerpagebanner', true )).'" alt="">';   
			   }	 
			 }
		   ?>
        </div>
<?php } ?>   