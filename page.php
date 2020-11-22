<?php

$context = $timber::context();

$post = new Timber\Post();

$context['page'] = $post;


$timber::render(array(
    'page-' . $post->post_name . '.twig',
    'page.twig'
), $context);
