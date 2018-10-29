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
