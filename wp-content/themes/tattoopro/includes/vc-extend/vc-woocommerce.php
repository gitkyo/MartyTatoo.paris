<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( function_exists( 'is_woocommerce' ) ) {

/* Order Tracking */
vc_map(
	array(
		'name' => __( 'Shop categories', 'tattoopro' ),
		'base' => 'wolf_woocommerce_categories',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'by WolfThemes',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Type', 'tattoopro' ),
				'param_name' => 'layout',
				'description' => '',
				'value' => array(
					__( 'portrait', 'tattoopro' ) => 'portrait',
					__( 'classic', 'tattoopro' ) => 'classic-thumb',
					__( 'square', 'tattoopro' ) => 'square',
					__( 'mosaic', 'tattoopro' ) => 'mosaic',
				),
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Include', 'tattoopro' ),
				'param_name' => 'include',
				'description' => __( 'Category slug to include (separate by a comma)', 'tattoopro' )
			),

			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Exclude', 'tattoopro' ),
				'param_name' => 'exclude',
				'description' => __( 'Category slug to exclude (separate by a comma)', 'tattoopro' )
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Columns', 'tattoopro' ),
				'param_name' => 'columns',
				'value' => array(
					3,1,2,4,5,6
				),
				'description' => '',
				'dependency' => array( 'element' => 'layout', 'value' => array( 'classic-thumb', 'portrait', 'square' ) ),
			),

			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Padding', 'tattoopro' ),
				'param_name' => 'padding',
				'value' => array(
					__( 'Yes', 'tattoopro' ) => 'yes',
					__( 'No', 'tattoopro' ) => 'no',
				),
				'description' => '',
				'dependency' => array( 'element' => 'layout', 'value' => array( 'classic-thumb', 'portrait', 'square' ) ),
			),
		)
	)
);

/* Order Tracking */
vc_map(
	array(
		'name' => __( 'Order Tracking', 'tattoopro' ),
		'base' => 'woocommerce_order_tracking',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		 'show_settings_on_create' => false
	)
);

/* Product price/cart button */
vc_map(
	array(
		'name' => __( 'Product price/cart button', 'tattoopro' ),
		'base' => 'add_to_cart',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'ID',
				'param_name' => 'id',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'SKU',
				'param_name' => 'sku',
				'description' => ''
			)
		),
	)
);

/* Product by SKU/ID */
vc_map(
	array(
		'name' => __( 'Product by SKU/ID', 'tattoopro' ),
		'base' => 'product',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'ID',
				'param_name' => 'id',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'SKU',
				'param_name' => 'sku',
				'description' => ''
			)
		)
	)
);


/* Products by SKU/ID */
vc_map(
	array(
		'name' => __( 'Products by SKU/ID', 'tattoopro' ),
		'base' => 'products',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'IDS',
				'param_name' => 'ids',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => 'SKUS',
				'param_name' => 'skus',
				'description' => ''
			)
		)
	)
);

/* Product categories */
vc_map(
	array(
		'name' => __( 'Product categories', 'tattoopro' ),
		'base' => 'product_categories',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Number', 'tattoopro' ),
				'param_name' => 'number',
				'description' => ''
			)
		)
	)
);

/* Products by category slug */
vc_map(
	array(
		'name' => __( 'Products by category slug', 'tattoopro' ),
		'base' => 'product_category',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Category', 'tattoopro' ),
				'param_name' => 'category',
				'description' => ''
			),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Per page', 'tattoopro' ),
				'param_name' => 'per_page',
				'value' => '12'
			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Columns', 'tattoopro' ),
				'param_name' => 'columns',
				'value' => array(
					4,3,2,
				),
				'description' => '',
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order by', 'tattoopro' ),
				'param_name' => 'order_by',
				'value' => array(
					'Date' => 'date',
					'Title' => 'title',
				),
				'description' => ''
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order', 'tattoopro' ),
				'param_name' => 'order',
				'value' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
				'description' => ''
			)
		)
	)
);

/* Recent products */
vc_map(
	array(
		'name' => __( 'Recent products', 'tattoopro' ),
		'base' => 'recent_products',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Per page', 'tattoopro' ),
				'param_name' => 'per_page',
				'value' => '12'
			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Columns', 'tattoopro' ),
				'param_name' => 'columns',
				'value' => array(
					4,3,2,
				),
				'description' => '',
			),

			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order by', 'tattoopro' ),
				'param_name' => 'order_by',
				'value' => array(
					'Date' => 'date',
					'Title' => 'title',
				),
				'description' => ''
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order', 'tattoopro' ),
				'param_name' => 'order',
				'value' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
				'description' => ''
			),
		)
	)
);

/* Featured products */
vc_map(
	array(
		'name' => __( 'Featured products', 'tattoopro' ),
		'base' => 'featured_products',
		'icon' => 'wolf-vc-icon wolf-vc-woocommerce',
		'category' => 'WooCommerce',
		'allowed_container_element' => 'vc_row',
		'params' => array(
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Per page', 'tattoopro' ),
				'param_name' => 'per_page',
				'value' => '12'
			),
			array(
				'type' => 'dropdown',
				'class' => '',
				'heading' => __( 'Columns', 'tattoopro' ),
				'param_name' => 'columns',
				'value' => array(
					4,3,2,
				),
				'description' => '',
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order by', 'tattoopro' ),
				'param_name' => 'order_by',
				'value' => array(
					'Date' => 'date',
					'Title' => 'title',
				),
				'description' => ''
			),
			array(
				'type' => 'dropdown',
				'admin_label' => true,
				'class' => '',
				'heading' => __( 'Order', 'tattoopro' ),
				'param_name' => 'order',
				'value' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
				'description' => ''
			),
		)
	)
);


} // end woocommerce check