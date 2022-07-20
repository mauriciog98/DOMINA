<?php

const ARRAY_10 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

function addElements(int $first_place, int $second_place)
{
    if ($first_place < 0 || $second_place < 0) {
        return -1;
    }

    if ($first_place > $second_place) {
        return 0;
    }

    $filtered_elements = array_filter(
        ARRAY_10,
        function ($element) use ($first_place, $second_place) {
            return $element >= $first_place && $element <= $second_place;
        }
    );

    return array_sum($filtered_elements);

}

echo addElements(30, 60) . PHP_EOL;

echo addElements(10, -8) . PHP_EOL;

echo addElements(110, 120) . PHP_EOL;

echo addElements(140, 120) . PHP_EOL;

echo addElements(90, 120) . PHP_EOL;