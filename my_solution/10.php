<?php

$numbers = readline("Enter a comma-separated list of numbers: ");

$numbers = explode(",", $numbers);

$numbers = array_map('intval', $numbers);

sort($numbers);

$num_elements = count($numbers);

if ($num_elements % 2 == 0) {

    $mid_index = $num_elements / 2;
    $median = ($numbers[$mid_index - 1] + $numbers[$mid_index]) / 2;
} else {
 
    $mid_index = ($num_elements - 1) / 2;
    $median = $numbers[$mid_index];
}

echo "The median is: $median\n";

?>