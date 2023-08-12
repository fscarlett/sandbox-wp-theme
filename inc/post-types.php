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
    'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt', 'page-attributes' ),
    'menu_icon'           => 'dashicons-groups',
    );

  register_post_type( 'sandbox_team', $team_args );

//register Citation post type
$citation_labels = array(
  'name'                => 'Citations',
  'singular_name'       => 'Citation',
  'menu_name'           => 'Citations',
  'name_admin_bar'      => 'Citation',
  'add_new'             => 'Add New',
  'add_new_item'        => 'Add New Citation',
  'new_item'            => 'New Citation',
  'edit_item'           => 'Edit Citation',
  'view_item'           => 'View Citation',
  'all_items'           => 'All Citations',
  'search_items'        => 'Search For Citations',
  'parent_item_colon'   => 'Parent Citations:',
  'not_found'           => 'No Citation found.',
  'not_found_in_trash'  => 'No Citation found in trash.',
  );
$citation_args = array(
  'labels'              => $citation_labels,
  'description'         => 'citation',
  'public'              => true,
  'publicly_queryable'  => true,
  'show_ui'             => true,
  'query_var'           => true,
  'rewrite'             => array( 'slug' => 'citation' ),
  'capability_type'     => 'post',
  'map_meta_cap'        => true,
  'exclude_from_search' => false,
  'has_archive'         => false,
  'hierarchical'        => false,
  'taxonomies'          => array( '' ),
  'menu_position'       => null,
  'supports'            => array( 'title' ),
  'menu_icon'           => 'dashicons-book',
  );

register_post_type( 'sandbox_citation', $citation_args );

//register Whitepaper post type
$whitepaper_labels = array(
  'name'                => 'White Papers',
  'singular_name'       => 'White Paper',
  'menu_name'           => 'White Papers',
  'name_admin_bar'      => 'White Paper',
  'add_new'             => 'Add New',
  'add_new_item'        => 'Add New White Paper',
  'new_item'            => 'New White Paper',
  'edit_item'           => 'Edit White Paper',
  'view_item'           => 'View White Paper',
  'all_items'           => 'All White Papers',
  'search_items'        => 'Search For White Papers',
  'parent_item_colon'   => 'Parent White Papers:',
  'not_found'           => 'No White Paper found.',
  'not_found_in_trash'  => 'No White Paper found in trash.',
  );
$whitepaper_args = array(
  'labels'              => $whitepaper_labels,
  'description'         => 'whitepaper',
  'public'              => true,
  'publicly_queryable'  => true,
  'show_ui'             => true,
  'query_var'           => true,
  'rewrite'             => array( 'slug' => 'whitepaper' ),
  'capability_type'     => 'post',
  'map_meta_cap'        => true,
  'exclude_from_search' => false,
  'has_archive'         => false,
  'hierarchical'        => false,
  'taxonomies'          => array( '' ),
  'menu_position'       => null,
  'supports'            => array( 'title' ),
  'menu_icon'           => 'dashicons-text-page',
  );

register_post_type( 'sandbox_whitepaper', $whitepaper_args );

}

add_action( 'init', 'sandbox_post_types', 10 );
