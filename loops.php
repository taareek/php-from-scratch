<?php
    //loops 
    $fruits = ['Apple', 'Orange', 'Grapes'];
    // for loop
    for($i = 0; $i < count($fruits); $i++){
        echo $fruits[$i] . '<br>';
    }

    // for each loops 
    // Now we will print this array's elements using for each loops
    print("\nUsing for each loops: <br>");

    foreach($fruits as $fruit){
        echo $fruit . '<br>';
    }
    // Using loops for multi-dimensional array
    print("We have some movies data the with name and main actor, now we will see the movie name along with main actor:\n");
    echo '<br>';
    echo '<br>';
    $movies= [
        ['movie'=>'Shutter Island', 'actor'=>'Linardo Dicapriyo'],
        ['movie'=>'Forrest Gump', 'actor'=>'Tom Hanks'],
        ['movie'=>'A beautiful Mind', 'actor'=>'Russel Crowe'],
        ['movie'=>'The man who knew infinity', 'actor'=>'Dev Patel'],
        ['movie'=>'The imitation game', 'actor'=>'Bendict Cumberbatch'],
        ['movie'=>'Fight Club', 'actor'=>'Brat Pit'],
        ['movie'=>'The pursuit of happiness', 'actor'=>'Will Smith']

    ];
    foreach($movies as $movie){
        echo $movie['movie'].': ' .$movie['actor'];
        echo '<br>';
        echo '<br>';
    }

    //While loops
    // Now we will print this movie name with actor using while loops 
    print('We will see the movie name using while loops: ');
    echo '<br>';
    $i = 0;
    while($i < count($movies)){
        echo $movies[$i]['movie'];
        echo '<br>';
        $i++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops </title>
</head>
<body>
  <h1 style="text-align:center;">From HTML </h1>
  <br>
  <br>
  <h2>Movies</h2>
  <ul>
      <?php foreach($movies as $movie){ ?>
        <h4><?php echo $movie['movie']; ?> </h4>
        <p><?php echo $movie['actor']; ?> </p>
        <?php } ?>
  </ul>

</body>
</html>
