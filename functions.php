<?php
//Re-write the previous code in order to do the following:
//1) Instead of string, return an array
//2) Instead of printing the returned string, construct a string using concatenation and index references of array items
/*echo fix_names(“EDWARD”, “hertZOg”);

function fix_names($firstName, $lastName) {
	$n1 = ucfirst(strtolower($firstName));
	$ns2 = ucfirst(strtolower($lastName));
	return $n1 . “ “ . $ns2;
}*/

/*echo fix_names(“EDWARD”, “hertZOg”);*/

//assign the return value of fix_names("EDWARD", "hertZOg") to a variable, which
//will be an array because that's what the function is returning
$badNames = fix_names("EDWARD", "hertZOg");
//echo the first index of the above variable and echo the second index to give full name
echo $badnames[0] . " " . $badnames[1];
function fix_names($firstName, $lastName) {
	/*$n1 = ucfirst(strtolower($firstName));
	$ns2 = ucfirst(strtolower($lastName));
	return $n1 . "" . $ns2;*/
	
	//1. create an array
	//$names = array($firstname, $lastname);
	$names = array (
	//2. call the first ucfirst code and assign to array's 0 index
    [0] => ucfirst(strtolower($firstName)),
	//3. call the second ucfirst code and assign to the array's 1 index
	[1] => ucfirst(strtolower($lastName))
	);
	//4. return the array
	return $names;
}

?>
