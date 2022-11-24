<?php

function isArmstrongNumber($number) {
    $str_num = strval($number);
    $num_len = strlen($str_num);
    $pow_arr = array_fill(0, $num_len, $num_len);
    $digits = array_map("intval",  str_split($str_num));
    $sum = array_sum(array_map('pow', $digits, $pow_arr));
    return $sum == $number ? true : false;
}


$input = 153;

echo isArmstrongNumber($input) . "\n\n";