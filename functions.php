<?php
/**
 * Register our widgetized area for officer pages.
 *
 */
function officer_widget_init() {

	register_sidebar( array(
		'name' => 'Officer Footer',
		'id' => 'officer-footer',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'officer_widget_init' );
?>
