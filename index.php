<?php

declare(strict_types=1);

use Heliostat\StatAnalys\Searcher;

require __DIR__ . '/vendor/autoload.php';

$searcher = new Searcher('doc.txt');

$text = 'spl';

$lines = $searcher->find($text);

echo 'Искомый текст: ' . $text . PHP_EOL;
echo 'Позиции совпадающих текстов:' . PHP_EOL;

foreach ($lines as $number => $line) {
    foreach ($line as $position) {
        echo 'Строка: ' . $number . ' Позиция: ' . $position . PHP_EOL;
    }
}