<?php

$string = readline("Enter a string: ");

$string = trim($string);

$words = preg_split('/\s+/', $string);

$num_words = count($words);

echo "The string contains $num_words words.\n";

?>