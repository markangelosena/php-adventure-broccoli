<?php

$string = readline("Enter a string: ");

$vowels = array("a", "e", "i", "o", "u");

$string_without_vowels = str_ireplace($vowels, "", $string);

echo "The string without vowels is: $string_without_vowels\n";

?>