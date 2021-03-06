<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
			
			<h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
			<h2>Settled Lawsuits</h2>	
			<?php
			$args = array( 'post_type' => 'settlement', 'posts_per_page' => -1, 'officer' => $term );
			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
					echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo get_template_part( 'record', 'settlement' );
				}
					echo '</ul>';
			} else {
				// no posts found
				echo "<p>Based on available data this officer has not been named in any lawsuits.</p>";
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			
			<h2>Shootings</h2>	
			<?php
			$args = array( 'post_type' => 'ois_record', 'posts_per_page' => -1, 'officer' => $term );
			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
					echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo get_template_part( 'record', 'ois' );
				}
					echo '</ul>';
			} else {
				// no posts found
				echo "<p>According to the OPD this officer was not involved in any shootings.</p>";
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			

			<h2>Awards</h2>	
			<?php
			$args = array( 'post_type' => 'award', 'posts_per_page' => -1, 'officer' => $term );
			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
					echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo get_template_part( 'record', 'award' );
				}
					echo '</ul>';
			} else {
				// no posts found
				echo "<p>The OPD did not provide awards data for this officer.</p>";
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			
			<?php
			$args = array( 'post_type' => 'note', 'posts_per_page' => -1, 'officer' => $term );
			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
					echo '<h2>Notes</h2>';
					echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo get_template_part( 'record', 'note' );
				}
					echo '</ul>';
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			
			<?php if ( dynamic_sidebar('content-ps') ) : else : endif; ?>
				
			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
