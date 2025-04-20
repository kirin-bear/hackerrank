<?php

/**
 * @link https://www.hackerrank.com/challenges/balanced-forest/problem?isFullScreen=true
 *
 * Complete the 'balancedForest' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY c
 *  2. 2D_INTEGER_ARRAY edges
 */

function balancedForest($c, $edges) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $c_temp = rtrim(fgets(STDIN));

    $c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

    $edges = array();

    for ($i = 0; $i < ($n - 1); $i++) {
        $edges_temp = rtrim(fgets(STDIN));

        $edges[] = array_map('intval', preg_split('/ /', $edges_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = balancedForest($c, $edges);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
