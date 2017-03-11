<?php get_header(); 

/*
Template Name: Archives Template
*/

?>

<div class="container">
    <div id="primary" class="col-md-8 content-area">
		<div id="content" class="site-content">

		<?php while ( have_posts() ) : the_post(); ?>


		<article   <?php post_class( 'page-archive'); ?>>
			<div class="post-content clearfix">
				<div class="page-title">
				<h2><span><?php the_title(); ?></span></h2>
		         </div>

		         <div class="archive-list">
		         		<div class="more-slogan">
		         			<h4><?php esc_html_e( 'Archive By Month', 'rinjani' ); ?></h4>
		         		</div>
		         	<ul class="by-month">
						<?php wp_get_archives('type=monthly&show_post_count=0'); ?>
					</ul>
					
						<div class="more-slogan">
							<h4><?php esc_html_e( 'Archives By Category', 'rinjani' ); ?></h4>
						</div>
					<ul class="by-category">
						<?php wp_list_categories('exclude_tree=1'); ?>
					</ul>
				</div>
			</div>
		</article>

		<?php endwhile; // end of the loop. ?>

		</div><!-- end #content -->
    </div><!-- end #primary -->

    <?php get_sidebar(); ?>

</div><!-- end container -->

<?php get_footer(); ?>