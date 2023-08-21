<?php
/**
 * @package SKT Newspaper Lite
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <div class="postmeta">
            <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
            <div class="post-comment"> | <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
            <div class="clear"></div>
        </div><!-- postmeta -->
		<?php 
		if ( ! post_password_required() ) {
        if (has_post_thumbnail() ){
			echo '<div class="post-thumb">';
            the_post_thumbnail('full', array('class' => 'alignleft') );
			echo '</div>';
		}}
        ?>
        
        <?php the_content(); ?>
        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'skt-newspaper' ),
            'after'  => '</div>',
        ) );
        ?>
        <div class="postmeta">
            <div class="post-categories"><?php echo getPostCategories();?></div>
            <div class="post-tags"><?php the_tags( __( ', ', 'skt-newspaper' )); ?></div>
            <div class="clear"></div>
        </div><!-- postmeta -->
    </div><!-- .entry-content -->
   
    <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'skt-newspaper' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->

</article>