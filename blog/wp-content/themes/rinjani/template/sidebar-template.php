<?php get_header(); 

/*
Template Name: Blog with Sidebar Template
*/

	wp_enqueue_script( 'rinjani-loop-js', RINJANI_DIR. '/js/loop.js', array( 'jquery', 'masonry' ), '', true );

?>
	
	<div class="container post-with-sidebar">
		<div id="content-wrapper" class="col-md-8 wrapper">

			<div class="row">

				<ul class="grid effect-3" id="grid">

				<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
		    		$sidebar_args = array(
				        'post_type'         => 'post',
            			'paged' 			=> $paged,
				        'ignore_sticky_posts' => 1,						        
				    );
		    		$sidebar_temp = new WP_Query($sidebar_args); 
		    		if ($sidebar_temp->have_posts()) : while($sidebar_temp->have_posts()) : $sidebar_temp->the_post();
				
					get_template_part( '/inc/format/loop', get_post_format() );

				endwhile; ?>	

				</ul>
				<nav role="navigation" id="" class="navigation-paging clearfix">
					<div class="nav-previous pull-right">
						<?php next_posts_link( esc_html__( 'Older Entries', 'rinjani' ), $sidebar_temp->max_num_pages ); ?>
					</div>
					<div class="nav-next pull-left">
						<?php previous_posts_link( esc_html__( 'Newer Entries', 'rinjani' ) ); wp_reset_postdata(); endif; ?>
					</div>
				</nav>

			</div>

		</div><!-- content-wrapper -->

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>