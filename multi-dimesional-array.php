<?php
    $blogs= [
        ['a', 'b', 'c', 'd',12],
        ['aa', 'bb', 'cc', 'dd', 22],
        ['xx', 'vv', 'nn', 'mm', 40]
    ];
// print the array 
print_r($blogs);
echo "<br>";
// print the 1st array of blogs
echo 'First Array: ';
print_r($blogs[0]);
echo "<br>";
// accessing a certain elements of an array
echo 'Accessing second element of second array: ';
print_r($blogs[1][1]);
echo "<br>";
// Now we will declare array using keys and values 
$blog2 = [
    ['Shutter Islan'=> 'Linardo Dicapriyo', 'Forrest Gump'=>'Tom Hanks', 'A beautiful Mind'=>'Russel Crowe' ],
    ['Take me Home'=> 'John Denver', 'All of me'=> 'John Legend', 'One more light'=> 'Linkin Park']
];
echo 'Now the associative multi-dimensional array: ';
echo "<br>";
print_r($blog2);
echo "<br>";
// Now access a certain key value from that associative array
echo 'The singer of '.'Take me home is '.$blog2[1]['Take me Home'];
echo "<br>";
//We can pop an element of array by calling array_pop() function
// We will store the popped value into a variable and see that
$popped= array_pop($blogs);
#print('jn');
print('The popped elements from blogs array: ');
echo "<br>";
print_r($popped);
echo "<br>";

?>