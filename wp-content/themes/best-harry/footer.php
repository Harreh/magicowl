<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @subpackage Best
 * @since Best 1.0
 */
?>
			<div class="best-clear"></div><!-- clear -->
		</div> <!-- home -->	
		<div id="best_footer"> <?php 
			get_sidebar( 'footer' ); ?>
			<div class="best-footer-logo">
				<div class="best-footer-logo-content">
					<div class="best-footer-logo-content-home">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</div> <!-- best-footer-logo-content-home -->
					<footer class="best-footer-logo-content-by">
                        <a href="https://www.facebook.com/magicowldiscos">
                            <span class="fa-stack fa-2x">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-facebook-square fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a href="mailto:tim@magicowldiscos.co.uk">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <a id="footer-phone-link">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-mobile fa-lg fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
					</footer> <!-- best-footer-logo-content-by -->
				</div> <!-- best-footer-logo_content -->
				<div class="best-clear"></div>
			</div> <!-- best-footer-logo -->
		</div> <!-- #best_foote -->
	</div> <!-- wrapper --> 
	<?php wp_footer(); ?>
</body>
</html>
