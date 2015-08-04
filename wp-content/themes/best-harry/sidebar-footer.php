<?php
/**
 * The Footer Sidebar
 *
 * @subpackage Best
 * @since Best 1.0
 */
if ( ! is_active_sidebar( 'best_footer_sidebar' ) ) {
	return;
}
?>
<div id="best_footer_sidebar">
	<div class="best-footer-sidebar-content">
        <h3>Subscribe to our newsletter</h3>
        <?php if ( is_active_sidebar( 'best_footer_sidebar' ) ) {
			dynamic_sidebar( 'best_footer_sidebar' ); 
		} ?>
		<div class="best-clear"></div>
	</div> <!-- best-footer-sidebar-content -->
</div> <!-- footer_sidebar -->
