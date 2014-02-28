<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package base
 */
?>

                    </div><!-- #content -->
<!-- スマホ用 -->
            </section>
            <a class="exit-off-canvas"></a>
        </div><!-- inner-wrap -->
    </div><!-- off-canvas-wrap -->
<!-- スマホ用 -->
    <?php get_template_part('breadCrumbOuter'); ?>
    <footer id="colophon" class="site-footer" role="contentinfo">
<!-- ウィジェット -->
<?php get_sidebar( 'footer' ); ?>
<!-- ウィジェット -->
        <div class="footerInner row">
            <div class="site-info large-12 columns">
                <p class="copyright"><small>Copyright&copy; 2013-<?php echo date_i18n('Y'); ?>&nbsp;<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name','display')); ?>" rel="home"><?php bloginfo('name'); ?></a>&nbsp;All Rights Reserved.</small></p>
            </div><!-- .site-info -->
        </div><!-- footerInner -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php /* foundation */ ?>
<script src="<?php echo get_template_directory_uri(); ?>/foundation-5.0.2/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/foundation-5.0.2/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
<?php /* foundation */ ?>
<?php /* EqualHeight.js */ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.equalheight.min.js"></script>
<?php /* 設定は functions.js へ EqualHeight.js */ ?>
<?php /* 機能追加 */ ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
<?php /* 機能追加 */ ?>
</body>
</html>