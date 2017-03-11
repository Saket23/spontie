<?php if( class_exists('acf') ) { ?>

<li id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>

    <div class="loop-content">
        


            <?php
                $images = get_field('akmanda_gallery');
                if( $images){ ?>

                    <div class="flex-wrapper">
                        <div id="slider" class="flexslider">
                            <div class="slides">
                                <?php foreach( $images as $image ): ?>
                                <div>
                                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

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