<?php
/**
 * Register our widgetized area for officer pages.
 *
 */
function content_ps_widget_init() {

	register_sidebar( array(
		'name' => 'Content Post Script',
		'id' => 'content-ps',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'content_ps_widget_init' );
?>
