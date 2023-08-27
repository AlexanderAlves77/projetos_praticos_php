<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package SKT Newspaper Lite
 */
?>

<div id="sidebar" class="sidebar-right">    
    <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?> 
     	 <aside class="widget Social_Count_Widget">
          <h3 class="widget-title"><?php _e( 'Follow Us', 'skt-newspaper' ); ?></h3>
         <?php echo do_shortcode('
		[social_count]
		  [counter socialicon="facebook" sociallink="#" socialcount="100" socialtitle="Fan"] 
		  [counter socialicon="twitter" sociallink="#" socialcount="50" socialtitle="Followers"]
		  [counter socialicon="linkedin" sociallink="#" socialcount="250" socialtitle="Subcriber"] 
		  [counter socialicon="rss" sociallink="#" socialcount="100" socialtitle="Fan"] 
		  [counter socialicon="google-plus" sociallink="#" socialcount="50" socialtitle="Followers"]
		  [counter socialicon="instagram" sociallink="#" socialcount="250" socialtitle="Subcriber"]
		  [counter socialicon="flickr" sociallink="#" socialcount="100" socialtitle="Fan"] 
		  [counter socialicon="youtube" sociallink="#" socialcount="50" socialtitle="Followers"]		  
		[/social_count]'); ?>
        </aside>
        <aside id="addspace" class="widget">
          <a href="#"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/add-250-by-250.jpg"></a>
        </aside>
         <aside id="about" class="widget">
          <h3 class="widget-title"><?php _e( 'About Octagon', 'skt-newspaper' ); ?></h3>
         <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/about-thumb.jpg">
          <p>Fusce vulputate sollicitu rutrum quam purus ligulay scelerisque orci vestibulum quis. Aliquam erat volutpat. Sdisse enim lacus, ultrices et leo eget, sollicitu rutrum quam. Quisque eu magna libero sollicitu rutrum scelerisque quam.</p>
        </aside>
    <?php endif; // end sidebar widget area ?>
</div><!-- sidebar -->