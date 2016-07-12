<?php
//5) Add the following to an array: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
//Write a script that will add those numbers, then divide by the number of elements in the array in order to determine the average of those numbers.
$numbers = array ("78", "60", "62", "68", "71", "68", "73", "85", "66", "64", "76", "63", "75", "76", "73", "68", "62", "73", "72", "65", "74", "62", "62", "65", "64", "68", "73", "75", "79", "73");
$sum = array_sum($numbers);
$numOfElements = count($numbers);
echo $sum / $numOfElements;
?>