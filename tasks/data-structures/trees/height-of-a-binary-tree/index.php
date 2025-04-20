<?php

$countNodes = intval(fgets(STDIN));
$values = array_map('intval', explode(' ', fgets(STDIN)));


function tree($values, $node = null) {

    $max = max($values);
    $min = min($values);

    if ($node) {
        $roundAvg = $node;
    } else {
        $avg = array_sum($values)/count($values);
        $roundAvg = round($avg, 1);
    }

    $left = [];
    $right = [];
    $countLeft = 0;
    $countRight = 0;

    foreach($values as $value) {


        if ($value >= $min && $value < $roundAvg) {
            $left[] = $value;

        } elseif ($value <= $max && $value > $roundAvg) {
            $right[] = $value;

        }

    }

    if ($left) {
        $countLeft++;
        $countLeft += tree($left);
    }

    if ($right) {
        $countRight++;
        $countRight += tree($right);
    }

    return max([$countLeft, $countRight]);
}

function getHeight($countNodes, $values) {

    return tree($values, null);
}


echo getHeight($countNodes, $values);
