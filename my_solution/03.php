<?php

$str = readline("Enter a string: ");

$str = preg_replace ("/[^A-Za-z0-9]/", '', strtolower($str));

$freq = [];

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    if (isset($freq[$char])) {
        $freq[$char]++;
    } else {
        $freq[$char] = 1;
    }
}

foreach ($freq as $char => $count) {
    echo "$char: $count\n";
}

?>
sdasdasdad