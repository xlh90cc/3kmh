<?php
/**
 * @package base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 medium-12 large-12 columns'); ?>>
    <div class="thumbnail small-12 medium-3 large-3 columns">
        <?php if (has_post_thumbnail()) {
            the_post_thumbnail();
            } else {
                echo '<img src="'.get_template_directory_uri().'/assets/img/no_image.gif" alt="" title="" />';
        }
        ?>
    </div>
    <div class="headerAndContentOuter small-12 medium-9 large-9 columns">
        <header class="entry-header">
                <div class="entry-meta">
                    <?php base_posted_on(); ?>
                </div><!-- .entry-meta -->
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

                <?php if ( 'post' == get_post_type() ) : ?>
            <?php endif; ?>
        </header><!-- .entry-header -->
        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'base' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'base' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
    </div><!-- headerAndContentOuter -->
    <?php endif; ?>

    <footer class="entry-meta small-12 medium-12 large-12 columns">
        <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( __( ', ', 'base' ) );
                if ( $categories_list && base_categorized_blog() ) :
            ?>
            <span class="cat-links">
                <?php printf( __( 'Posted in %1$s', 'base' ), $categories_list ); ?>
            </span>
            <?php endif; // End if categories ?>

            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( ', ', 'base' ) );
                if ( $tags_list ) :
            ?>
            <span class="tags-links">
                <?php printf( __( 'Tagged %1$s', 'base' ), $tags_list ); ?>
            </span>
            <?php endif; // End if $tags_list ?>
        <?php endif; // End if 'post' == get_post_type() ?>

        <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
        <!--
        <span class="comments-link"><?php /* comments_popup_link( __( 'Leave a comment', 'base' ), __( '1 Comment', 'base' ), __( '% Comments', 'base' ) ); */ ?></span>
        -->
        <?php endif; ?>

        <?php edit_post_link( __( 'Edit', 'base' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->
