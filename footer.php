<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="footer-top">
		</div><!-- #footer-top -->
		<div id="footer-bottom">
			<div id="footer-bottom-inner">
				<div id="copyright">
					&copy;Copyright <?php echo date("Y"); ?> Darkroom Software, LLC. All Rights Reserved.
				</div><!-- #copyright -->
				<div id="footer-buttons">
					<ul>
						<li>Buy</li>
						<li>Try</li>
						<li>Contact Us</li>				
					</ul>
				</div><!-- #footer-buttons -->			
			</div><!-- #footer-bottom-inner -->
		</div><!-- #footer-bottom -->
	</div><!-- #footer -->

</div><!-- #wrapper-inner -->
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
