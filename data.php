<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and authors.

$data = [
	'authors' => [
		['id' => 1, 'name' => 'Hodor'],
		['id' => 2, 'name' => 'Bruce Wayne'],
		['id' => 3, 'name' => 'Rick Sanchez'],
		['id' => 4, 'name' => 'Morty Smith'],
		['id' => 5, 'name' => 'Emmett Lathrop "Doc" Brown'],
	],

	$articles = [
		['title' => '', 'content' => '', 'publishedDate' => date('Y'), 'likeCounter' => 5, 'author' => 1],
		['title' => '', 'content' => '', 'publishedDate' => date('Y'), 'likeCounter' => 5, 'author' => 2],
		['title' => '', 'content' => '', 'publishedDate' => date('Y'), 'likeCounter' => 5, 'author' => 3],
		['title' => '', 'content' => '', 'publishedDate' => date('Y'), 'likeCounter' => 5, 'author' => 4],
		['title' => '', 'content' => '', 'publishedDate' => date('Y'), 'likeCounter' => 5, 'author' => 5],
	]
];
