<div id="sb-search" class="sb-search">
	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input class="sb-search-input" placeholder="<?php esc_html_e( 'Enter your search term...', 'rinjani' ); ?>" type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" >
		<input class="sb-search-submit" type="submit" value="<?php echo esc_attr_x( '', 'submit button', 'rinjani' ); ?>">
		<span class="sb-icon-search"><i class="fa fa-search"></i></span>
	</form>
</div>