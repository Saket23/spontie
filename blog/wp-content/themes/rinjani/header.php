<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<?php wp_head(); ?>

<link href="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/css/animations.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/css/main.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
<style type="text/css">

@font-face {font-family: "Lulo Clean W01 One";
  src: url("/Lulo Clean W01 One/Lulo Clean W01 One.eot"); /* IE9*/
  src: url("/Lulo Clean W01 One/Lulo Clean W01 One.eot") format("embedded-opentype"), /* IE6-IE8 */
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.woff") format("woff"), /* chrome、firefox */
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.ttf") format("truetype"), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url("/Lulo Clean W01 One Bold/Lulo Clean W01 One Bold.svg") format("svg"); /* iOS 4.1- */
}
    header {
        background-image: url(abc.jpeg);
		background-repeat: no-repeat;
		background-position: center center;
		background-size:cover;		
    }	
</style>
</head>

<body <?php body_class() ;?>>
<div id="main-wrapper" class="clearfix">

	<!-- Start of Header -->
	<header id="header" class="site-header clearfix" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/rinjani/img/bg-header.jpg) 50% 0% no-repeat; background-size: cover; border-bottom: 5px solid #00aed9;">
		<div class="site-header-top" style="display: none;"> <!-- hidden -->
	        <div class="container">
	            <div class="row">
	                <div class="site-header-top-left col-md-6">
	                    <nav class="secondary-nav">
	                        <?php rinjani_top_extra_menu(); ?>
	                    </nav>
	                </div>
	                <div class="site-header-top-right col-md-6 col-xs-12">
	                    <ul class="site-header-social">
	                        <?php rinjani_social_profile(); ?>
	                    </ul>
	                    <div class="site-header-search">
	                        <?php get_template_part( 'inc/part/header', 'search' ); ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- site-header-top -->
		<div class="menu-container clear">
			<div class="mobile-toggle animatedClick" data-target="clickExample"></div>
			<nav class="menu ">
				<ul class="">
					<?php $homeUrl = substr(get_site_url(), 0, strrpos(get_site_url(), '/')); ?>
					<li class=""><a href="<?php echo $homeUrl; ?>" >Home</a></li>
					<li class=""><a href="<?php echo get_site_url(); ?>">Blog</a></li>
				</ul>
				<div class="social">
					<span><a href="<?php echo get_option('rinjani_framework')['facebook_profile'] ?>" target="_blank"><img draggable="false" src="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/img/social-fb.png" alt=""/></a></span>
					<span><a href="<?php echo get_option('rinjani_framework')['twitter_profile'] ?>" target="_blank"><img draggable="false" src="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/img/social-tw.png" alt=""/></a></span>
					<span><a href="<?php echo get_option('rinjani_framework')['linkedin_profile'] ?>" target="_blank"><img draggable="false" src="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/img/social-in.png" alt=""/></a></span>
				</div>
			</nav>
			<div class="logo"><a href="<?php echo $homeUrl; ?>" style="color:#BADA55; font-weight:700;  font-size: 20px; font-family: Lulo Clean W01 One,sans-serif;">SPONTIE</a></div>
		</div>

		<div class="site-header-bottom">
		    <div class="site-header-logo">
				<div class="container">
					<div class="logo"><?php rinjani_logo_type() ?></div>
		    	</div>
		    </div>

			<?php /*<div class="site-main-menu">
				<div class="container">
					<div class="mobile-menu">
						<i class="fa fa-bars"></i><span><?php esc_html_e( 'MENU', 'rinjani' ); ?></span>
					</div>
					<!-- Start of Menu  -->
					<nav id="main-menu" class="menu">
						<?php rinjani_top_nav_menu(); ?>
					</nav>
					<!-- End of Menu  -->
				</div>
			</div>
			<!-- site-main-header -->
 			*/?>
		</div>

	</header>
	<div class="header-after-space"></div>
	<!-- End of Header -->