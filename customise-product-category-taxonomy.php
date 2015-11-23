//
// CUSTOMISE WOOCOMMERCE PRODUCT CATEGORY TAXONOMY
//
// Requires WooCommerce to be installed.
// ------------------------------------------------------------------------------------
// A simple method to make changes to the mames of standard WooCommerce taxonomies.
// Just replace <my new name> with the text you want to use:
// e.g. For the taxonomy 'Product Category' (product_cat/prod_cat)
//      you could use 'Photoshoots' if you just sold Photographs etc.
//      or 'Ranges' if that is better than Product Categories
// ------------------------------------------------------------------------------------
// Author: Jon Dennis
// AuthorURI: http://www.theimageyard.co.uk

add_filter( 'woocommerce_taxonomy_args_product_cat', 'my_taxonomy_args_product_cat' );

function my_taxonomy_args_product_cat ( $args ) {
	$args['label'] 				= __( '<my new name>s', 'woocommerce' );
	$args['labels']['name'] 		= __( '<my new name>s', 'woocommerce' );
	$args['labels']['singular_name']	= __( '<my new name>', 'woocommerce' );
	$args['labels']['menu_name'	]	= _x( '<my new name>s', 'Admin menu name', 'woocommerce' );
	$args['labels']['search_items']		= __( 'Search <my new name>s', 'woocommerce' );
	$args['labels']['all_items']		= __( 'All <my new name>s', 'woocommerce' );
	$args['labels']['parent_item']		= __( 'Parent <my new name>', 'woocommerce' );
	$args['labels']['parent_item_colon']	= __( 'Parent <my new name>:', 'woocommerce' );
	$args['labels']['edit_item']		= __( 'Edit <my new name>', 'woocommerce' );
	$args['labels']['update_item']		= __( 'Update <my new name>', 'woocommerce' );
	$args['labels']['add_new_item']		= __( 'Add New <my new name>', 'woocommerce' );
	$args['labels']['new_item_name']	= __( 'New <my new name> Name', 'woocommerce' );
	return $args;
}
