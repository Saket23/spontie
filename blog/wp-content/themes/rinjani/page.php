<?php get_header(); ?>

<div class="container">
    <div id="primary" class="content-area clearfix">
		<div id="content" class="site-content">

			<?php while ( have_posts() ) : the_post(); 
			
				get_template_part( 'inc/format/content', 'page' );

			endwhile; // end of the loop. ?>	

			<?php 
		    	$options = get_option('rinjani_framework');
		    	$allow_comment = $options['allow_comment'];

		    	if( $allow_comment == '1' ) {
				if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
				if ( comments_open() || '0' != get_comments_number() ) comments_template(); 

			}
			?>

        </div><!-- end #content -->
    </div><!-- end #primary -->
</div><!-- end container -->


<?php get_footer(); ?>