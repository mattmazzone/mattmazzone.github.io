<?php
    include_once 'header.php';
?>

<section>
    <h2>Log In Page</h2>
    <form action="includes/login.inc.php" method="post">
        
        <input type="text" name="uid" placeholder="Username/Email">
        <br>
        <input type="password" name="pwd" placeholder="Your Password">
      
        <br>
        <button type="submit" name ="submit">Log in</button>
    </form>
    <?php 
if (isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "wronglogin"){
        echo "<p>Incorrect login information!</p>";
    }
}
?>



</section>


<?php 
include_once 'footer.php'
?>