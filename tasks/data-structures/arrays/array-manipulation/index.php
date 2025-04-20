<?php

declare(strict_types=1);


/*
 * Complete the 'arrayManipulation' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. 2D_INTEGER_ARRAY queries
 *
 *  HARD
 */

function arrayManipulation($n, $queries) {


    $mainRow = array_fill(1, $n, 0);

    foreach($queries as $query) {

        $start = $query[0];
        $end = $query[1];
        $value = $query[2];

        $row = array_fill($start, $end - $start + 1, $value);
        foreach($row as $key => $value) {
            $mainRow[$key] += $value;
        }
    }


    return max($mainRow);

}

function arrayManipulationOptimize($n, $queries) {
    $diff = array_fill(0, $n + 2, 0);

    foreach ($queries as $query) {
        $start = $query[0];
        $end = $query[1];
        $value = $query[2];

        $diff[$start] += $value;
        if ($end + 1 <= $n) {
            $diff[$end + 1] -= $value;
        }
    }

    $max = 0;
    $current = 0;
    for ($i = 1; $i <= $n; $i++) {
        $current += $diff[$i];
        if ($current > $max) {
            $max = $current;
        }
    }

    return $max;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$queries = array();

for ($i = 0; $i < $m; $i++) {
    $queries_temp = rtrim(fgets(STDIN));

    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = arrayManipulation($n, $queries);

fwrite($fptr, $result . "\n");

fclose($fptr);
