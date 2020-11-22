<?php

$context = $timber::context();
$context['page'] = new Timber\Post();
$timber::render('base.twig', $context);
