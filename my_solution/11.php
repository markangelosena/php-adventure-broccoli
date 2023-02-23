<?php

$numbers = readline("Enter a comma-separated list of numbers: ");

$numbers = explode(",", $numbers);

$numbers = array_map('intval', $numbers);

$sum = array_sum($numbers);

$num_elements = count($numbers);
$average = $sum / $num_elements;

echo "The average is: $average\n";

?>