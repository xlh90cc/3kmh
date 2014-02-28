<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package base
 */

get_header(); ?>

	<section id="primary" class="content-area small-12 medium-12 large-9 columns">
		<main id="main" class="site-main row" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header small-12 medium-12 large-12 columns">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'base' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php base_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
