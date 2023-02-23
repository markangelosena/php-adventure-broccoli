<?php

$strings = ["mitsubishi", "lamborgini", "toyota", "yamaha", "kawasaki","nissan","suzuki"];

$longest_length = 0;

$longest_string = "";

foreach ($strings as $string) {

    $length = strlen($string);

    if ($length > $longest_length) {

        $longest_length = $length;
        $longest_string = $string;
    }
}

echo "The longest string is \"$longest_string\" with a length of $longest_length.\n";

?>
