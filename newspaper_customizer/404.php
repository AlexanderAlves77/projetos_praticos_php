<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package SKT Newspaper Lite
 */

get_header(); ?>

<div class="container pagecontent"> 
    
        <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">            
          
                <header class="page-header">
                    <h1 class="title-404"><?php _e( '<strong>404</strong> Not Found', 'skt-newspaper' ); ?></h1>
                </header><!-- .page-header -->
            	<p class="text-404"><?php _e( 'Looks like you have taken a wrong turn Dont worry... it happens to the best of us.', 'skt-newspaper' ); ?></p>
		    </div>
        </div> 
        <?php get_sidebar('right');?>
        <div class="clear"></div>    
</div>
<?php get_footer(); ?>