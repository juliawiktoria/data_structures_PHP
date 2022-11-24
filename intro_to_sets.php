<?php

function set_average($arr) {
    return round(array_sum(array_unique($arr)) / count(array_unique($arr)), 3);
}


$inp = [161, 182, 161, 154, 176, 170, 167, 171, 170, 174];

$out = 169.375;

echo set_average($inp) . "\n";
