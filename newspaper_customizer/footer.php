<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Newspaper Lite
 */
?>
 
<div id="footer-wrapper">
    	<div class="footer">
			<!-- Footer Column 3 -->        
        	<div class="footercols-3">
        	<div class="footer-cols widget-column-1">
            <h4><?php if( of_get_option('footerabttitle',true) != '') { echo of_get_option('footerabttitle'); }; ?></h4>
        	<div class="footer-col-3">  
           		 <?php wp_nav_menu( array('theme_location' => 'footer') ); ?>          	
            </div>
             </div>
            <div class="footer-cols widget-column-2">
            <h4><?php if( of_get_option('recenttitle') != ''){ echo of_get_option('recenttitle');}; ?></h4>
            <div class="footer-col-3">
            	<ul class="footer-post">            	
            	<?php query_posts('post_type=post&posts_per_page=5'); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post() ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
                </ul>
            </div>
            </div>
            <div class="footer-cols widget-column-4 last_column">
            <h4><?php if( of_get_option('getintouch') != '') { echo of_get_option('getintouch'); } ; ?></h4>
            <div class="footer-col-3">            	
             <?php if( of_get_option('footersocialicons') != ''){ echo do_shortcode(of_get_option('footersocialicons', true));}; ?> 
             <div class="clear"></div>                    
            </div>
            </div>
            <div class="clear"></div>
            </div>
        </div>
         </div><!--end #wrapper-->     
        <div class="copyright-wrapper">
        	<div class="container">
            	<div class="copyright-txt"><?php if( of_get_option('copytext',true) != ''){ echo of_get_option('copytext',true); }; ?></div>
                <div class="design-by"><?php if( of_get_option('ftlink', true) != ''){echo of_get_option('ftlink',true);}; ?></div>
            </div>
            <div class="clear"></div>
        </div>
</div><!--end #main-->   
<?php wp_footer(); ?>
</body>
</html>