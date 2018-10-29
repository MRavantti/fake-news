<?php

declare(strict_types=1);

/**
 * [sortDates sorts dates with a descending order]
 * @param  array $a [description]
 * @param  array $b [description]
 * @return int      [description]
 */

function sortDates(array $a,array $b): int
{
    return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
}
