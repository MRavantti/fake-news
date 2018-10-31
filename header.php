<?php

declare(strict_types=1);

require __DIR__. '/data.php';

require __DIR__. '/functions.php';

// Sort the articles in descending manor
uSort($data['articles'], 'sortDates');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/stylesheet/main.css">
	<title>Fake News</title>
</head>

<!-- Logo -->

<header>
	<h1 class="logo"><a href="index.php">Fake News</a></h1>
</header>

<!-- Navigation -->

<nav class="nav">
	<ul>
		<li><a href="author.php?id=1">Hodor</a></li>
		<li><a href="author.php?id=2">Bruce Wayne</a></li>
		<li><a href="author.php?id=3">Rick Sanchez</a></li>
		<li><a href="author.php?id=4">Bane</a></li>
		<li><a href="author.php?id=5">Emmett Lathrop "Doc" Brown</a></li>
	</ul>
</nav>

<body>
