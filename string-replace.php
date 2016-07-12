<?php
//1) Create an indexed array w/ 3 items - “New Jersey”, “New York”, “Pennsylvania”
//2) Write a for loop to iterate through the array
//3)Use str_replace() in order to replace ‘e’ with ‘x’ and re-assign new value, as a replacement for existing item.
//4) Create a string using a <UL> and display string, showing iterated items with ‘e’ replaced with ‘x’  

$states[0] = "New Jersey";
$states[1] = "New York";
$states[2] = "Pennsylvaia";

for ($i=0; $i<=2; $i++){
    echo "<ul>";
    echo "<li>" . str_replace ( "e" , "x" , $states[$i]) . "</li>";
    echo "</ul>";
}
    
    

?>
