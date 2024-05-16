<?php

$strings = ["Hello", "World", "PHP", "Programming"];

    function vCount($string){

        $vowels = ["a", "e", "i", "o", "u"];
        $count = 0;

        for($i=0; $i<strlen($string); $i++) {
            if (in_array($string[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    foreach($strings as $string){

        $vowelCount = vCount($string);
        $reverse    = strrev($string);

        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reverse <br>";

    }

    ?>
