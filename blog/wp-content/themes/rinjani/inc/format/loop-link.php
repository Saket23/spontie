<?php if( class_exists('acf') ) { ?>
<li id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>

    <div class="loop-content">

    	<div class="link-content">
	    	<div class="link-icon"></div>
	        <?php $link_url = get_field('link_url'); ?>

	        <h1 class="entry-title">
	            <a href="<?php echo esc_url( $link_url ); ?>"><?php the_title(); ?></a>
	        </h1>
        </div>
        
    </div><!-- end entry-content -->

</li><!-- end format-standard -->
<?php } ?>