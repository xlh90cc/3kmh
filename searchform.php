<?php
/**
 * The template for displaying search forms in base
 *
 * @package base
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'サイト内を検索', 'label', 'base' ); ?></span>
		<div class="inputOuter">
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'base' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
			<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '検索', 'submit button', 'base' ); ?>">
		</div>
	</label>
</form>
