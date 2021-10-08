<?php

function hakli_register_styles()
{

    wp_enqueue_style('hakli_bootstrap', get_template_directiory_uri() . "/style.css" . array(), '1.0', 'all');
}

add - action('wp_enqueue_scripts', 'hakli_register_styles()');
