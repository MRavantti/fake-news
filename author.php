<?php
declare(strict_types=1);

require __DIR__. '/header.php';

// Filter out the chosen author
$data['authors'] = array_filter($data['authors'], 'filterAuthor');

require __DIR__. '/articles.php';

require __DIR__. '/footer.php';

?>
