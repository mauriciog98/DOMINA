<?php

function score(array $numbers)
{
    $partial_score = 0;
    foreach ($numbers as $number) {

        if ($number == 8) {

            $partial_score += 5;

        } elseif ($number % 2 == 0) {

            $partial_score += 1;

        } elseif ($number % 2 == 1) {

            $partial_score += 3;

        }

    }

    return $partial_score;
}

echo score([1, 2, 3, 4, 5]) . PHP_EOL;

echo score([15, 25, 35]) . PHP_EOL;

echo score([8, 8]) . PHP_EOL;