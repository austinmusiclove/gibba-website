<?php


function register_post_types() {
    // Job
    register_post_type('job', array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title'),
        'labels' => array(
          'name' => 'Job',
          'add_new_item' => 'Add New Job',
          'edit_item' => 'Edit Job',
          'all_items' => 'All Jobs',
          'singular_name' => 'Job'
        ),
        'menu_icon' => 'dashicons-hammer'
    ));

    // Report
    register_post_type('report', array(
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title'),
        'labels' => array(
          'name' => 'Report',
          'add_new_item' => 'Add New Report',
          'edit_item' => 'Edit Report',
          'all_items' => 'All Reports',
          'singular_name' => 'Report'
        ),
        'menu_icon' => 'dashicons-clipboard'
    ));
}

add_action('init', 'register_post_types');
