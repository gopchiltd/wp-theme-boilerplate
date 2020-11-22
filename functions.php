<?php
require_once(__DIR__ . '/helpers/custom_post_types.php');
require_once(__DIR__ . '/helpers/duplicate_post.php');
require_once(__DIR__ . '/helpers/support_tags.php');


$timber = new Timber\Timber();

// set global menus
add_filter('timber/context', 'add_to_context');

function add_to_context($context)
{
    $menu_args = array(
        'depth' => 2,
    );

    $context['nav'] = new Timber\Menu('Main', $menu_args);

    $context['footernav'] = new Timber\Menu('Footer', $menu_args);

    return $context;
}

// ------ Disable Gutenberg ------

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
