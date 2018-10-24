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
	 <header>
		 <h1 class="logo"><a href="#">Fake News</a></h1>
	 </header>
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
		 <div class="container">
		 <?php foreach ($data['articles'] as $articles): ?>

		 <article style="background-color: rgba(<?= $articles['backgroundColor'] ?>);">
			 <div class="articleContainer">

				 <h1 class="title"><?= "$articles[title]" ?> </h1>

				 <p class="contentText"><?= "$articles[content]" ?> </p><br><br>

				 <p><span class="publishedSpan">Published: </span> <?= "$articles[publishedDate] "?><span class="likesSpan">Likes: </span> <?="$articles[likeCounter]"; ?></p>
			 </div>
				 <div class="authorContainer">
				<?php foreach ($data['authors'] as $author): ?>


						<?php if ($articles['author'] === $author['id']): ?>

							<a href="#"><img class="img" src="<?= $author['image'] ?>" alt=""></a>

							<p class="authorInfo"><span class="authorSpan">Author: </span><br> <a class="authorLink" href="#"><?= "$author[name]"; ?></a></p>


						</div>
				<?php endif; endforeach; ?>
		 </article>
	 <?php endforeach; ?>
 </div>
    </body>
</html>
