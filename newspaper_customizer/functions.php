<?php
/**
 * SKT Newspaper Lite functions and definitions
 *
 * @package SKT Newspaper Lite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
 

function content($limit) {
$content = explode(' ', get_the_excerpt(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}	
$content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}


if ( ! function_exists( 'skt_newspaper_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function skt_newspaper_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'skt-newspaper', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );

	add_image_size( 'sidebar-thumb',309,186,true);
	
	register_nav_menus( array(
//		'topmenu' => __( 'Header Top Menu', 'skt-newspaper' ),
		'primary' => __( 'Primary Menu', 'skt-newspaper' ),
		'footer' => __( 'Footer Menu', 'skt-newspaper' ),
		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',		
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // skt_newspaper_setup
add_action( 'after_setup_theme', 'skt_newspaper_setup' );

function skt_newspaper_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'skt-newspaper' ),
		'description'   => __( 'Appears on Pages sidebar', 'skt-newspaper' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'skt_newspaper_widgets_init' );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once get_template_directory() . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

function skt_newspaper_scripts() {	
	wp_enqueue_style( 'skt-newspaper-gfonts-arimo', '//fonts.googleapis.com/css?family=Arimo:400,700' );
	wp_enqueue_style( 'skt-newspaper-gfonts-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900' );

	if( of_get_option('bodyfontface',true) != '' ){
		wp_enqueue_style( 'skt-newspaper-gfonts-body', '//fonts.googleapis.com/css?family='.rawurlencode(of_get_option('bodyfontface',true)).'&subset=cyrillic,arabic,bengali,cyrillic,cyrillic-ext,devanagari,greek,greek-ext,gujarati,hebrew,latin-ext,tamil,telugu,thai,vietnamese,latin');
	}
	 
	wp_enqueue_style( 'skt-newspaper-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'skt-newspaper-base-style', get_template_directory_uri().'/css/style_base.css');	
	wp_enqueue_style( 'skt-newspaper-editor-style', get_template_directory_uri().'/editor-style.css');	
	wp_enqueue_style( 'skt-newspaper-responsive-style', get_template_directory_uri().'/css/theme-responsive.css');
	wp_enqueue_script( 'skt-newspaper-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery'));		
	wp_enqueue_style( 'skt-newspaper-awesome-style', get_template_directory_uri().'/css/font-awesome.min.css');
	//Owl carousel
	wp_enqueue_style( 'skt-newspaper-owl-style', get_template_directory_uri().'/rotator/js/owl.carousel.css' );
	wp_enqueue_script( 'skt-newspaper-owljs', get_template_directory_uri().'/rotator/js/owl.carousel.js', array('jquery') );
    //thumbnial carousel   
	wp_enqueue_style( 'skt-newspaper-owljsxxdd', get_template_directory_uri().'/thumbnailslider/js/pgwslideshow.css' );
    wp_enqueue_script( 'skt-newspaper-owljsyy', get_template_directory_uri().'/thumbnailslider/js/pgwslideshow.js', array('jquery') );      
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skt_newspaper_scripts' );

function media_css_hook(){	?>
 
<?php	}
add_action('wp_head','media_css_hook');


function skt_newspaper_custom_head_codes() { 
	if ( function_exists('of_get_option') ){
		if ( of_get_option('style2', true) != '' ) {
			echo "<style>". esc_html( of_get_option('style2', true) ) ."</style>";
		}
		echo "<style>";
		if ( of_get_option('bodyfontface', true) != '' || of_get_option('bodyfontsize',true) != '' || of_get_option('bodyfontcolor', true) != '') {
			echo "body{font-family:".of_get_option('bodyfontface', true)."; font-size:".of_get_option('bodyfontsize',true)."; color:".of_get_option('bodyfontcolor', true)." }";
		}
		if ( of_get_option('bodyfontcolor', true) != '') {
			echo ".logo h2, .copyright-wrapper a, a, .social-icon a, #sidebar .widget ul li a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a{color:".of_get_option('bodyfontcolor', true)."; }";
		}
		if ( of_get_option('bodyfontface', true) != '') {
			echo ".postlist2 h6 {font-family:".of_get_option('bodyfontface', true).";}";
		}
		//navigation
		if ( of_get_option('navfontcolor', true) != '' ) {
			echo ".nav ul li a, .nav ul li ul li a{color:".of_get_option('navfontcolor', true ) .";}";
		}
		
		if ( of_get_option('linkcolor', true) != '' ) {
			echo ".logo h2 span, #sidebar .widget ul li a:hover, #sidebar .widget ul li:hover.icon:before, .social-icon a:hover, .copyright-wrapper a:hover, .phone-no a:hover, a:hover, .postlist h6 a:hover, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .PostMeta a:hover, .popular-articles .articles li:hover h6, .category-box:hover h5{color:".of_get_option('linkcolor', true ) .";}";
		}
		
	if( of_get_option('linkcolor',true) != '' ){
		echo ".nav ul li a:hover, .nav ul li.current_page_item a, .nav li:hover ul, .nav li:hover ul li:hover ul, .nav li:last-child, .nav li:hover a, .nav li.current_page_item a, .view-all-btn a, #commentform input#submit:hover, button:hover, html input[type='button']:hover, input[type='reset']:hover, input[type='submit']:hover, .toggle a, .morebtn:hover, #sidebar .woocommerce-product-search .search-field, .pagination ul li .current, .pagination ul li a:hover, .searchbox-icon, .searchbox-submit, .popular-articles .articles .thumb, .cat-title, .category-box .thumb, .catbx2, .owl-prev, .owl-next, .footer-cols .social-icon a:hover, .headline span{background-color:".of_get_option('linkcolor',true).";}";
	}
		
	if( of_get_option('linkcolor',true) != '' ){
		echo ".headline span::before{border-left-color:".of_get_option('linkcolor',true).";}";
	}
	
	if( of_get_option('bodyfontcolor',true) != ''){
			echo ".pagination ul li span, .pagination ul li a, .morebtn, .view-all-btn a:hover, .search-form input[type=submit], #commentform input#submit, button, html input[type='button'], input[type='reset'], input[type='submit']{background-color:".of_get_option('bodyfontcolor',true).";}";
	}		
	
	  
 
echo "</style>";
	}
}
add_action('wp_head', 'skt_newspaper_custom_head_codes');

function skt_newspaper_pagination() {
	global $wp_query;
	$big = 12345678;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $page_format as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	}
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Load custom functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';


function skt_newspaper_custom_blogpost_pagination( $wp_query ){
	$big = 999999999; // need an unlikely integer
	if ( get_query_var('paged') ) { $pageVar = 'paged'; }
	elseif ( get_query_var('page') ) { $pageVar = 'page'; }
	else { $pageVar = 'paged'; }
	$pagin = paginate_links( array(
		'base' 			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' 		=> '?'.$pageVar.'=%#%',
		'current' 		=> max( 1, get_query_var($pageVar) ),
		'total' 		=> $wp_query->max_num_pages,
		'prev_text'		=> '&laquo; Prev',
		'next_text' 	=> 'Next &raquo;',
		'type'  => 'array'
	) ); 
	if( is_array($pagin) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<div class="pagination"><div><ul>';
		echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
		foreach ( $pagin as $page ) {
			echo "<li>$page</li>";
		}
		echo '</ul></div></div>';
	} 
}

// get slug by id
function skt_newspaper_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

function excerpt($num) {
        $limit = $num+1;
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt)."...";
        echo $excerpt;
}

function custom_slide_function(){ ?>
<script>
jQuery(document).ready(function() {
	jQuery('.pgwSlideshow').pgwSlideshow({
	transitionDuration:500,
	intervalduration:3000,
	autoSlide:true,
    });
});
jQuery(document).ready(function() { 
   jQuery('.owl-carousel').owlCarousel({
    loop:true,
	autoplay:true ,
	smartSpeed:250,
    margin:10,
    nav:true,	
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
});
jQuery(document).ready(function() {
      jQuery("#owl-demo").owlCarousel({
		  autoplay:true,
		  smartSpeed:250,
		  loop:true,
          items :5,
		  nav:true,
		  responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},
			768:{
				items:4
			},
			1000:{
				items:5
			}
		}
      });     
});
</script>
<?php } add_action('wp_head','custom_slide_function'); ?>