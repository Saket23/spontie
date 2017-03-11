<?php get_header();  ?>

		<div id="content-wrapper" class="container wrapper">
				<div class="row">

			<?php if ( have_posts() ) : ?>
				<ul class="grid effect-3" id="grid">

				<?php while ( have_posts() ) : the_post(); 
				
					get_template_part( 'inc/format/loop', get_post_format() );

				endwhile; // end of the loop. ?>	

				</ul>

			<?php else : ?>
			<?php 
			 wp_dequeue_script( 'rinjani-loop-js' );
			get_template_part( 'inc/format/content', 'no-result' ); ?>

			<?php endif; ?>
			
			</div>
		<?php rinjani_content_nav($pages = '', $range = 2); ?>

		</div><!-- content-wrapper -->


<?php get_footer(); ?>