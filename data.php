<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and authors.

$data = [
	'authors' =>
	[
		['id' => 1, 'name' => 'Hodor', 'image' => 'assets/images/hodor.png'],
		['id' => 2, 'name' => 'Bruce Wayne', 'image' => 'assets/images/bruce.png'],
		['id' => 3, 'name' => 'Rick Sanchez', 'image' => 'assets/images/rick.png'],
		['id' => 4, 'name' => 'Bane', 'image' => 'assets/images/bane.png'],
		['id' => 5, 'name' => 'Emmett Lathrop "Doc" Brown', 'image' => 'assets/images/emmet.png'],

	],

	'articles' => [

		[
			'title' => 'Hodor',
			'content' => file_get_contents(__DIR__.'/assets/articles/hodor.txt'),
			'publishedDate' => '10 Jan 2011',
			'likeCounter' => 1000000,
			'author' => 1,
			'backgroundColor' => '188, 186, 184, 1',
		],

		[
			'title' => 'Hodor!',
			'content' => file_get_contents(__DIR__.'/assets/articles/hodoor.txt'),
			'publishedDate' => '26 Jun 2010',
			'likeCounter' => 500000,
			'author' => 1,
			'backgroundColor' => '146, 154, 171, 1',
		],

		[
			'title' => 'My Story',
			'content' => file_get_contents(__DIR__.'/assets/articles/myStory.txt'),
			'publishedDate' => '21 Nov 2010',
			'likeCounter' => 5,
			'author' => 2,
			'backgroundColor' => '188, 186, 184, 1',
		],

		[
			'title' => 'I AM BATMAN!',
			'content' => file_get_contents(__DIR__.'/assets/articles/batman.txt'),
			'publishedDate' => '03 Apr 2012',
			'likeCounter' => 1002,
			'author' => 2,
			'backgroundColor' => '146, 154, 171, 1',
		],

		[
			'title' => 'A price for everything.',
			'content' => file_get_contents(__DIR__.'/assets/articles/aPrice.txt'),
			'publishedDate' => '28 Jun 2017',
			'likeCounter' => 20,
			'author' => 3,
			'backgroundColor' => '188, 186, 184, 1',

		],

		[
			'title' => 'Not today bitch!',
			'content' => file_get_contents(__DIR__.'/assets/articles/notToday.txt'),
			'publishedDate' => '20 Dec 2015',
			'likeCounter' => 30000,
			'author' => 3,
			'backgroundColor' => '146, 154, 171, 1',
		],

		[
			'title' => 'How I became Bane!',
			'content' => file_get_contents(__DIR__.'/assets/articles/origin.txt'),
			'publishedDate' => '22 Jul 2012',
			'likeCounter' => 37,
			'author' => 4,
			'backgroundColor' => '188, 186, 184, 1',
		],

		[
			'title' => 'Never Give Up!',
			'content' => file_get_contents(__DIR__.'/assets/articles/neverGiveup.txt'),
			'publishedDate' => '13 Apr 2012',
			'likeCounter' => 10000,
			'author' => 4,
			'backgroundColor' => '146, 154, 171, 1',
		],

		[
			'title' => 'I only wanted to find out the truth',
			'content' => file_get_contents(__DIR__.'/assets/articles/truth.txt'),
			'publishedDate' => '29 sep 1985',
			'likeCounter' => 100,
			'author' => 5,
			'backgroundColor' => '188, 186, 184, 1',
		],

		[
			'title' => 'The Doc!',
			'content' => file_get_contents(__DIR__.'/assets/articles/doc.txt'),
			'publishedDate' => '28 Feb 1989',
			'likeCounter' => 20000,
			'author' => 5,
			'backgroundColor' => '146, 154, 171, 1',
		],
	]
];
