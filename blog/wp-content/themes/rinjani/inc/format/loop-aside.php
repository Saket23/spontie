<li  id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>

    <div class="loop-content">

          
        <?php if ( has_post_thumbnail() ) { ?>
            <div class="thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('post-thumb-loop'); ?>
            </a>
            </div><!-- thumbnail-->
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

      

</li><!-- #post-<?php the_ID(); ?> -->