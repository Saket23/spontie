<?php get_header(); 

/*
Template Name: Contact Template
*/

	$contact_maps_iframe 	= get_field('contact_maps_iframe');
	$contact_form 			= get_field('contact_form');

?>

<div id="content-wrapper" class="wrapper">
	<div class="page-content clearfix">

		<section class="inner-contact"> 

			<?php if(!empty($contact_maps_iframe)) { ?>
				<div class="contact-map col-md-6">
					<div class="acf-map">
						<?php echo balancetags( $contact_maps_iframe ); ?>
					</div>
				</div>
			<?php } ?>
			<!-- MAP END -->

			<div class="content-contact <?php if(!empty($contact_maps_iframe)) { ?> col-md-6 <?php } ?>">
				<h3 class="contact-title"><?php the_title(); ?></h3>
				<div class="content">
					<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

					<?php endwhile; // end of the loop. ?>
				</div>

				<div class="contact-form">
					<?php echo do_shortcode( $contact_form ); ?>
				</div>
			</div>
		
		</section>

	</div>
</div><!-- wrapper -->

<?php get_footer(); ?>