<?php

$context = $timber::context();

$timber_post = $timber::query_post();

$context['post'] = $timber_post;


$timber::render(
    array(
        'single-' . $timber_post->post_type . '.twig',
        'single-' . $timber_post->ID . '.twig',
        'single-' . $timber_post->slug . '.twig', 'single.twig'
    ),
    $context
);
