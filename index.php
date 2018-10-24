<?php

declare(strict_types=1);

require __DIR__. '/data.php';
require __DIR__. '/functions.php';



// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.



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
		<li><a href="#">Hodor</a></li>
		<li><a href="#">Bruce Wayne</a></li>
		<li><a href="#">Rick Sanchez</a></li>
		<li><a href="#">Bane</a></li>
		<li><a href="#">Emmett Lathrop "Doc" Brown</a></li>
	</ul>
</nav>

<body>

	<!-- Container for all the articles -->

	<div class="container">

		<!-- Foreach loop to print out the articles -->

		<?php foreach ($data['articles'] as $articles): ?>

			<article style="background-color: rgba(<?= $articles['backgroundColor'] ?>);">

				<!-- Container for each single article with published date and likecounter-->

				<div class="articleContainer">

					<h1 class="title"><?= "$articles[title]" ?> </h1>

					<p class="contentText"><?= "$articles[content]" ?> </p>

					<p>
						<span class="publishedSpan">Published: </span>
						<?= date('d M Y', $articles['publishedDate'])?>
						<span class="likesSpan">Likes: </span>
						<?="$articles[likeCounter]"; ?>
					</p>

				</div>

				<!-- Container for the author info -->

				<div class="authorContainer">

					<!-- Foreach loop to print out the author names -->

					<?php foreach ($data['authors'] as $author): ?>

						<!-- If statement that check the author id and print the corresponding name and picture -->

						<?php if ($articles['author'] === $author['id']): ?>

							<a href="#"><img class="img" src="<?= $author['image'] ?>" alt=""></a>

							<p class="authorInfo">
								<span class="authorSpan">Author: </span>
								<br> <a class="authorLink" href="#"><?= "$author[name]"; ?></a>
							</p>

						</div>
					<?php endif; endforeach; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</body>
	</html>
