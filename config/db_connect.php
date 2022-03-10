<?php
    // connecting to MySQL Databse
    $conn = mysqli_connect('localhost', 'unknown','bangladesh#71','cricketers_db');

    //check connection
    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    }
?>