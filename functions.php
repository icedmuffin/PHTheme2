<?php

//ini untuk css
function hakli_style()
{
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'hakli_style');

function hakli_script()
{
    wp_enqueue_script('script-bootstrap', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js');
    wp_enqueue_script('script-bootstrap2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js');
    wp_enqueue_script('script-jquery', 'https://code.jquery.com/jquery-3.5.0.js');
    wp_enqueue_script('script-fontawesome', 'https://use.fontawesome.com/6237a482a1.js');
}
add_action('wp_enqueue_scripts', 'hakli_script');

// ambil gambar post
function catch_that_image()
{
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];

    if (empty($first_img)) { //Defines a default image
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}
