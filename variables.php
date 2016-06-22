<?php
    /*//Exercise 1
    $firstName = "Stacy";
    $lastName ="Moorhead";
    echo "Full Name: " . $firstName . " " . $lastName . "<br>";
    
    //Exercise 2
    $num1 = "3";
    $num2 = "20";
    echo $num1 + $num2 . "<br>";
    
    //Exercise 3
    $num3 = "1";
    $num4 = "10";
    if ($num3 < $num4){
        echo $num3 . " is less than " . $num4 . "<br>";
    } */
    
    // Exercise 4: A paint brush costs $3. Display the price for paint brushes up to 100 paint brushes in increments of 10, starting with a value of 0 paint brushes. Use a “while” loop.
    /*$i=0;
    $brush=3;
    while ($i<=100){
        echo "$" . $brush * $i . "<br>";
        $i++;
    }*/
    
    //A paint brush costs $3. Display the price for paint brushes up to 100 paint brushes in increments of 10. 
    //Start at 100 and go DOWN to 10. Use a “do while” loop.

    /*$i=100;
    $brush=3;
    $increments=10;
    do {
        echo "$" . $brush * $i . "<br>";
        $i = $i - $increments;
    }
    while ($i>=0);*/
    
    //Using a “for loop”, display a list of numbers using the range 1 through 100. 
    //Format in HTML and be sure to use a <br> after each displayed number.
    
    /*for ($i=1; $i<=100; $i++) {
        echo $i . "<br>";
    }*/
    
    //Create an indexed array with US states assigned as values. 
    //Then using a looping construct, create the associated HTML to generate a SELECT list with options.
    
    /*$states=array("Pennsylvania", "Hawaii", "California", "Maine", "New Jersey");
    echo "<select>";
    foreach ($states as $value) {
        echo '<option value="' . $value . '">' . $value ;
    }
    echo "</select";*/
    
    //Create an associative array containing a few states as keys and values as capitals. 
    //Output a list that states “The capital of X is Y”
    
    /*$capital=array("Pennsylvania"=>"Harrisburg", "New Jersey"=>"Trenton", "Florida"=>"Tallahassee", "California"=>"Sacramento");
    foreach($capital as $x=>$x_value){
        echo "The capital of " . $x . " is " . $x_value . ".";
        echo "<br>";
    }*/
    
    //Create "books" data structure as PHP associative array. 
    //Books will have book title, price, and author name. Populate the array with 6 books. 
    //Iterate through the items array and generate a HTML <table> of title, price and author name in a “books” HTML page.
    $books = array 
    (
        array("title"=>"One Fish, Two Fish, Red Fish, Blue Fish", "author"=>"Dr. Seuss", "price"=>"5.99"),
        array("title"=>"A Wrinkle in Time", "author"=>"Madeleine L'Engle", "price"=>"6.99"),
        array("title"=>"Are You There Vodka, It's Me Chelsea", "author"=>"Chelsea Handler", "price"=>"9.99"),
        array("title"=>"Harry Potter and the Chamber of Secrets", "author"=>"J.K. Rowling", "price"=>"25.59"),
        array("title"=>"The Alchemist", "author"=>"Paulo Coelho", "price"=>"10.19"),
        array("title"=>"Giraffes Can't Dance", "author"=>"Giles Andreae", "price"=>"5.65")
    );
    echo '<table cellpadding="10" cellspacing="0" style="border:1px solid black">
            <tr>
                <td style="border:1px solid black">Title</td>
                <td style="border:1px solid black">Author</td>
                <td style="border:1px solid black">Price</td>
            </tr>';
    for($i=0; $i<$books.arrLength; $i++){
        echo "<tr>";
        foreach($books as $title=>$title_value){
            echo '<td style="border:1px solid black">' . $title_value . "</td>";
        }
        foreach($books as $author=>$author_value){
            echo '<td style="border:1px solid black">' . $author_value . "</td>";
        }
        foreach($books as $price=>$price_value){
            echo '<td style="border:1px solid black">$' . $price_value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

?> 
