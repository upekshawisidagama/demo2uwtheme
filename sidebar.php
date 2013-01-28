<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package UW
 * @subpackage UW Theme
 * @since UW Theme 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="six columns">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>