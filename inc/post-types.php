<?php 

function sandbox_post_types() {

//register Partner post type
  $partner_labels = array(
    'name'                => 'Partners',
    'singular_name'       => 'partner',
    'menu_name'           => 'Partners',
    'name_admin_bar'      => 'Partner',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Partner',
    'new_item'            => 'New Partner',
    'edit_item'           => 'Edit Partner',
    'view_item'           => 'View Partner',
    'all_items'           => 'All Partners',
    'search_items'        => 'Search For Partners',
    'parent_item_colon'   => 'Parent Partners:',
    'not_found'           => 'No Partner found.',
    'not_found_in_trash'  => 'No Partner found in trash.',
    );
  $partner_args = array(
    'labels'              => $partner_labels,
    'description'         => 'partners',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'partners' ),
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'hierarchical'        => false,
    'taxonomies'          => array( 'category' ),
    'menu_position'       => null,
    'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-beer',
    );

  register_post_type( 'sandbox_partner', $partner_args );



}

add_action( 'init', 'sandbox_post_types', 10 );
