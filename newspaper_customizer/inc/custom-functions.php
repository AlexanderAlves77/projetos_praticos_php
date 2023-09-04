<?php
/**
 * @package SKT Newspaper Lite
 * Setup the WordPress core custom functions feature.
 *
*/
define('SKT_THEME_DOC', 'http://sktthemesdemo.net/documentation/newspaper-doc/','complete');
define('SKT_URL','https://www.sktthemes.net','complete');
define('SKT_PRO_THEME_URL','https://www.sktthemes.net/shop/newspaper-wordpress-theme/','complete');
define('SKT_LIVE_DEMO','http://sktthemesdemo.net/newspaper/','complete');
define('SKT_THEMES','https://www.sktthemes.net/themes/','complete');

require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';
/*Custom template for about theme. */
require get_template_directory() . '/inc/about-themes.php';

function my_error_notice() { ?>
<div class="error notice">
<p><?php _e('For More Options buy pro version <a href="https://www.sktthemes.net/shop/newspaper-wordpress-theme/" target="_blank">Buy Now</a>','complete');?></p>
</div>
<?php } add_action('admin_notices', 'my_error_notice');

add_action('skt_newspaper_optionsframework_custom_scripts', 'skt_newspaper_optionsframework_custom_scripts');
function skt_newspaper_optionsframework_custom_scripts() { ?>
	<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#example_showhidden').click(function() {
            jQuery('#section-example_text_hidden').fadeToggle(400);
        });
        if (jQuery('#example_showhidden:checked').val() !== undefined) {
            jQuery('#section-example_text_hidden').show();
        }
    });
    </script><?php
}
// custom javascript for head
add_action('wp_head','hook_custom_javascript');
function hook_custom_javascript(){?>
	<script>
    jQuery(document).ready(function() {
        jQuery("#header-bottom-shape").click(function(){
            if ( jQuery( ".show_hide_header" ).is( ":hidden" ) ) {
                jQuery( ".show_hide_header" ).slideDown("slow");
            } else {
                jQuery( ".show_hide_header" ).slideUp("slow");
            }
            jQuery( this ).toggleClass('showDown');
        });
        jQuery( "#site-nav li:last" ).addClass("noBottomBorder");
        jQuery( "#site-nav li:parent" ).find('ul.sub-menu').parent().addClass("haschild");
    });
	</script><?php   
}
// get_the_content format text 
function get_the_content_format( $str ){
	$raw_content = apply_filters( 'the_content', $str );
	$content = str_replace( ']]>', ']]&gt;', $raw_content );
	return $content;
}
// the_content format text
function the_content_format( $str ){
	echo get_the_content_format( $str );
}
function is_google_font( $font ){
	$notGoogleFont = array( 'Arial', 'Comic Sans MS', 'FreeSans', 'Georgia', 'Lucida Sans Unicode', 'Palatino Linotype', 'Symbol', 'Tahoma', 'Trebuchet MS', 'Verdana' );
	if( in_array($font, $notGoogleFont) ){
		return false;
	}else{
		return true;
	}
}
// subhead section function
function sub_head_section( $more ) {
	$pgs = 0;
	do {
		$pgs++;
	} while ($more > $pgs);
	return $pgs;
}
//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );
//[separator height="20"]
function separator_shortcode_func($atts ) {
	extract( shortcode_atts( array(
		'height' => '50',
	), $atts ) );
	$sptr = '<div style="clear:both; min-height:20px; height:'.$height.'px; background:url('.get_template_directory_uri().'/images/hr_double.png) no-repeat center center transparent;"></div>';
	return $sptr;
}
add_shortcode( 'separator', 'separator_shortcode_func' );
 

// [searchform]
function searchform_shortcode_func( $atts ){
	return get_search_form( false );
}
add_shortcode( 'searchform', 'searchform_shortcode_func' );

// remove excerpt more
function new_excerpt_more( $more ) {
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');
// get post categories function
function getPostCategories(){
	$categories = get_the_category();
	$catOut = '';
	$separator = ', ';
	$catOutput = '';
	if($categories){
		foreach($categories as $category) {
			$catOutput .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", 'skt-newspaper' ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		$catOut = ''.trim($catOutput, $separator);
	}
	return $catOut;
}
// replace last occurance of a string.
function str_lreplace($search, $replace, $subject){
	$pos = strrpos($subject, $search);
	if($pos !== false){
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}
	return $subject;
}
 
//Social
function skt_newspaper_social_area($atts,$content = null){
		return '<div class="social-icon">'.do_shortcode($content).'</div>';
	}
add_shortcode('social_area','skt_newspaper_social_area');
function skt_newspaper_social($atts){
	extract(shortcode_atts(array(
		'icon'	=> '',
		'link'	=> ''
	),$atts));
		return '<a href="'.$link.'" target="_blank" class="fa fa-'.$icon.' fa-2x" title="'.$icon.'"></a>';
}
add_shortcode('social','skt_newspaper_social');
// Social

//Social Counter
function skt_newspaper_social_count($atts,$content = null){
		return '<div class="social-count">'.do_shortcode($content).'<div class="clear"></div></div>';
	}
add_shortcode('social_count','skt_newspaper_social_count');
function skt_newspaper_counter($atts){
	extract(shortcode_atts(array(
		'socialicon'	=> '',
		'sociallink'	=> '',
		'socialcount'	=> '',
		'socialtitle'	=> ''
	),$atts));
		return '<div class="counter">
		         <a href="'.$sociallink.'" target="_blank" class="fa fa-'.$socialicon.' fa-2x" title="'.$socialicon.'"></a>
				<a href="'.$sociallink.'" target="_blank">
					 <span class="bold">'.$socialcount.'</span>
				 	<span>'.$socialtitle.'</span>
				 </a>
		</div>';
}
add_shortcode('counter','skt_newspaper_counter');
// Social


function custom_excerpt_length( $length ) {
	return 90;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );