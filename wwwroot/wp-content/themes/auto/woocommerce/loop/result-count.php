<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( ! woocommerce_products_will_display() )
	return;
?>
<div class="woocommerce-result-count col-sm-6">
	<p>
		<?php
			$paged    = max( 1, $wp_query->get( 'paged' ) );
			$per_page = $wp_query->get( 'posts_per_page' );
			$total    = $wp_query->found_posts;
			$first    = ( $per_page * $paged ) - $per_page + 1;
			$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

			if ( 1 == $total ) {
				esc_html_e( 'Showing the single result', 'tm-renovation' );
			} elseif ( $total <= $per_page || -1 == $per_page ) {
				printf( esc_html__( 'Showing all %d results', 'tm-renovation' ), $total );
			} else {
				printf( _x( 'Showing %1$d&ndash;%2$d of %3$d results', '%1$d = first, %2$d = last, %3$d = total', 'tm-renovation' ), $first, $last, $total );
			}
		?>
	</p>
</div>