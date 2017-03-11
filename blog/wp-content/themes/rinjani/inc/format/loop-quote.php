<?php if( class_exists('acf') ) { ?>
<li id="post-<?php the_ID(); ?>" <?php post_class( 'post col-md-4'); ?>>
    
     <div class="loop-content">
    
    <?php
    $quote_author   = get_field('quote_author');
    $author_job     = get_field('author_job');
    $author_image   = get_field('author_image');
    $quote_sentence   = get_field('quote_sentence');  ?>

        <blockquote>
        <div class="qoute-icon"></div>
            <?php echo balancetags( $quote_sentence ); ?>
            <?php if(!empty($author_image)){ ?>
            <div class="quote-thumb"><img src="<?php echo esc_url( $author_image ); ?>" alt="<?php echo sanitize_text_field( $quote_author ); ?>"></div>
            <?php } ?>
            <cite><em><?php echo sanitize_text_field( $quote_author ); ?></em>,&nbsp;&nbsp;<?php echo sanitize_text_field( $author_job ); ?></cite>
        </blockquote>

    </div><!-- end entry-content -->

</li><!-- end format-standard -->
<?php } ?>