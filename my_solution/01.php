<?php

echo "Enter a character:";

$char = trim(fgets(STDIN));

if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
    echo "$char is a vowel.";
}else{
    echo "$char is a consonant."; 
}

?>