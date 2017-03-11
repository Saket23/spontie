<?php

define('RINJANI_DIR', get_template_directory_uri());
define('RINJANI_TEMPLATE_DIR', get_template_directory());
//define('RINJANI_FRAMEWORK_DIR', RINJANI_TEMPLATE_DIR . '/inc/option/core' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 1170; /* pixels */

/*-----------------------------------------------------------------------------------*/
/*  SETUP THEME
/*-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'rinjani_setup' ) ) :

	function rinjani_setup() {
		// several theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );	
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );
		load_theme_textdomain( 'rinjani', RINJANI_TEMPLATE_DIR .'/languages' );
		add_theme_support( "title-tag" );

}
endif;
add_action( 'after_setup_theme', 'rinjani_setup' );

/*-----------------------------------------------------------------------------------*/
/*  ACF
/*-----------------------------------------------------------------------------------*/

add_filter('acf/settings/show_admin', '__return_false');


/*-----------------------------------------------------------------------------------*/
/*  SCRIPTS & STYLES
/*-----------------------------------------------------------------------------------*/



function rinjani_scripts() {

//All necessary CSS
wp_enqueue_style( 'rinjani-bootstrap', RINJANI_DIR .'/css/bootstrap.min.css', array(), null );
wp_enqueue_style( 'rinjani-plugin-css', RINJANI_DIR .'/css/plugin.css', array(), null );
wp_enqueue_style( 'rinjani-style', get_stylesheet_uri(), array( 'rinjani-bootstrap','rinjani-plugin-css' ) );
wp_enqueue_style( 'rinjani-font', RINJANI_DIR .'/css/font.css', array(), null );
wp_enqueue_style( 'rinjani-responsive', RINJANI_DIR .'/css/responsive.css', array(), null );

//All Necessary Script


wp_enqueue_script( 'rinjani-plugins', RINJANI_DIR. '/js/plugins.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'rinjani-main-js', RINJANI_DIR. '/js/main.js', array( 'jquery' ), '', true );

if(!is_singular() && !is_404() ) {

	wp_enqueue_script( 'rinjani-loop-js', RINJANI_DIR. '/js/loop.js', array( 'jquery', 'masonry' ), '', true );

}



}

add_action( 'wp_enqueue_scripts', 'rinjani_scripts' );


/*-----------------------------------------------------------------------------------*/
/*  CALL FRAMEWORK
/*-----------------------------------------------------------------------------------*/


require_once( RINJANI_TEMPLATE_DIR . '/inc/option/panel/config.php' );


/*-----------------------------------------------------------------------------------*/
/*  MENU
/*-----------------------------------------------------------------------------------*/

//Register Menus
register_nav_menu( 'header-menu', 'Header Menu' );
register_nav_menu( 'extra-menu', 'Extra Menu' );

//TOP BAR MENU
function rinjani_top_extra_menu(){
  wp_nav_menu( array(
	'theme_location' => 'extra-menu',
	'container'       => 'ul',
   'menu_class'      => 'menus',
	'fallback_cb'  => 'rinjani_extra_menu_cb'
  ));
} 

//TOP MENU
function rinjani_top_nav_menu(){
  wp_nav_menu( array(
	'theme_location' => 'header-menu',
	'container'       => 'ul',
   'menu_class'      => 'menus',
	'fallback_cb'  => 'rinjani_header_menu_cb'
  ));
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET
function rinjani_header_menu_cb() {
  echo '<ul id="menu-top-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

// FALLBACK IF PRIMARY MENU HAVEN'T SET YET
function rinjani_extra_menu_cb() {
  echo '<ul id="menu-extra-menu" class="menus">';
  wp_list_pages('title_li=');
  echo '</ul>';
}

/*-----------------------------------------------------------------------------------*/
/*  HEADER
/*-----------------------------------------------------------------------------------*/

// logo text or image huh?
function rinjani_logo_type(){

$options = get_option('rinjani_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}


if ( ! empty( $upload_logo ) ) { ?>

	<div class="logo-image">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $upload_logo ); ?>" class="image-logo" alt="logo" /></a>
	</div>
	
	<?php } else { ?> 
	
	<div class="logo-title">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<h2 style="color:#fff;">The best way to see the future is to Travel</h2>
	</div>
<?php }
} 

/*-----------------------------------------------------------------------------------*/
/*  WIDGET
/*-----------------------------------------------------------------------------------*/

// SETUP DEFAULT SIDEBAR
function rinjani_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'rinjani' ),
		'id'            => 'primary-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title"><span>',
		'after_title'   => '</span></h4>',
	) );
}
add_action( 'widgets_init', 'rinjani_widgets_init' );

// INCLUDE Custom Widget FILE
require_once( RINJANI_TEMPLATE_DIR . '/inc/widget/latest-post-thumb.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/widget/author-widget.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/widget/ads-widget.php' );

/*-----------------------------------------------------------------------------------*/
/*  PAGINATION
/*-----------------------------------------------------------------------------------*/

function rinjani_pagination($pages = '', $range = 2)
{  
		 $showitems = ($range * 2)+1;  

		 global $paged;
		 if(empty($paged)) $paged = 1;

		 if($pages == '')
		 {
				 global $wp_query;
				 $pages = $wp_query->max_num_pages;
				 if(!$pages)
				 {
						 $pages = 1;
				 }
		 }   

		 if(1 != $pages)
		 {
				 echo "<div class='pagination col-md-12 text-center clearfix'>";
				 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
				 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

				 for ($i=1; $i <= $pages; $i++)
				 {
						 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						 {
								 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
						 }
				 }

				 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
				 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				 echo "</div>\n";
		 }
}




/*-----------------------------------------------------------------------------------*/
/*  CUSTOM FUNCTIONS
/*-----------------------------------------------------------------------------------*/
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/custom.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/navigation.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/comment.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/aq_resizer.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/meta-box.php' );
require_once( RINJANI_TEMPLATE_DIR . '/inc/function/akmanda-customizer.php' );


// INSTALL NECESSARY PLUGINS
require_once( RINJANI_TEMPLATE_DIR . '/class-tgm.php' ); /*activate plugin function*/