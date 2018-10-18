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
        <link rel="stylesheet" href="assets/stylesheet/.css">
        <title></title>
    </head>
	 <header>

	 </header>
    <body>
		 <nav>
		 	<ul>
		 		<li><a href="#">Horodr</a></li>
		 		<li><a href="#">Bruce Wayne</a></li>
		 		<li><a href="#">Rick Sanchez</a></li>
		 		<li><a href="#">Bane</a></li>
		 		<li><a href="#">Emmett Lathrop "Doc" Brown</a></li>
		 	</ul>
		 </nav>
		 <article>
			 <?php foreach ($data['articles'] as $articles): ?>
				 <?= "Title: $articles[title] <br><br> $articles[content] <br><br>Published: $articles[publishedDate] Likes: $articles[likeCounter]"; ?>
				<?php foreach ($data['authors'] as $author): ?>
					<?php if ($articles['author'] === $author['id']): ?>
						<?= "Author: $author[name] <br><br>"; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			 <?php endforeach; ?>
		 </article>
    </body>
</html>
