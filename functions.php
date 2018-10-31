<?php

declare(strict_types=1);

/**
 * [sortDates sorts by dates with a descending order]
 * @param  array $a
 * @param  array $b
 * @return int
 */
function sortDates(array $a,array $b): int
{
    return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
}

/**
 * [filterAuthor sorts out the articles to show the chosen author]
 * @param  array $data
 * @return bool
 */
function filterAuthor(array $data): bool
{
		$URLAuthorId = $_GET['id'];
		return $data['id'] == $URLAuthorId;
}
