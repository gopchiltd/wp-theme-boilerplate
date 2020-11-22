<?php

// pagination config
global $paged;
if (!isset($paged) || !$paged) {
    $paged = 1;
}

$context = $timber::context();

// get only base posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'paged' => $paged
);

$context['posts'] = new Timber\PostQuery($args);

// get page post
$context['page'] = new Timber\Post();

// // set page cover image
// if (isset($context['page']->cover_image) && strlen($context['page']->cover_image)) {
//   $context['page']->cover_image = new Timber\Image($context['page']->cover_image);
// }

$timber::render('blog.twig', $context);
