<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( is_active_sidebar( 'sidebar-6' ) || ( !is_active_sidebar( 'sidebar-6' ) && current_user_can('edit_theme_options') ) ) : ?>

		<div id="footer-fullwidth-wrap" class="fullwidth cc-footer">
			<div class="container">
				<div class="footer-fullwidth-inner row">
					
					<div id="footer-fullwidth" class="col-12">
						
						<?php if( !dynamic_sidebar( 'footer-fullwidth' ) && current_user_can('edit_theme_options') ) { ?>
								<div class="widgetarea">
									<h3 class="widgettitle" ><?php _e('Add a widget', 'cc2'); ?> <a href="<?php echo admin_url('widgets.php') ?>"><?php _e('here', 'cc2'); ?></a>.</h3>
									<p><i>* only visible for admins ;)</i></p>
								</div>	
						<?php } ?>
						
					</div>	
					
				</div>
			</div>
		</div>
	
	<?php endif; ?>
	
	<?php if( is_active_sidebar( 'footer-col-1' ) || is_active_sidebar( 'footer-col-2' ) || is_active_sidebar( 'footer-col-3' ) || ( !is_active_sidebar( 'footer-col-1' ) && current_user_can('edit_theme_options') ) ) : ?>
			
		<div id="footer-columns-wrap" class="footer-columns cc-footer">
			<div class="container">
				<div class="footer-columns-inner row">
	
					<div id="cc-footer-1" class="footer-column col-12 col-sm-4 col-lg-4">
						<div class="widgetarea">
						
							<?php if( !dynamic_sidebar( 'footer-column-1' ) && current_user_can('edit_theme_options') ) { ?>
								<h3 class="widgettitle" ><?php _e('Add widgets', 'cc2'); ?> <a href="<?php echo admin_url('widgets.php') ?>"><?php _e('here', 'cc2'); ?></a>.</h3>
							<?php } ?>
						
						</div>	
					</div>	
					
					<div id="cc-footer-2" class="footer-column col-12 col-sm-4 col-lg-4">
						<div class="widgetarea">
	
							<?php if( !dynamic_sidebar( 'footer-column-2' ) && current_user_can('edit_theme_options') ) { ?>
								<h3 class="widgettitle" ><?php _e('Add widgets', 'cc2'); ?> <a href="<?php echo admin_url('widgets.php') ?>"><?php _e('here', 'cc2'); ?></a>.</h3>
							<?php } ?>
						
						</div>	
					</div>	
					
					<div id="cc-footer-3" class="footer-column col-12 col-sm-4 col-lg-4">
						<div class="widgetarea">

							<?php if( !dynamic_sidebar( 'footer-column-3' ) && current_user_can( 'edit_theme_options' ) ) { ?>
								<h3 class="widgettitle" ><?php _e( 'Add widgets', 'cc2' ); ?> <a href="<?php echo admin_url( 'widgets.php' ) ?>"><?php _e( 'here', 'cc2' ); ?></a>.</h3>
							<?php } ?>

						</div>	
					</div>	
	
				</div>
			</div>
		</div>
	
	<?php endif; ?>
	
	
	<div id="branding">
		<div class="container">
			<div class="row">
				<div class="branding-footer-inner col-12">
					<div class="site-info">
						<?php do_action( '_tk_credits' ); ?>
						<p class="alignright"><small><a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform">Proudly powered by WordPress</a>
						<span class="sep"> | </span>
						<a href="http://themekraft.com/store/custom-community-2-free-responsive-wordpress-bootstrap-theme/" title="WordPress Theme Custom Community 2">WordPress Theme Custom Community 2</a> developed by <a href="http://themekraft.com/" title="WordPress Themes and Plugins by ThemeKraft">ThemeKraft</a></small></p>
					</div><!-- close .site-info -->
				</div>	
			</div>
		</div>
	</div><!-- cloase #branding -->
	
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
