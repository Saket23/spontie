<footer id="footer" class="site-footer clearfix">
	<div class="container">
		<div class="row">
			<div class="share">
				<ul class="social">
					<li><a class="fb" id="fb-works" href="<?php echo get_option('rinjani_framework')['facebook_profile'] ?>" target="_blank"></a></li>
					<li><a class="tw" id="tw-works" href="<?php echo get_option('rinjani_framework')['twitter_profile'] ?>" target="_blank"></a></li>
					<li><a class="in" id="in-works" href="<?php echo get_option('rinjani_framework')['linkedin_profile'] ?>" target="_blank"></a></li>
				</ul>
			</div>
			<div class="goto-top">
				<a href="header" class="goto"><img src="<?php echo get_site_url(); ?>/wp-content/themes/rinjani/img/icon-top.png" alt=""/></a>
			</div>

<!--
====== DEFAULT FOOTER REMOVED ======= START
			<div class="footer-left col-md-6">
				<div class="footer-logo">
					<div class="logo"><?php rinjani_footer_logo(); ?></div>
				</div>

				<div class="copyright-text">
					<?php rinjani_footer_copyright(); ?>
				</div>
			</div>

			<div class="footer-right col-md-6">
				<div class="footer-social pull-right">
					<ul class="site-footer-social">
						<?php rinjani_social_profile(); ?>
					</ul>
				</div>
			</div>
====== DEFAULT FOOTER REMOVED ======= END
-->
		</div>
	</div>
</footer>
<div class="footer-copyright"><?php rinjani_footer_copyright(); ?> </div>
<!-- #footer -->

</div>
<!-- #main-wrapper -->

<?php wp_footer(); ?>

</body>
</html>