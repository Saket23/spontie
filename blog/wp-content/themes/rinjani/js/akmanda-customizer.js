/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Akmanda Framework
	* 	Copyright Themes Awesome 2013 - http://www.themesawesome.com
*
*/
( function( $ ){		
	
	// HEADER STYLING

	wp.customize('bg_top_header',function( value ) {
		value.bind(function(to) {
			$('.site-header-top').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_submenu',function( value ) {
		value.bind(function(to) {
			$('.menus ul.sub-menu li a, .menus ul').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_submenu_hov',function( value ) {
		value.bind(function(to) {
			$('.menus ul.sub-menu li a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bord_top_header',function( value ) {
		value.bind(function(to) {
			$('.menus ul.sub-menu li').css('border-top-color', to ? to : '' );
			$('.menus ul.sub-menu li').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('icon_search',function( value ) {
		value.bind(function(to) {
			$('.sb-icon-search i').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_search',function( value ) {
		value.bind(function(to) {
			$('.sb-search-input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('menu_list',function( value ) {
		value.bind(function(to) {
			$('.site-header-top .secondary-nav li a, .menus li.menu-item-has-children:hover ul li a, .menus .children li a, .menus .sub-menu li a').css('color', to ? to : '' );
			$('.menus li.menu-item-has-children:before').css('color', to ? to : '' );
		});
	});

	wp.customize('sub_menu',function( value ) {
		value.bind(function(to) {
			$('.menus li.menu-item-has-children:hover ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_sosmed',function( value ) {
		value.bind(function(to) {
			$('.site-header-social li a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_sosmed_hover',function( value ) {
		value.bind(function(to) {
			$('.site-header-social li:hover a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_sosmed_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.site-header-social li:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_logo',function( value ) {
		value.bind(function(to) {
			$('#header').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bord_head',function( value ) {
		value.bind(function(to) {
			$('.site-header-logo').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('menu_list2',function( value ) {
		value.bind(function(to) {
			$('.menus a, .site-header-bottom .menus li.menu-item-has-children:before').css('color', to ? to : '' );
		});
	});



	// CONTENT STYLING

	wp.customize('bg_loop',function( value ) {
		value.bind(function(to) {
			$('.loop-content').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_forlink',function( value ) {
		value.bind(function(to) {
			$('.post.format-link .link-content, .post.format-link .link-icon:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_forlink',function( value ) {
		value.bind(function(to) {
			$('.post.format-link .link-content a').css('color', to ? to : '' );
		});
	});

	wp.customize('bord_loop',function( value ) {
		value.bind(function(to) {
			$('.loop-content .category:after, .single-meta-line').css('background-color', to ? to : '' );
			$('.sticky .top-info:before').css('color', to ? to : '' );
		});
	});

	wp.customize('title_post',function( value ) {
		value.bind(function(to) {
			$('.loop-content h3.title, .single-post .post-title, .author-wrapper .author-name a, .widget-title, .author-wrapper .author-name, .related-content h4, .related-title a, .comments-title h4, #respond h3').css('color', to ? to : '' );
		});
	});

	wp.customize('category_post',function( value ) {
		value.bind(function(to) {
			$('.loop-content .category a, .post-meta, .post-meta a, .separate-dot').css('color', to ? to : '' );
		});
	});

	wp.customize('date_post',function( value ) {
		value.bind(function(to) {
			$('.loop-content .date').css('color', to ? to : '' );
		});
	});

	wp.customize('content_post',function( value ) {
		value.bind(function(to) {
			$('.loop-content p, .post-content').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_post',function( value ) {
		value.bind(function(to) {
			$('a.more').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_text',function( value ) {
		value.bind(function(to) {
			$('a.more').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_hove_bg',function( value ) {
		value.bind(function(to) {
			$('a.more:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_hove_txt',function( value ) {
		value.bind(function(to) {
			$('a.more:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_share',function( value ) {
		value.bind(function(to) {
			$('.share').css('background-color', to ? to : '' );
		});
	});

	wp.customize('tex_share',function( value ) {
		value.bind(function(to) {
			$('.share').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share',function( value ) {
		value.bind(function(to) {
			$('.social-share a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share_hov',function( value ) {
		value.bind(function(to) {
			$('.social-share a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('arrow_gallery',function( value ) {
		value.bind(function(to) {
			$('.post.format-gallery .flex-direction-nav a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('arrow_icon',function( value ) {
		value.bind(function(to) {
			$('.post.format-gallery .flex-direction-nav a:before').css('color', to ? to : '' );
		});
	});

	wp.customize('pagination_bg',function( value ) {
		value.bind(function(to) {
			$('.nav-previous a, .nav-next a').css('background-color', to ? to : '' );
			$('.nav-previous a, .nav-next a').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('pagination_bg_hov',function( value ) {
		value.bind(function(to) {
			$('.nav-previous a:hover, .nav-next a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('pagination_text',function( value ) {
		value.bind(function(to) {
			$('.nav-previous a').css('color', to ? to : '' );
		});
	});

	wp.customize('pagination_hov',function( value ) {
		value.bind(function(to) {
			$('.nav-previous a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('link_color',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a, .edit-link a, .logged-in-as a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hov',function( value ) {
		value.bind(function(to) {
			$('a:hover, .comment-action a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_comment',function( value ) {
		value.bind(function(to) {
			$('.form-submit .submit').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_tex',function( value ) {
		value.bind(function(to) {
			$('.form-submit .submit').css('color', to ? to : '' );
		});
	});

	wp.customize('bord_title_widget',function( value ) {
		value.bind(function(to) {
			$('.widget-title:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_widget',function( value ) {
		value.bind(function(to) {
			$('.widget-area .widget li a, .recent-post-content p, .widget li, .rinjani_author_bio').css('color', to ? to : '' );
		});
	});

	wp.customize('border_author',function( value ) {
		value.bind(function(to) {
			$('.rinjani_author_img img').css('border-color', to ? to : '' );
		});
	});

	wp.customize('border_title_post',function( value ) {
		value.bind(function(to) {
			$('.single-meta-line').css('background-color', to ? to : '' );
		});
	});



	// FOOTER STYLING

	wp.customize('bg_footer',function( value ) {
		value.bind(function(to) {
			$('.site-footer').css('background-color', to ? to : '' );
		});
	});

	wp.customize('copyright_text',function( value ) {
		value.bind(function(to) {
			$('.copyright-text').css('color', to ? to : '' );
		});
	});

	wp.customize('sosmed_footer',function( value ) {
		value.bind(function(to) {
			$('.site-footer-social li a').css('color', to ? to : '' );
		});
	});

	wp.customize('sosmed_footer_hov',function( value ) {
		value.bind(function(to) {
			$('.site-footer-social li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a').css('color', to ? to : '' );
		});
	});

	


} )( jQuery );