<?php
/**
 * Pagination - Show numbered pagination for catalog pages.
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 3.3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	return;
}

$prev_icon = 'fa-angle-left';
$next_icon = 'fa-angle-right';

if( true == is_rtl() ) {
	$prev_icon = 'fa-angle-right';
	$next_icon = 'fa-angle-left';
}

?>
<div class="pagination">
	<?php
		echo paginate_links( apply_filters( 'woocommerce_pagination_args', array(
			'base'			=> $base,
			'format'		=> $format,
			'current'       => max( 1, $current ),
			'add_args'		=> false,
			'total'         => $total,
			'prev_text' 	=> '<i class="fa '.$prev_icon.'"></i>',
			'next_text' 	=> '<i class="fa '.$next_icon.'"></i>',
			'type'			=> 'plain',
			'end_size'		=> 1,
			'mid_size'		=> 2
		) ) );
	?>
</div>
