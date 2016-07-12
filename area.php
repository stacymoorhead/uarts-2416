<?php
//Write a function called calculateArea that accepts two arguments, a length and width. 
//Call that function within a sentence, using contacatenation, that looks like this:
//The area of a rectangle ...

function calculateArea($l, $w) {
    return $l * $w;
}

$length = "6";
$width = "8";

echo "The area of the rectangle is " . calculateArea($length, $width) . ".";

?>