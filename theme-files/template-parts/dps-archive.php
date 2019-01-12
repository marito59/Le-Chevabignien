<?php
/**
 * Singular partial
 *
 * @package      EAStarter
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/
echo '<article class="' . join( ' ', get_post_class() ) . '" style="clear: both; margin-bottom: 20px;">';
    echo '<header class="entry-header">';
        if (has_post_thumbnail()) {
            echo '<span style="width: 200px; float: left;">';
            echo get_the_post_thumbnail();
            echo "</span>";
        }
		echo '<h2 class="entry-title">' . get_the_title() . '</h2>';
//		tha_entry_top();
	echo '</header>';
	echo '<div class="entry-content" style="margin-left: 20px;">';
//		tha_entry_content_before();
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ea' ),
			'after'  => '</div>',
		) );
//		tha_entry_content_after();
	echo '</div>';
	// if( has_action( 'tha_entry_bottom' ) ) {
	// 	echo '<footer class="entry-footer">';
	// 		tha_entry_bottom();
	// 	echo '</footer>';
	// }
echo '</article>';
?>