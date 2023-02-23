<?php

$str = readline("Enter a string: ");

$str = preg_replace ("/[^A-Za-z0-9]/", '', strtolower($str));

$reverse = strrev($str);

if ($str === $reverse) {
    echo "$str is a palindrome.\n";
} else {
    echo "$str is not a palindrome.\n";
}

?>

