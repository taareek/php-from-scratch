<?php
// taking string variable 
$name= 'Aurora';
//printing the name 
echo $name;
//taking int varaibale 
$age = 23;
// There is another way to define a variable which is below
define('name', 'Alex');   // in this way,we don't need to use $ for accessing this variable 
                          // All we need to just call this variable without $ sign 
                          // N.B: this is constant and we can't override this 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables </title>
</head>
<body>
    <h1><?php echo "Hey there";?> </h1>
    <p>Here the name is printed from the php variable. And the name is: <?php echo $name; ?> </p>
    <p>Age is: <?php echo $age; ?> </p>
    <p>Name using the define variable: <?php echo name; ?> </p>
</body>
</html>