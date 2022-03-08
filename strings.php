<?php
    $string_1= 'My email is: ';
    $string_2= 'abc@gmail.com';
    $string_3 ='Here I will apply concatintion to join strings together...';

    echo $string_3;
    echo "<br>";
    // concatenate 
    echo $string_1.$string_2;
    //We can contenate a string with a variable as well
    $name = "Morgan";
    echo "<br>";
    echo 'Hey, My name is ' . $name;
    echo "<br>";
    // If we use "" then we can directly print variable within "" without concatination
    echo "I am $name, from England";
    echo "<br>";
    // Escaping string (quote)
    echo "The batsman hits a \"six\"";
    echo "<br>";
    //Another of writing quotes
    echo 'The batsman hits a "six" ';
    echo "<br>";
    //Getting individual characters from a string 
    echo $name[2];
    echo "<br>";
    // Here I will be using some string functions
    // strlen(): it's used for getting the length of a string 
    echo strlen($name);
    echo "<br>";
    // strtoupper(): it's used for converting strings to uppercase 
    echo strtoupper($name);
    echo "<br>";
    // strtolower(): it's used for converting a string to lowercase
    echo strtolower($name);
    echo "<br>";
    // str_replace(): it's used for replacing certain character from a string 
    // it takes 3 three arguments 
    echo str_replace('M', 'T', $name);    // 1st argument indicated which char will be replaced
                                         // 2nd argument statnds for with which char it will be replaced 
                                         // and the 3rd argument indicated for which string we are replacing 
    echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings </title>
</head>
<body>
    
</body>
</html>