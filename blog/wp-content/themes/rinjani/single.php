<?php get_header(); ?>

<div class="container">
    <div id="primary" class="col-md-8 content-area">
		<div id="content" class="site-content">

			<?php while ( have_posts() ) : the_post(); 
			
				get_template_part( 'inc/format/content', get_post_format() );

			endwhile; // end of the loop. ?>	

			<?php 
			if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
			if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
			?>	

        </div><!-- end #content -->
    </div><!-- end #primary -->

        <?php get_sidebar(); ?>

</div><!-- end container -->

<?php get_footer(); ?>