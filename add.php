<?php
    // This is GET method which sends data to url (address bar)
    //if(isset($_GET['submit'])){
      //  echo $_GET['name'];
      //  echo $_GET['country'];
      //  echo $_GET['role'];
      //  echo $_GET['batting-style'];
       // echo $_GET['bowling-style'];
    //}
//Now will use POST method because it is more secure
    if(isset($_POST['submit'])){
        //echo htmlspecialchars($_POST['name']);   // htmlspecialchars used for secuirity purpose
        //echo htmlspecialchars($_POST['country']);
        //echo htmlspecialchars($_POST['role']);
        //echo htmlspecialchars($_POST['batting-style']);
        //echo htmlspecialchars($_POST['bowling-style']);

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
    }
?>

<!DOCTYPE html>
<html lang="en">

    <?php
    // including header
    include('templates/header.php'); 
    ?>

    <section class="container grey-text">
        <h4 class="center"> Add a Player</h4>
        <form action="add.php" class="white" method="POST">
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