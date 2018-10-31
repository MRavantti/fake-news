<?php

declare(strict_types=1);

$data = [
	'authors' =>
	[
		['id' => 1, 'name' => 'Hodor', 'image' => 'assets/images/hodor.png', 'backgroundColor' => '146, 154, 171, 1'],
		['id' => 2, 'name' => 'Bruce Wayne', 'image' => 'assets/images/bruce.png', 'backgroundColor' => '150, 150, 150, 1'],
		['id' => 3, 'name' => 'Rick Sanchez', 'image' => 'assets/images/rick.png', 'backgroundColor' => '16, 235, 197, 1'],
		['id' => 4, 'name' => 'Bane', 'image' => 'assets/images/bane.png', 'backgroundColor' => '188, 186, 184, 1'],
		['id' => 5, 'name' => 'Emmett Lathrop "Doc" Brown', 'image' => 'assets/images/emmet.png', 'backgroundColor' => '141, 168, 204'],
	],

	'articles' =>
	[

		[
			'title' => 'Hodor',
			'image' => 'assets/images/articlehodor.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/hodor.txt'),
			'publishedDate' => '10-01-2011',
			'likeCounter' => 1000000,
			'author' => 1,
		],

		[
			'title' => 'Hodor!',
			'image' => 'assets/images/articlehodor2.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/hodoor.txt'),
			'publishedDate' => '26-6-2010',
			'likeCounter' => 500000,
			'author' => 1,
		],

		[
			'title' => 'My Story',
			'image' => 'assets/images/articleMy.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/myStory.txt'),
			'publishedDate' => '21-10-2010',
			'likeCounter' => 5,
			'author' => 2,
		],

		[
			'title' => 'I AM BATMAN!',
			'image' => 'assets/images/articleIAm.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/batman.txt'),
			'publishedDate' => '03-4-2012',
			'likeCounter' => 1002,
			'author' => 2,
		],

		[
			'title' => 'A price for everything.',
			'image' => 'assets/images/articleAPrice.jpg',
			'content' => file_get_contents(__DIR__.'/assets/articles/aPrice.txt'),
			'publishedDate' => '28-6-2017',
			'likeCounter' => 20,
			'author' => 3,
		],

		[
			'title' => 'Not today bitch!',
			'image' => 'assets/images/articleNot.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/notToday.txt'),
			'publishedDate' => '20-12-2015',
			'likeCounter' => 30000,
			'author' => 3,
		],

		[
			'title' => 'How I became Bane!',
			'image' => 'assets/images/articlebane.jpg',
			'content' => file_get_contents(__DIR__.'/assets/articles/origin.txt'),
			'publishedDate' => '22-7-2012',
			'likeCounter' => 37,
			'author' => 4,
		],

		[
			'title' => 'Never Give Up!',
			'image' => 'assets/images/articlebane2.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/neverGiveup.txt'),
			'publishedDate' => '13-4-2012',
			'likeCounter' => 10000,
			'author' => 4,
		],

		[
			'title' => 'I only wanted to find out the truth',
			'image' => 'assets/images/articledoc.jpg',
			'content' => file_get_contents(__DIR__.'/assets/articles/truth.txt'),
			'publishedDate' => '29-9-1985',
			'likeCounter' => 100,
			'author' => 5,
		],

		[
			'title' => 'The Doc!',
			'image' => 'assets/images/articledoc2.jpeg',
			'content' => file_get_contents(__DIR__.'/assets/articles/doc.txt'),
			'publishedDate' => '28-2-1989',
			'likeCounter' => 20000,
			'author' => 5,
		],
	]
];
