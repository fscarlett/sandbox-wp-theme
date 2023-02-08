<?php 

function sandbox_post_types() {

//register Partner post type
  $partner_labels = array(
    'name'                => 'Partners',
    'singular_name'       => 'Partner',
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


  //register Testimonial post type
  $testimonial_labels = array(
    'name'                => 'Testimonials',
    'singular_name'       => 'Testimonial',
    'menu_name'           => 'Testimonials',
    'name_admin_bar'      => 'Testimonial',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Testimonial',
    'new_item'            => 'New Testimonial',
    'edit_item'           => 'Edit Testimonial',
    'view_item'           => 'View Testimonial',
    'all_items'           => 'All Testimonials',
    'search_items'        => 'Search For Testimonials',
    'parent_item_colon'   => 'Parent Testimonials:',
    'not_found'           => 'No Testimonial found.',
    'not_found_in_trash'  => 'No Testimonial found in trash.',
    );
  $testimonial_args = array(
    'labels'              => $testimonial_labels,
    'description'         => 'testimonial',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'testimonial' ),
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'hierarchical'        => false,
    'taxonomies'          => array( 'category' ),
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-testimonial',
    );

  register_post_type( 'sandbox_testimonial', $testimonial_args );

  //register Team post type
  $team_labels = array(
    'name'                => 'Team Members',
    'singular_name'       => 'Team Member',
    'menu_name'           => 'Team Members',
    'name_admin_bar'      => 'Team Member',
    'add_new'             => 'Add New',
    'add_new_item'        => 'Add New Team Member',
    'new_item'            => 'New Team Member',
    'edit_item'           => 'Edit Team Member',
    'view_item'           => 'View Team Member',
    'all_items'           => 'All Team Members',
    'search_items'        => 'Search For Team Members',
    'parent_item_colon'   => 'Parent Team Members:',
    'not_found'           => 'No Team Member found.',
    'not_found_in_trash'  => 'No Team Member found in trash.',
    );
  $team_args = array(
    'labels'              => $team_labels,
    'description'         => 'team',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'team' ),
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'exclude_from_search' => false,
    'has_archive'         => false,
    'hierarchical'        => false,
    'taxonomies'          => array( 'category' ),
    'menu_position'       => null,
    'supports'            => array( 'title', 'editor', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-groups',
    );

  register_post_type( 'sandbox_team', $team_args );



}

add_action( 'init', 'sandbox_post_types', 10 );
