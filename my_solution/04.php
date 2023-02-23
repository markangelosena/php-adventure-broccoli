<?php

$num = readline("Enter a number: ");

$num_str = (string) $num;

$sum = 0;

for ($i = 0; $i < strlen($num_str); $i++) {
    $digit = $num_str[$i];

    $sum += $digit;
}

echo "The sum of the digits in $num is $sum.\n";

?>