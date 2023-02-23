<?php

$n = readline("Enter the value of n: ");

$triangular_num = 0;

for ($i = 1; $i <= $n; $i++) {

    $triangular_num += $i;

    echo "The triangular number for $i is $triangular_num.\n";
}

?>