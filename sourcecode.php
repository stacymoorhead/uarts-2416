<?php
//Write a PHP script to display source code of a webpage (e.g. "http://www.yahoo.com/"). Tip: you will need to use file()
$webpage = file("http://www.stacylauren.com");
foreach ($webpage as $line_num => $line){
    echo $line;
}
?>