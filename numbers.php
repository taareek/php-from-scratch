<?php
    // basic operators: +, -, *, /, **
    //Let's take an int variable 
    $radius = 23;
    $pi = 3.1416;
    echo 'Radius is: '.$radius;
    echo "<br>";
    echo 'Value of pi is: '. $pi;
    echo "<br>";
    $area = $pi * $radius**2;
    echo 'Then the area is: '. $area;
    echo "<br>";
    //Increment and decrement
    // increment 
    $radius++;
    echo 'After increment, the radius is: '.$radius;
    echo "<br>";
    // decrement 
    $radius--;
    echo 'After decriment, the radius is: '.$radius;
    echo "<br>";
    // floor(): it will convert a float to it's nearest int 
    echo 'After applying floor() function to pi, the value is: '. floor($pi);
    echo "<br>";
    // ceil(): it will convert a float to it's next int 
    echo 'After applying ceil() the value of pie is: ' . ceil($pi);
    echo "<br>";
    // built in pi 
    echo 'The value of built-in pie: '. pi();
?>