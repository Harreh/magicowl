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
			<div class="best-clear"></div>
		</div>
		<div id="best_footer"> <?php 
			get_sidebar( 'footer' ); ?>
			<div class="best-footer-logo">
				<div class="best-footer-logo-content">
					<div class="best-footer-logo-content-home">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					</div>
                    <div class="best-footer-extra">
                        <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
                    </div>
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
                        <a href="tel:07801575661">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-mobile fa-lg fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
					</footer>
				</div>
				<div class="best-clear"></div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
