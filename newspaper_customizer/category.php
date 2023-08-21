<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Newspaper Lite
 */

get_header(); ?>

<div class="container pagecontent"> 
   
       <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">
            
            <header class="page-header">
				<h1 class="page-title"><?php single_cat_title('Category: '); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
                <div class="categorystyle">
                <?php while ( have_posts() ) : the_post(); ?>                
                    <?php get_template_part( 'content', get_post_format() ); ?>                
                <?php endwhile; ?>
                <div class="clear"></div>
                </div>
                <?php skt_newspaper_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
        </div>
         </div>
          <?php get_sidebar('right');?>
        <div class="clear"></div>
</div>
<?php get_footer(); ?>