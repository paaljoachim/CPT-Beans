<?php

// ------  Register Custom Post Type for Edwien --------
function add_custom_post_type_edwien() {

	$labels = array(
		'name'                  => _x( 'Edwien', 'Post Type General Name', 'beans_child' ),
		'singular_name'         => _x( 'Edwien', 'Post Type Singular Name', 'beans_child' ),
		'menu_name'             => __( 'Edwien', 'beans_child' ),
		'name_admin_bar'        => __( 'Edwien', 'beans_child' ),
		'archives'              => __( 'Item Archives', 'beans_child' ),
		'attributes'            => __( 'Item Attributes', 'beans_child' ),
		'parent_item_colon'     => __( 'Parent Item:', 'beans_child' ),
		'all_items'             => __( 'Alle Edwiens tekster', 'beans_child' ),
		'add_new_item'          => __( 'Add New Item', 'beans_child' ),
		'add_new'               => __( 'Add New', 'beans_child' ),
		'new_item'              => __( 'New Item', 'beans_child' ),
		'edit_item'             => __( 'Edit Item', 'beans_child' ),
		'update_item'           => __( 'Update Item', 'beans_child' ),
		'view_item'             => __( 'View Item', 'beans_child' ),
		'view_items'            => __( 'View Items', 'beans_child' ),
		'search_items'          => __( 'Search Item', 'beans_child' ),
		'not_found'             => __( 'Not found', 'beans_child' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'beans_child' ),
		'featured_image'        => __( 'Featured Image', 'beans_child' ),
		'set_featured_image'    => __( 'Set featured image', 'beans_child' ),
		'remove_featured_image' => __( 'Remove featured image', 'beans_child' ),
		'use_featured_image'    => __( 'Use as featured image', 'beans_child' ),
		'insert_into_item'      => __( 'Insert into item', 'beans_child' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'beans_child' ),
		'items_list'            => __( 'Items list', 'beans_child' ),
		'items_list_navigation' => __( 'Items list navigation', 'beans_child' ),
		'filter_items_list'     => __( 'Filter items list', 'beans_child' ),
		//'archives' => __( 'edwiens arkiv', 'beans-child' ),
		
	);
	$args = array(
		'label'                 => __( 'Edwien', 'beans_child' ),
		'description'           => __( 'Post Type Description', 'beans_child' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true, // For Gutenberg.
		
		"has_archive" => "edwiens-arkiv",
		"menu_icon" => "dashicons-calendar-alt",
		
	);
	register_post_type( 'edwien', $args );

}
add_action( 'init', 'add_custom_post_type_edwien', 0 );


// Register Custom Taxonomy
function add_custom_taxonomy_edwien_kategori() {

	$labels = array(
		'name'                       => _x( 'Edwien Kategori', 'Taxonomy General Name', 'beans_child' ),
		'singular_name'              => _x( 'Edwien Kategori', 'Taxonomy Singular Name', 'beans_child' ),
		'menu_name'                  => __( 'Edwien Kategori', 'beans_child' ),
		'all_items'                  => __( 'All Items', 'beans_child' ),
		'parent_item'                => __( 'Parent Item', 'beans_child' ),
		'parent_item_colon'          => __( 'Parent Item:', 'beans_child' ),
		'new_item_name'              => __( 'New Item Name', 'beans_child' ),
		'add_new_item'               => __( 'Add New Item', 'beans_child' ),
		'edit_item'                  => __( 'Edit Item', 'beans_child' ),
		'update_item'                => __( 'Update Item', 'beans_child' ),
		'view_item'                  => __( 'View Item', 'beans_child' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'beans_child' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'beans_child' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'beans_child' ),
		'popular_items'              => __( 'Popular Items', 'beans_child' ),
		'search_items'               => __( 'Search Items', 'beans_child' ),
		'not_found'                  => __( 'Not Found', 'beans_child' ),
		'no_terms'                   => __( 'No items', 'beans_child' ),
		'items_list'                 => __( 'Items list', 'beans_child' ),
		'items_list_navigation'      => __( 'Items list navigation', 'beans_child' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true, // For Gutenberg
	
	);
	register_taxonomy( 'edwien_kategori', array( 'edwien' ), $args );

}
add_action( 'init', 'add_custom_taxonomy_edwien_kategori', 0 );



// Register Custom Taxonomy
function add_custom_edwien_stikkord() {

	$labels = array(
		'name'                       => _x( 'Edwien Stikkord', 'Taxonomy General Name', 'beans_child' ),
		'singular_name'              => _x( 'Edwien Stikkord', 'Taxonomy Singular Name', 'beans_child' ),
		'menu_name'                  => __( 'Edwien Stikkord', 'beans_child' ),
		'all_items'                  => __( 'All Items', 'beans_child' ),
		'parent_item'                => __( 'Parent Item', 'beans_child' ),
		'parent_item_colon'          => __( 'Parent Item:', 'beans_child' ),
		'new_item_name'              => __( 'New Item Name', 'beans_child' ),
		'add_new_item'               => __( 'Add New Item', 'beans_child' ),
		'edit_item'                  => __( 'Edit Item', 'beans_child' ),
		'update_item'                => __( 'Update Item', 'beans_child' ),
		'view_item'                  => __( 'View Item', 'beans_child' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'beans_child' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'beans_child' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'beans_child' ),
		'popular_items'              => __( 'Popular Items', 'beans_child' ),
		'search_items'               => __( 'Search Items', 'beans_child' ),
		'not_found'                  => __( 'Not Found', 'beans_child' ),
		'no_terms'                   => __( 'No items', 'beans_child' ),
		'items_list'                 => __( 'Items list', 'beans_child' ),
		'items_list_navigation'      => __( 'Items list navigation', 'beans_child' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true, // For Gutenberg
	);
	register_taxonomy( 'edwien_stikkord', array( 'edwien' ), $args );

}
add_action( 'init', 'add_custom_edwien_stikkord', 0 );





// ------  Register Custom Post Type for Nettmagasin --------
function add_custom_post_type_nettmagasin() {

	$labels = array(
		'name'                  => _x( 'Nettmagasin', 'Post Type General Name', 'beans_child' ),
		'singular_name'         => _x( 'Nettmagasin', 'Post Type Singular Name', 'beans_child' ),
		'menu_name'             => __( 'Nettmagasin', 'beans_child' ),
		'name_admin_bar'        => __( 'Nettmagasin', 'beans_child' ),
		'archives'              => __( 'Item Archives', 'beans_child' ),
		'attributes'            => __( 'Item Attributes', 'beans_child' ),
		'parent_item_colon'     => __( 'Parent Item:', 'beans_child' ),
		'all_items'             => __( 'Alle Nettmagasin tekster', 'beans_child' ),
		'add_new_item'          => __( 'Add New Item', 'beans_child' ),
		'add_new'               => __( 'Add New', 'beans_child' ),
		'new_item'              => __( 'New Item', 'beans_child' ),
		'edit_item'             => __( 'Edit Item', 'beans_child' ),
		'update_item'           => __( 'Update Item', 'beans_child' ),
		'view_item'             => __( 'View Item', 'beans_child' ),
		'view_items'            => __( 'View Items', 'beans_child' ),
		'search_items'          => __( 'Search Item', 'beans_child' ),
		'not_found'             => __( 'Not found', 'beans_child' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'beans_child' ),
		'featured_image'        => __( 'Featured Image', 'beans_child' ),
		'set_featured_image'    => __( 'Set featured image', 'beans_child' ),
		'remove_featured_image' => __( 'Remove featured image', 'beans_child' ),
		'use_featured_image'    => __( 'Use as featured image', 'beans_child' ),
		'insert_into_item'      => __( 'Insert into item', 'beans_child' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'beans_child' ),
		'items_list'            => __( 'Items list', 'beans_child' ),
		'items_list_navigation' => __( 'Items list navigation', 'beans_child' ),
		'filter_items_list'     => __( 'Filter items list', 'beans_child' ),
	);
	$args = array(
		'label'                 => __( 'Nettmagasin', 'beans_child' ),
		'description'           => __( 'Post Type Description', 'beans_child' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'author' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true, // For Gutenberg.
		
		"has_archive" => "nettmagasin",
		"menu_icon" => "dashicons-welcome-write-blog",
	);
	register_post_type( 'nettmagasin', $args );

}
add_action( 'init', 'add_custom_post_type_nettmagasin', 0 );


// Register Custom Taxonomy
function add_custom_taxonomy_nettmagasin_kategori() {

	$labels = array(
		'name'                       => _x( 'Nettmagasin Kategori', 'Taxonomy General Name', 'beans_child' ),
		'singular_name'              => _x( 'Nettmagasin Kategori', 'Taxonomy Singular Name', 'beans_child' ),
		'menu_name'                  => __( 'Nettmagasin Kategori', 'beans_child' ),
		'all_items'                  => __( 'All Items', 'beans_child' ),
		'parent_item'                => __( 'Parent Item', 'beans_child' ),
		'parent_item_colon'          => __( 'Parent Item:', 'beans_child' ),
		'new_item_name'              => __( 'New Item Name', 'beans_child' ),
		'add_new_item'               => __( 'Add New Item', 'beans_child' ),
		'edit_item'                  => __( 'Edit Item', 'beans_child' ),
		'update_item'                => __( 'Update Item', 'beans_child' ),
		'view_item'                  => __( 'View Item', 'beans_child' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'beans_child' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'beans_child' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'beans_child' ),
		'popular_items'              => __( 'Popular Items', 'beans_child' ),
		'search_items'               => __( 'Search Items', 'beans_child' ),
		'not_found'                  => __( 'Not Found', 'beans_child' ),
		'no_terms'                   => __( 'No items', 'beans_child' ),
		'items_list'                 => __( 'Items list', 'beans_child' ),
		'items_list_navigation'      => __( 'Items list navigation', 'beans_child' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true, // For Gutenberg
	);
	register_taxonomy( 'nettmagasin_kategori', array( 'nettmagasin' ), $args );

}
add_action( 'init', 'add_custom_taxonomy_nettmagasin_kategori', 0 );


// Register Custom Taxonomy
function add_custom_nettmagasin_stikkord() {

	$labels = array(
		'name'                       => _x( 'Nettmagasin Stikkord', 'Taxonomy General Name', 'beans_child' ),
		'singular_name'              => _x( 'Nettmagasin Stikkord', 'Taxonomy Singular Name', 'beans_child' ),
		'menu_name'                  => __( 'Nettmagasin Stikkord', 'beans_child' ),
		'all_items'                  => __( 'All Items', 'beans_child' ),
		'parent_item'                => __( 'Parent Item', 'beans_child' ),
		'parent_item_colon'          => __( 'Parent Item:', 'beans_child' ),
		'new_item_name'              => __( 'New Item Name', 'beans_child' ),
		'add_new_item'               => __( 'Add New Item', 'beans_child' ),
		'edit_item'                  => __( 'Edit Item', 'beans_child' ),
		'update_item'                => __( 'Update Item', 'beans_child' ),
		'view_item'                  => __( 'View Item', 'beans_child' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'beans_child' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'beans_child' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'beans_child' ),
		'popular_items'              => __( 'Popular Items', 'beans_child' ),
		'search_items'               => __( 'Search Items', 'beans_child' ),
		'not_found'                  => __( 'Not Found', 'beans_child' ),
		'no_terms'                   => __( 'No items', 'beans_child' ),
		'items_list'                 => __( 'Items list', 'beans_child' ),
		'items_list_navigation'      => __( 'Items list navigation', 'beans_child' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true, // For Gutenberg
	);
	register_taxonomy( 'nettmagasin_stikkord', array( 'nettmagasin' ), $args );

}
add_action( 'init', 'add_custom_nettmagasin_stikkord', 0 );



 // Don't short-circuit for 'job' post type.
add_filter( 'beans_pre_post_meta', 'example_pre_post_meta' );

function example_pre_post_meta( $pre ) {

  if ( 'edwien' === get_post_type() ) {
    return false;
 }
 
 if ( 'nettmagasin' === get_post_type() ) {
    return false;
 }

 return $pre;

}

// Add custom taxonomy.
add_action( 'beans_post_meta_prepend_markup', 'add_event_taxonomy' );
function add_event_taxonomy() {

	$edwiencategories = get_the_terms( get_the_id(), 'edwien_kategori' );
	$edwientags = get_the_terms( get_the_id(), 'edwien_stikkord' );
	$nettmagasincategories = get_the_terms( get_the_id(), 'nettmagasin_kategori' );
	$nettmagasintags = get_the_terms( get_the_id(), 'nettmagasin_stikkord' );

	if ( is_array( $edwiencategories ) ) {
		foreach ( $edwiencategories as $edwiencategory ) {

				echo '<li>Kategori: <a href="' . get_term_link( $edwiencategory->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $edwiencategory->name ) . '" ' . '>' . $edwiencategory->name.'</a></li> ';
		}

	}
	
	
	if ( is_array( $edwientags ) ) {
			foreach ( $edwientags as $edwientag ) {
	
					echo '<li>Stikkord: <a href="' . get_term_link( $edwientag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $edwientag->name ) . '" ' . '>' . $edwientag->name.'</a></li> ';	
		}
	}
	
	if ( is_array( $nettmagasincategories ) ) {
			foreach ( $nettmagasincategories as $nettmagasincategory ) {
	
					echo '<li>Kategori: <a href="' . get_term_link( $nettmagasincategory->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $nettmagasincategory->name ) . '" ' . '>' . $nettmagasincategory->name.'</a></li> ';	
		}
	}
	
	if ( is_array( $nettmagasintags ) ) {
			foreach ( $nettmagasintags as $nettmagasintag ) {
	
					echo '<li>Stikkord: <a href="' . get_term_link( $nettmagasintag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $nettmagasintag->name ) . '" ' . '>' . $nettmagasintag->name.'</a></li> ';	
		}
	}
}

