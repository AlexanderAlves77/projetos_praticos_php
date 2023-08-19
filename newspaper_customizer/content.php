<?php
/**
 * @package SKT Newspaper Lite
 */
?>
<div class="postlayouts">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h5 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
                    <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                    <div class="post-categories"> | <?php echo getPostCategories();?></div>
                    <div class="clear"></div>
                </div><!-- postmeta -->
            <?php endif; ?>
	        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
	            <div class="post-thumb"><a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_post_thumbnail('medium', array('class' => 'alignleft') ); ?></a>
                </div><!-- post-thumb -->
	        <?php else : ?>
	            <div class="post-thumb"><?php the_post_thumbnail('full', array('class' => 'alignleft') ); ?></div><!-- post-thumb -->
	        <?php endif; ?>
            
        </header><!-- .entry-header -->
    
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                	<?php echo content(100); ?>
                <p><a class="morebtn" href="<?php the_permalink(); ?>"><?php _e('Read More','skt-newspaper'); ?></a></p>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'skt-newspaper' ) ); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'skt-newspaper' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->
        <?php endif; ?>
    
        <footer class="entry-meta" style="display:none;">
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'skt-newspaper' ) );
                    if ( $categories_list && skt_newspaper_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'Posted in %1$s', 'skt-newspaper' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>
    
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'skt-newspaper' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php printf( __( 'Tagged %1$s', 'skt-newspaper' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>
    
            <?php if ( ! post_password_required() && ( comments_open() || '0 Comment' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'skt-newspaper' ), __( '1 Comment', 'skt-newspaper' ), __( '% Comments', 'skt-newspaper' ) ); ?></span>
            <?php endif; ?>
    
            <?php edit_post_link( __( 'Edit', 'skt-newspaper' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
         <div class="clear"></div>
    </article><!-- #post-## -->   
</div><!-- .postlayouts -->