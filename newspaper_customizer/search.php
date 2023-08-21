<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package SKT Newspaper Lite
 */

get_header(); ?>

<div class="container pagecontent"> 
       <div id="sitemain" class="site-main FloatRight">
            <div class="contentarea">
			<?php if ( have_posts() ) : ?>
                <header>
                    <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'skt-newspaper' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'search' ); ?>
                <?php endwhile; ?>
                <?php skt_newspaper_pagination(); ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'search' ); ?>
            <?php endif; ?>
            </div>
        </div>
          <?php get_sidebar('right');?>
        <div class="clear"></div>    
</div>
<?php get_footer(); ?>