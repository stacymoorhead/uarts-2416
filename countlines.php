<?php
//3) Write a PHP script to count lines in a file. Tip: you will need file() and count()
$fileName = file("http://www.stacylauren.com");
/*foreach ($fileName as $line_num => $line){
    echo count($line_num);
}*/

echo count($fileName);


?>