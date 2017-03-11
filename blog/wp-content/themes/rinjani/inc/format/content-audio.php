<article  id="post-<?php the_ID(); ?>" <?php post_class( 'post'); ?>>
	
	<div class="post-content row">
	
		<div class="post-head">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<h2 class="post-title"><?php the_title(); ?></h2>	
			</a>
			
			<div class="meta-wrap">
				<div class="single-meta-line"></div>
				<div class="post-meta">
					<span class="author vcard">
		                <?php esc_html_e( 'by ', 'rinjani' ); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a>
		            </span><!-- end author --> 
		            <span class="separate-dot">·</span>
		            <span class="cat-links">
		                <?php the_category(', '); ?>
		        	</span><!-- end cat-links -->
		        	<span class="separate-dot">·</span>
		            <span class="entry-date">
		                    <time><span class="date"><?php echo get_the_date('d'); ?> <?php echo get_the_date('M'); ?> </span><?php echo get_the_date('Y'); ?></time>   
		            </span><!-- end entry date -->
		        </div>
		    </div>
		</div>
		
		<div class="audio-content">
		<?php 
	    $audio_url = get_field('audio_url');
	    $audio_embed = get_field('audio_embed');
	    $audio_file = get_field('audio_file');

	    if($audio_url !== ''){ 
	        echo wp_oembed_get(esc_url( $audio_url ));
	    } 

	    elseif($audio_embed !== '') { 
	        echo balancetags( $audio_embed );
	    }

	    elseif($audio_file !== '') {  ?>

	        <audio controls="controls">  
	           <source src="<?php echo esc_url( $audio_file ); ?>" />  
	        </audio>
	    <?php } ?>
	    </div>

		<div class="post-entry">
			<?php the_content(); 
			wp_link_pages(); ?>
		</div>

		<div class="the-meta-bottom clearfix">
			<div class="meta-bottom col-md-6 pull-left">
				<div class="tag-wrapper"><?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
			</div>

			<div class="post-share col-md-6 pull-right"><?php rinjani_social_share(); ?></div>
		</div><!-- the-meta-bottom -->

	</div><!-- post-content -->

		<div class="author-wrapper row">
			<div class="row">
				<div class="author-context col-md-9">
					<div class="author-name"><?php esc_html_e( 'by ', 'rinjani' ); ?>
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'display_name' ); ?>" rel="author"><?php echo get_the_author_meta( 'display_name' ); ?></a>
					</div><!-- end auth-name -->

					<div class="author-content">
						<p><?php the_author_meta('description'); ?></p>
					</div>
				</div><!-- end author-wrapper -->

				<figure class="author-ava col-md-3">
					<?php  echo get_avatar( get_the_author_meta('ID'), '100' );   ?>
				</figure>
			</div>
		</div><!-- end author-wrapper -->

		<?php get_template_part( 'inc/part/related', 'post' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->