<article id="page-<?php the_ID(); ?>" <?php post_class( 'page'); ?>>

<div class="head-title">
	<h2 class="page-title"><span><?php the_title();?></span></h2>
</div><!-- end head-title -->

<div class="page-content clearfix">

    <?php the_content(); ?> 
    <?php wp_link_pages(); ?>              

</div><!-- page-content -->     
</article><!-- #page<?php the_ID(); ?> -->