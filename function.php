<?php 


function aci_offer_items_order( $query ) {
//   set the page condition what you need. 
	$query->set( 'order' , 'desc' );
	$query->set( 'orderby', 'ID');
	return;
}
add_action( 'pre_get_posts', 'aci_offer_items_order', 1 );


?>
