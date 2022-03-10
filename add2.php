<?php
    include('config/db_connect.php');
    if(isset($_POST['submit'])){
        //Validation
        //name
        if(empty($_POST['name'])){
            echo 'Name is required <br>'; 
        }else{
            echo htmlspecialchars($_POST['name']);
        }
        //country
        if(empty($_POST['country'])){
            echo 'Country is required <br>'; 
        }else{
            echo htmlspecialchars($_POST['country']);
        }
        //role
        if(empty($_POST['role'])){
            echo 'Role is required <br>'; 
        }else{
            echo htmlspecialchars($_POST['role']);
        }
        //batting style
        if(empty($_POST['batting-style'])){
            echo 'Batting Style is required <br>'; 
        }else{
            echo htmlspecialchars($_POST['batting-style']);
        }
        // bowling style
        if(empty($_POST['bowling-style'])){
            echo 'Bowling style is required <br>'; 
        }else{
            echo htmlspecialchars($_POST['bowling-style']);
        }
        
        // inserting data into database
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $role = mysqli_real_escape_string($conn, $_POST['role']);
        $batting_style = mysqli_real_escape_string($conn, $_POST['batting-style']);
        $bowling_style = mysqli_real_escape_string($conn, $_POST['bowling-style']);

        // create sql
        $sql = "INSERT INTO players_information(name, country, role, batting_style, bowling_style) VALUES('$name', '$country', 
        '$role', '$batting_style', '$bowling_style')";

        // save to db 
        if(mysqli_query($conn, $sql)){
            //success
            //redirecting home page
            header('Location: index.php');
        }else{
            //error
            echo 'query error:' . mysqli_error($conn);
        }

    } //end POST check here
?>

<!DOCTYPE html>
<html lang="en">

    <?php
    // including header
    include('templates/header.php'); 
    ?>

    <section class="container grey-text">
        <h4 class="center"> Add a Player</h4>
        <form action="add2.php" class="white" method="POST">
            <label>Enter Player's Name: </label>
            <input type="text" name="name">
            <label>Enter Player's Country: </label>
            <input type="text" name="country">
            <label>Enter Player's Role: </label>
            <input type="text" name="role">
            <label>Enter Player's Batting Style: </label>
            <input type="text" name="batting-style">
            <label>Enter Player's Bowling Style: </label>
            <input type="text" name="bowling-style">
            <div class="center">
                <input type="submit" name="submit" value="submit" class= "btn brand z-depth-0">

            </div>
        </form>
    </section>
    <?php
    // including footer
    include('templates/footer.php'); 
    ?>

</html>