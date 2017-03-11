<?php if( class_exists('acf') ) { ?>
<li id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>

    <div class="loop-content">
        <div class="featured-video">
            <?php 
                $video_url = get_field('video_url');
                $video_embed = get_field('video_embed');
                $video_file = get_field('video_file');
                
                if($video_url !== ''){ 
                    echo wp_oembed_get( esc_url( $video_url ));
                } 
                
                elseif($video_embed !== '') { 
                    echo balancetags( $video_embed );
                }

                elseif($video_file !== '') {  ?>
                <?php echo do_shortcode( '[video src="'. sanitize_text_field( $video_file ).'"]' ) ?>  
            <?php } ?>
        </div><!-- end featured-video -->
    
    <div class="info">

        <div class="top-info">
            <span class="category"><?php the_category(', '); ?></span>
        </div>


        <a href="<?php the_permalink(); ?>">
            <h4 class="title"><?php the_title(); ?></h4>
        </a>
        <div class="date"><?php echo get_the_date(); ?></div>
        
        
        <?php the_excerpt(); ?>
        <div class="more-button clearfix">
        <div class="post-share pull-left"><?php rinjani_social_share(); ?></div>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more pull-right"><?php esc_html_e( 'VIEW', 'rinjani' ); ?></a>
        </div>

    </div>

    </div><!-- post-content -->

</li><!-- end format-standard -->
<?php } ?>