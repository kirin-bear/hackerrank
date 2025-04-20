<?php

$countNodes = intval(fgets(STDIN));
$values = array_map('intval', explode(' ', fgets(STDIN)));


function tree($values, $node = null) {

    //var_dump('iteration '.implode(', ', $values));

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
    $parent = 0;
    $count = 0;
    $countLeft = 0;
    $countRight = 0;

    foreach($values as $value) {


        if ($value >= $min && $value < $roundAvg) {
            $left[] = $value;
            //getHeight(count($left), $left);

        } elseif ($value <= $max && $value > $roundAvg) {
            $right[] = $value;
            //getHeight(count($right), $right);

        } else {
            $parent = $value;
        }

    }

    //var_dump('node '.$parent);
    //var_dump('left '.implode(', ', $left));
    //var_dump('right '.implode(', ', $right));

    if ($left) {
        $countLeft++;
        $countLeft += tree($left);
    }

    if ($right) {
        $countRight++;
        $countRight += tree($right);
    }

    //var_dump('iteration '.implode(', ', $values));
    //var_dump('left & right max '.implode(', ', [$countLeft, $countRight]));


    return max([$countLeft, $countRight]);
}

function getHeight($countNodes, $values) {

    return tree($values, null);
}


echo getHeight($countNodes, $values);
