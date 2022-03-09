<?php
    // In this script we will be implementing functions 
   // echo 'Here we go...';
    // defining a function 
    function sayHello(){
        echo 'Hello there!';
    }
    // calling the functions 
    sayHello();
    echo "<br>";

    // taking parameter in a function 

    function sayHola($name = 'Alex'){
        echo "Hola, $name !";
    }
    // calling this function for a  specific person by giving his/her name 
    sayHola('Aurora');
    echo "<br>";

    // another function 
    function formatProduct($product){
        echo "{$product['name']} costs {$product['price']} taka to buy <br>";

    }

    // calling this function 
    formatProduct(['name'=>'Frutika Grapes', 'price'=> 35]);
    echo "<br>";

    // formatProduct function with another version \
    function formatProductV2($product){
        return "{$product['name']} costs {$product['price']} taka to buy <br>";
    }
    // getting retuned output from the function in a variable
    $formatted = formatProductV2(['name'=>'Frutika Grapes', 'price'=> 35]);
    echo $formatted;
    echo "<br>";
    // function with multiple parameters 
    function grettings($name, $country){
        echo "Hola, $name ! eres de  $country?";
    }
    // calling this grettings function including two parameters 
    grettings('Ofu', 'Bangladesh');
?>