<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<section id="follow-us">
	<h2>Follow Us</h2>

	<div class="grid-x grid-padding-x align-center">
		<div class="cell shrink">
			<a href="https://www.facebook.com/kogaracon/" target="_blank">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
		<div class="cell shrink">
			<a href="https://twitter.com/kogaracon/" target="_blank">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
		<div class="cell shrink">
			<a href="https://www.instagram.com/kogaracon/" target="_blank">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
				</span>
			</a>
		</div>
	</div>
</section>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
            <div class="social">
            	
            </div>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>