<?php
declare(strict_types=1);

namespace App\Generator;

trait Breaks
{
    protected function generateBreaks(int $minValue, int $maxValue, int $quantity): array
    {
        $breaksOffset = 0;

        $breaks = range($minValue, $maxValue);
        shuffle($breaks);

        $items = array_slice($breaks, $breaksOffset, $quantity);
        sort($items);

        return $items;
    }
}
