<?php
    //including players.php here
    //include('players.php');
    //another way to include a script using require
    //require('players.php');
    // include carried on rest of the code without error
    // requires doesn't carry on code, it doesn't allow
    // both also works without parantheses
    //require 'players.php';
    //echo 'end of php';

    include('config/db_connect.php');

    // write query for all players
    $sql = 'SELECT name, country, role, batting_style, bowling_style FROM players_information ORDER BY created';

    //make query and get results 
    $results = mysqli_query($conn, $sql);

    //fetch the resulting rows as an array
    $players = mysqli_fetch_all($results, MYSQLI_ASSOC);

    //free results from memory
    mysqli_free_result($results);

    //close connection to the database 
    mysqli_close($conn);

   // print_r($players);


?>

<!DOCTYPE html>
<html lang="en">

    <?php
    // here we will include our content.php page
    //include('content.php');
    // including header
    include('templates/header.php'); 
    ?>
    <h4 class="center grey-text">Players</h4>
    <div class="container">
        <div class="row">
            <?php foreach($players as $player){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                       <div class="card-content justify">
                           <h5><?php echo htmlspecialchars($player['name']); ?> </h5>
                           <p>Country: <?php echo htmlspecialchars($player['country']); ?> </p>
                           <p>Role: <?php echo htmlspecialchars($player['role']); ?> </p>
                           <p>Batting Style: <?php echo htmlspecialchars($player['batting_style']); ?> </p>
                           <p>Bowling Style: <?php echo htmlspecialchars($player['bowling_style']); ?> </p>
                       </div> 
                       <div class= "card-action right-align">
                           <a href="#" class="brand-text">more info</a>
                       </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <?php
    // including footer
    include('templates/footer.php'); 
    ?>

</html>