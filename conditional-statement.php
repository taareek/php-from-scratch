<?php
    // conditional statements
    $price = 20;

    // if condition 
    if($price < 15){
        echo 'Condition matched.';
    }elseif($price < 25){
        echo 'Elseif condition matched.';
    }else{
        echo'Condition did not match.';
    }
    echo "<br>";
    echo "<br>";
    // taking  product data 
    $products = [
        ['name' => 'cricket bat', 'price' => 4500],
        ['name' => 'cricket ball', 'price' => 450],
        ['name' => 'basket ball', 'price' => 1500],
        ['name' => 'soccer ball', 'price' => 1700],
        ['name' => 'badminton bat', 'price' => 2200],
        ['name' => 'adidas jersy', 'price' => 3500],
        ['name' => 'nike jersy', 'price' => 3000]
    ];
    echo 'Product list with their prices: ';
    echo "<br>";
    foreach($products as $product){
        echo $product['name'].': '. $product['price']. '<br>';
    }
    echo "<br>";
    echo "<br>";
    echo "Now from products data, we will apply conditions...";
    echo "<br>";
    echo "<br>";

    // here we are checking if the price of products less than 2000
    echo 'Products which price is less than 2000 are given below: ';
    echo "<br>";
    foreach($products as $product){
        if($product['price'] < 2000){
            echo $product['name']. '<br>';
        }
    }
    echo "<br>";

    //here we will be checking the price of the product is less than 2000 and greater than 1000
    // using and condition 
    echo 'Products which price is less than 2000 and greater than 1000 are given below: ';
    echo "<br>";
    foreach($products as $product){
        if($product['price'] < 2000 && $product['price'] > 1000){
            echo $product['name']. '<br>';
        }
    }
    echo "<br>";

    //here we will be checking the price of the product is less than 500 or greater than 2000
    // using and condition 
    echo 'Products which price is less than 500 or greater than 2000 are given below: ';
    echo "<br>";
    foreach($products as $product){
        if($product['price'] < 500 || $product['price'] > 2000){
            echo $product['name']. '<br>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement </title>
</head>
<body>
  <h1 style="text-align: center;">Now we will see the conditions through the HTML</h1> 
  <br>
  <h3>Here, we will see those products which price greater than 1500 </h3>
  <?php foreach($products as $product){ ?>
    <?php if($product['price'] >1500){ ?>
        <li> <?php echo $product['name'].': '. $product['price'];?> </li>
    <?php } ?>
  <?php }?>
</body>
</html>