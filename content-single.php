<?php
/**
 * @package base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content-single small-12 medium-12 large-12 columns'); ?>>
	<div>
		<header class="entry-header">
			<div class="entry-meta">
				<?php base_posted_on(); ?>
			</div><!-- .entry-meta -->
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'base' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'base' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'base' ) );

				if ( ! base_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( 'This entry was tagged %2$s. <a href="%3$s" rel="bookmark">パーマリンク</a>.', 'base' );
					} else {
						$meta_text = __( '<a href="%3$s" rel="bookmark">パーマリンク</a>.', 'base' );
					}

				} else {
					// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( 'カテゴリー： %1$s &nbsp;&nbsp;タグ： %2$s. <a href="%3$s" rel="bookmark">パーマリンク</a>.', 'base' );
					} else {
						$meta_text = __( 'カテゴリー： %1$s. <a href="%3$s" rel="bookmark">パーマリンク</a>.', 'base' );
					}

				} // end check for categories on this blog

				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
				);
			?>

			<?php edit_post_link( __( 'Edit', 'base' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</div><!-- postInner -->
</article><!-- #post-## -->
