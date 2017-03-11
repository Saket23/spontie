<?php if( class_exists('acf') ) { ?>
<li id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>

    <div class="loop-content">

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