<?php 

function rinjani_social_profile() {

$options = get_option('rinjani_framework');


    $twitter = $options['twitter_profile'];
    $facebook = $options['facebook_profile'];
    $linkedin = $options['linkedin_profile'];
    $google = $options['google_profile'];
    $pinterest = $options['pinterest_profile'];
    $dribble = $options['dribble_profile'];
    $flickr = $options['flickr_profile'];
    $behance = $options['behance_profile'];
    $youtube = $options['youtube_profile'];
    $soundcloud = $options['soundcloud_profile'];
    $codepen = $options['codepen_profile'];
    $deviantart = $options['deviantart_profile'];
    $digg = $options['digg_profile'];
    $dropbox = $options['dropbox_profile'];
    $github = $options['github_profile'];
    $instagram = $options['instagram_profile'];
    $skype = $options['skype_profile'];
    $spotify = $options['spotify_profile'];
    $steam = $options['steam_profile'];
    $trello = $options['trello_profile'];
    $tumblr = $options['tumblr_profile'];
    $vimeo = $options['vimeo_profile'];
    $wechat = $options['wechat_profile'];
    $weibo = $options['weibo_profile'];
    $wordpress = $options['wordpress_profile'];
    $xing = $options['xing_profile'];
    $yahoo = $options['yahoo_profile'];
    $yelp = $options['yelp_profile'];

    if (!empty($twitter)) { ?>
        <li class="twitter soc-icon"><a href="<?php echo esc_url( $twitter ); ?>" class="fa fa-twitter"></a></li>
    <?php 
    } 

    if (!empty($google)) { ?>
      <li class="google soc-icon"><a href="<?php echo esc_url( $google ); ?>" class="fa fa-google-plus"></a></li>
    <?php 
    } 

    if (!empty($facebook)) { ?>
      <li class="facebook soc-icon"><a href="<?php echo esc_url( $facebook ); ?>" class="fa fa-facebook"></a></li>
    <?php 
    } 

    if (!empty($linkedin)) { ?>
      <li class="linkedin soc-icon"><a href="<?php echo esc_url( $linkedin ); ?>" class="fa fa-linkedin"></a></li>
    <?php 
    } 

    if (!empty($pinterest)) { ?>
      <li class="pinterest soc-icon"><a href="<?php echo esc_url( $pinterest ); ?>" class="fa fa-pinterest"></a></li>
    <?php 
    } 

    if (!empty($dribble)) { ?>
      <li class="dribble soc-icon"><a href="<?php echo esc_url( $dribble ); ?>" class="fa fa-dribbble"></a></li>
    <?php 
    }

    if (!empty($flickr)) { ?>
      <li class="flickr soc-icon"><a href="<?php echo esc_url( $flickr ); ?>" class="fa fa-flickr"></a></li>
    <?php 
    }

    if (!empty($behance)) { ?>
      <li class="behance soc-icon"><a href="<?php echo esc_url( $behance ); ?>" class="fa fa-behance"></a></li>
    <?php 
    }

    if (!empty($youtube)) { ?>
      <li class="youtube soc-icon"><a href="<?php echo esc_url( $youtube ); ?>" class="fa fa-youtube"></a></li>
    <?php 
    }

    if (!empty($soundcloud)) { ?>
      <li class="soundcloud soc-icon"><a href="<?php echo esc_url( $soundcloud ); ?>" class="fa fa-soundcloud"></a></li>
    <?php 
    }

    if (!empty($codepen)) { ?>
      <li class="codepen soc-icon"><a href="<?php echo esc_url( $codepen ); ?>" class="fa fa-codepen"></a></li>
    <?php 
    }

    if (!empty($deviantart)) { ?>
      <li class="deviantart soc-icon"><a href="<?php echo esc_url( $deviantart ); ?>" class="fa fa-deviantart"></a></li>
    <?php 
    }

    if (!empty($digg)) { ?>
      <li class="digg soc-icon"><a href="<?php echo esc_url( $digg ); ?>" class="fa fa-digg"></a></li>
    <?php 
    }

    if (!empty($dropbox)) { ?>
      <li class="dropbox soc-icon"><a href="<?php echo esc_url( $dropbox ); ?>" class="fa fa-dropbox"></a></li>
    <?php 
    }

    if (!empty($github)) { ?>
      <li class="github soc-icon"><a href="<?php echo esc_url( $github ); ?>" class="fa fa-github"></a></li>
    <?php 
    }

    if (!empty($instagram)) { ?>
      <li class="instagram soc-icon"><a href="<?php echo esc_url( $instagram ); ?>" class="fa fa-instagram"></a></li>
    <?php 
    }

    if (!empty($skype)) { ?>
      <li class="skype soc-icon"><a href="<?php echo esc_url( $skype ); ?>" class="fa fa-skype"></a></li>
    <?php 
    }

    if (!empty($spotify)) { ?>
      <li class="spotify soc-icon"><a href="<?php echo esc_url( $spotify ); ?>" class="fa fa-spotify"></a></li>
    <?php 
    }

    if (!empty($steam)) { ?>
      <li class="steam soc-icon"><a href="<?php echo esc_url( $steam ); ?>" class="fa fa-steam"></a></li>
    <?php 
    }

    if (!empty($trello)) { ?>
      <li class="trello soc-icon"><a href="<?php echo esc_url( $trello ); ?>" class="fa fa-trello"></a></li>
    <?php 
    }

    if (!empty($tumblr)) { ?>
      <li class="tumblr soc-icon"><a href="<?php echo esc_url( $tumblr ); ?>" class="fa fa-tumblr"></a></li>
    <?php 
    }

    if (!empty($vimeo)) { ?>
      <li class="vimeo soc-icon"><a href="<?php echo esc_url( $vimeo ); ?>" class="fa fa-vimeo-square"></a></li>
    <?php 
    }

    if (!empty($wechat)) { ?>
      <li class="wechat soc-icon"><a href="<?php echo esc_url( $wechat ); ?>" class="fa fa-weixin"></a></li>
    <?php 
    }

    if (!empty($weibo)) { ?>
      <li class="weibo soc-icon"><a href="<?php echo esc_url( $weibo ); ?>" class="fa fa-weibo"></a></li>
    <?php 
    }

    if (!empty($wordpress)) { ?>
      <li class="wordpress soc-icon"><a href="<?php echo esc_url( $wordpress ); ?>" class="fa fa-wordpress"></a></li>
    <?php 
    }

    if (!empty($xing)) { ?>
      <li class="xing soc-icon"><a href="<?php echo esc_url( $xing ); ?>" class="fa fa-xing"></a></li>
    <?php 
    }

    if (!empty($yahoo)) { ?>
      <li class="yahoo soc-icon"><a href="<?php echo esc_url( $yahoo ); ?>" class="fa fa-yahoo"></a></li>
    <?php 
    }

    if (!empty($yelp)) { ?>
      <li class="yelp soc-icon"><a href="<?php echo esc_url( $yelp ); ?>" class="fa fa-yelp"></a></li>
    <?php 
    } 

 }


function rinjani_social_share() { 
global $post;
  ?>
<div class="social-share-wrapper">
  <div class="share"><?php esc_html_e( 'SHARE', 'rinjani' ); ?><i class="fa fa-share-alt"></i></div>
  <div class="social-share">
    <div class="facebook share-icon"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="product_share_facebook" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"><i class="fa fa-facebook"></i></a></div>
    <div class="twitter share-icon"><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;" class="product_share_twitter"><i class="fa fa-twitter"></i></a></div>   
    <div class="google share-icon"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
              '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a></div>
  </div>
</div><!-- Social Share Wrapper -->
<?php
}


//EXCERPT

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  } 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


function rinjani_custom_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'rinjani_custom_excerpt_length', 999 );

function rinjani_new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'rinjani_new_excerpt_more');


//EXCERPT

function custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


//FOOTER LOGO

function rinjani_footer_logo() {

    $options = get_option('rinjani_framework');

    $logo = '';
    if (isset($options['footer_logo_upload'])) {
        $logo = $options['footer_logo_upload'];
        $upload_logo = $logo['url'];
    }

    if (! empty( $upload_logo ) ) { ?>

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($upload_logo); ?>" class="image-logo" alt="logo" /></a>

    <?php
    }
}