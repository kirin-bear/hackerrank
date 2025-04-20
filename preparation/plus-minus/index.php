<?php

declare(strict_types=1);

/**
 * https://www.hackerrank.com/challenges/one-week-preparation-kit-plus-minus/problem?isFullScreen=true&h_l=interview&playlist_slugs%5B%5D=preparation-kits&playlist_slugs%5B%5D=one-week-preparation-kit&playlist_slugs%5B%5D=one-week-day-one
 */

function plusMinus($arr) {

    $negativeNumbers = 0;
    $positiveNumbers = 0;
    $zeros = 0;
    $countNumbers = count($arr);

    // Write your code here
    foreach($arr as $value) {
        if ($value === 0) {
            $zeros++;
        } elseif ($value < 0) {
            $negativeNumbers++;
        } else {
            $positiveNumbers++;
        }
    }

    echo round($positiveNumbers/$countNumbers, 6).PHP_EOL;
    echo round($negativeNumbers/$countNumbers, 6).PHP_EOL;
    echo round($zeros/$countNumbers, 6);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

