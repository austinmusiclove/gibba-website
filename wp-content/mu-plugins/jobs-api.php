<?php


// Get job by job number
function get_job( WP_REST_Request $request ) {
    $job_number = $request['job_number'];
    $result = array();
    $args = array(
        'post_type' => 'job',
        'nopaging' => true,
        'meta_query' => array(
            array(
                'key' => 'job_number',
                'value' => $job_number,
                'compare' => '>'
            )
        ),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        $query->the_post();
        return array(
            'job_number' => get_field('job_number'),
            'job_title' => get_field('job_title')
        );
    }
    return null;
}

// Get Job api route
add_action('rest_api_init', function () {
    register_rest_route( 'v1', 'jobs', [
        'methods' => 'GET',
        'callback' => 'get_job',
    ]);
});

