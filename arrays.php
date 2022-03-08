<?php
    //indexed arrays
    $people= ['Alex', 'Morgan', 'Jimmy', 'Clark'];
    echo 'Accessing the second people from the array: '.$people[1];
    echo "<br>";
    // Another way to declare a array
    $country = array('Canada', 'America', 'Norway', 'England');
    echo 'Accessing 4th elemetns from country array: '.$country[3];
    echo "<br>";
    //Taking array of integer
    $ages = [30, 33, 35, 40];
    //print array
    echo 'Integer array of ages: ';
    print_r($ages);
    echo "<br>";
    // Adding a new element to array 
    $ages[] = 53;
    echo 'After inserting an element to our array: ';
    print_r($ages);
    echo "<br>";
    //There is a push methods by which we can add an elements to an array 
    // array_push(): it takes two arguments, 1st one is arr and 2nd one is the value we want to insert 
    array_push($ages, 69);
    echo 'After inserting an element using array_push() to our array: ';
    print_r($ages);
    echo "<br>";
    // count() function is used for counting the elements of an array 
    echo 'Total number of elements in age array is: '. count($ages);
    echo "<br>";
    // array_merge(): by this function we can merge two arrays and it takes two arguments(basically two arrays)
    $merged_arr = array_merge($people, $country);
    echo 'We have applied array_merge() function to merge two arrays and the merged array is: ';
    print_r($merged_arr);
    echo "<br>";
    // Now we will work upon associative arrays (key & value)
    $cricketer = ['Ricky Ponting' => 'Batsman', 'Adam Gilchrist'=> 'Wicket Keeper', 'James Anderson'=>'Fast Bowler'];
    print_r($cricketer);
    echo "<br>";
    // getting a specific key value from our cricketer associative array 
    echo 'The value of Adam Gilcrist key is: '.$cricketer['Adam Gilchrist'];
    echo "<br>";
    // Writing associative arrays into different ways 
    $footballer = array('Leo Messi'=>'PSG', 'Chistiano Ronaldo'=>'Manchester United', 'Cheisa'=>'Juventus');
    //printing the footballer array
    echo 'Printing the footballer array: ';
    print_r($footballer);
    echo "<br>";
    //Adding a new elemnts to associative arrays 
    $footballer['Thiago Silva']= 'Chelsea';
    echo 'After adding an elements to our footballer array, it looks like: ';
    print_r($footballer);
    echo "<br>";


?>