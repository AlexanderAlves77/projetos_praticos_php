<?php
/**
 * The Template for displaying all single posts.
 *
 * @package SKT Newspaper Lite
 */
get_header(); ?>


<div class="container pagecontent">    
       <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">
			<?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'single' ); ?>
                <?php skt_newspaper_content_nav( 'nav-below' ); ?>
                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
            </div>
         </div>
        <?php get_sidebar('right');?>
        <div class="clear"></div>
</div>
<?php get_footer(); ?>