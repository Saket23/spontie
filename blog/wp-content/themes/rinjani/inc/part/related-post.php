 <div class="related-content row">
    <div class="row">
         <h4><?php esc_html_e( 'Related Content', 'rinjani' ); ?></h4>
    <?php  
        $orig_post = $post;  
        global $post;  
        $tags = wp_get_post_tags($post->ID);  
          
        if ($tags) {  
        $tag_ids = array();  
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
        $args=array(  
        'tag__in' => $tag_ids,  
        'post__not_in' => array($post->ID),  
        'posts_per_page'=>3, // Number of related posts to display.  
        'ignore_sticky_posts' => 1
      
        );  
          
        $my_query = new WP_Query( $args );  
      
        while( $my_query->have_posts() ) {  
        $my_query->the_post();  

        ?>  
          
            <div class="col-md-4 col-xs-12 content-related-post">
                <?php if ( has_post_thumbnail()) {
                $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
                        $rel_img = aq_resize($img_url[0],  370 , 420, true); ?> 

                    <figure>
                    <a href="<?php the_permalink(); ?>" class="thumb-link">
                        <img src="<?php echo esc_url( $rel_img ); ?>" alt="<?php the_title(); ?>">
                        <div class="mask"></div>
                    </a>
                    </figure>
                <?php }
                else {
                    echo '<figure><a href="<?php the_permalink(); ?>" class="thumb-link">
                            <img src="'. RINJANI_DIR .'/img/placeholder-related.jpg" alt="<?php the_title(); ?>" />
                            <div class="mask"></div>
                          </a></figure>';
                } ?>
                    <div class="related-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
            </div><!-- end column -->

          
        <?php }  
        }  
        $post = $orig_post;  
        wp_reset_postdata();  
        ?> 
    </div>
</div><!-- end related-content -->

