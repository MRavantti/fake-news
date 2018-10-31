<?php

declare(strict_types=1);

?>

<!-- Container for all the articles -->

<div class="container">

	<?php foreach ($data['articles'] as $articles): ?>
		<?php foreach ($data['authors'] as $authors): ?>
			<?php if ($authors['id'] === $articles['author']): ?>

				<article style="background-color: rgba(<?= $authors['backgroundColor'] ?>);">

					<div class="articleContainer">

						<h1 class="title"><?= "$articles[title]" ?> </h1>

						<img class="articleImg" src="<?= $articles['image'] ?>">

						<p class="contentText"><?= "$articles[content]" ?> </p>

						<p>
							<span class="publishedSpan">Published: </span>
							<?= date('d M Y', strtotime($articles['publishedDate']))?>
							<span class="likesSpan">Likes: </span>
							<?="$articles[likeCounter]"; ?>
						</p>

					</div>

					<div class="authorContainer">

						<a href="author.php?id=<?=$authors['id'] ?>"><img class="authorImg" src="<?= $authors['image'] ?>"></a>

						<p class="authorInfo">
							<span class="authorSpan">Author: </span>
							<br> <a class="authorLink" href="author.php?id=<?=$authors['id'] ?>"><?= "$authors[name]"; ?></a>
						</p>
					</div>
				<?php endif; ?>

			</article>
		<?php endforeach; ?>
	<?php endforeach; ?>
</div>
