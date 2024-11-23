<?php

namespace Heliostat\StatAnalys;

class Searcher
{
    private $file;

    public function __construct($path)
    {
        if (!file_exists($path) || !is_readable($path)) {
            throw new FileException("Файл не найден или не может быть прочитан");
        }

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        if ($ext !== 'txt') {
            throw new TypeException("Тип файла не txt");
        }

        $this->file = file($path);

        echo "Файл  был инициализирован" . PHP_EOL;
    }

    public function find($text)
    {
        $positions = [];
        $n = mb_strlen($text);

        foreach($this->file as $number_line => $line) {
            $offset = 0;

            while(strpos($line, $text, $offset) !== false) {
                $pos = strpos($line, $text, $offset);
                $offset = $pos + $n + 1;
                $positions[$number_line + 1][] = $pos;
            }
        }

        return $positions;
    }
}
