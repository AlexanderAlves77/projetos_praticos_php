<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Newspaper Lite
 */

get_header(); 
?>

<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

    <div class="container pagecontent">
         <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                
                    endwhile;
                    // Previous/next post navigation.
                    skt_newspaper_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
              </div>
            </div>
            <?php get_sidebar('right');?>
            <div class="clear"></div>        
    </div>
<?php else: ?>

 <section id="gry">
            	<div class="container">
                	<div class="row">
                    	<div class="col-8">
                        	<div class="slider">
							     <div class="owl-carousel">
								  <?php if( of_get_option('slidersection',false) ) { ?>
                                     <?php $queryvar = new wp_query('cat='.of_get_option('slidersection',true));				
										while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
										 <div class="slidesection"> 
										  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?>                 
											  <h3><?php the_title(); ?></h3>
										   </a>
										   <div class="catbx catbx2"><?php echo getPostCategories();?></div>                         
										 </div>
									   
										<?php endwhile;
										wp_reset_postdata(); ?>                    
              
									   <?php } else { ?>                         
                                         <div class="slidesection">
                                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/travel-thumb1.jpg" alt="">              
                                              <h3><?php _e('Top 10 Peaceful Countries in the world','skt-newspaper'); ?></h3>
                                            </a>
                                            <div class="catbx catbx2"><?php _e('Travel','skt-newspaper'); ?></div>                     
                                         </div> 
                                        
                                         <div class="slidesection">
                                           <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/travel-thumb1.jpg" alt="">          
                                              <h3><?php _e('Top 10 Peaceful Countries in the world','skt-newspaper'); ?></h3>
                                            </a>
                                            <div class="catbx catbx2"><?php _e('Travel','skt-newspaper'); ?></div>                   
                                         </div>  
                                     <?php } ?>

 </div><!--end .carousel-->
 
                            </div>
                        </div>
                        <div class="col-4">
                        	<div class="popular-articles">
                             <ul class="articles">
                             
                        <?php  if( of_get_option('rightsection',false) ) { ?>
        				<?php $queryvar = new wp_query('showposts=4 &cat='.of_get_option('rightsection',true));				
						while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                         <li>
                          <a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) { ?>
                             <div class="thumb"><?php the_post_thumbnail( 'full' ); ?></div>       
                            <?php } else{  echo ''; } ?>
                             <h6><?php the_title(); ?></h6> 
                           </a>
                           <p><?php echo wp_trim_words( get_the_content(), 8 ); ?></p>
                           <div class="PostMeta">
                             <span><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?> </span>
                             <span><i class="fa fa-comments-o"></i> <a href="<?php the_permalink(); ?>'#comments"><?php echo get_comments_number(); ?> Comments</a></span> 
                  		   </div>                        
                          </li>
                       
						<?php endwhile;
						wp_reset_postdata(); ?>                    
                  </ul>
               <?php } else { ?><ul class="articles"><li><a href="#"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb1.jpg" alt=""></div><h6>Cras fermentum ultricies</h6></a><p>Maecenas quis facilisis est, quis ultriciesant Vestibulum....</p><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div></li><li><a href="#"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb2.jpg" alt=""></div><h6>Cras fermentum ultricies</h6></a><p>Maecenas quis facilisis est, quis ultriciesant Vestibulum....</p><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div></li><li><a href="#"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb3.jpg" alt=""></div><h6>Cras fermentum ultricies</h6></a><p>Maecenas quis facilisis est, quis ultriciesant Vestibulum....</p><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div></li><li><a href="#"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb4.jpg" alt=""></div><h6>Cras fermentum ultricies</h6></a><p>Maecenas quis facilisis est, quis ultriciesant Vestibulum....</p><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div></li></ul><?php } ?>
               </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
    </section> <!--SLIDER SECTION gry END-->





<section id="homepagewrapper">
<div class="container">
  <div class="post-category">
      <div class="row">
  <?php $n=1; if( of_get_option('categorypostslist',false) ) { ?>
        		<?php $queryvar = new wp_query('showposts=6 &cat='.of_get_option('categorypostslist',true));				
						while( $queryvar->have_posts() ) : $queryvar->the_post(); ?> 
                        
                         <div class="col-4 <?php if($n % 3 == 0) { echo "last_column"; } ?>">
                            	<div class="category-box">
                                	<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' );?></a></div>
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <div class="PostMeta">
                                        <span><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></span>
                                        <span><i class="fa fa-comments-o"></i> <a href="<?php comments_link(); ?>"><?php echo comments_number(); ?></a></span> 
                                    </div>
                                    <?php echo content('20'); ?>
                                	<div class="cat-title"><?php echo getPostCategories();?></div>
                                </div>
                            </div>                        
                                              
						<?php  $n++; endwhile; ?>                                          
                <?php wp_reset_postdata(); ?>              
               <?php } else { ?>                         
                        <div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb1.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">World</div></div></div><div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb2.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">Sports</div></div></div><div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb3.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span> </div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">Business</div></div></div><div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb4.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">Politics</div></div></div><div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb5.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">Economy</div></div></div><div class="col-4"><div class="category-box"><div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb8.jpg" alt=" " /></div><h5>Pellentesque Varius</h5><div class="PostMeta"><span><i class="fa fa-clock-o"></i> Oct 29, 2015</span><span><i class="fa fa-comments-o"></i> <a href="#">No Comments</a></span></div><p>Curabitur ut leo nulla. Suspendisse quis cursus justo. Maecenas eleifend volutpat ligula. Aenean euismod tincidunt tortor sed congue [..]</p><div class="cat-title">Entertainment</div></div></div><div class="clear"></div><?php } ?>
  
      </div><!--end .row-->
    </div><!--end .post-category-->
  <div class="clear"></div>
 </div>
</section><!--end #homepagewrapper-->


 
    
    <div class="container pagecontent">
         <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                
                    endwhile;
                    // Previous/next post navigation.
                    skt_newspaper_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
              </div>
            </div>
            <?php get_sidebar('right');?>
            <div class="clear"></div>        
    </div>
    
    
<?php endif; ?>
<?php get_footer(); ?>