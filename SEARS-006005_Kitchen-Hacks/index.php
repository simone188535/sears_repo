<?php

define( 'SEARS_PROJECT_PATH', dirname( __FILE__ ) );

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

// pr( $_SERVER ); exit;

$slug = basename( dirname( __FILE__ ) );

$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => array(
    'Cooking Essentials',
    'Cooking Hacks',
  ),
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
  'js' => false, // get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.js' ),
);


make_page( $page_content, $options );
