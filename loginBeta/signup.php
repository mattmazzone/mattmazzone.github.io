<?php
    include_once 'header.php';
?>

<section>
    <h2>Signup Page</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Your Name">
        <br>
        <input type="text" name="email" placeholder="Your Email">
        <br>
        <input type="text" name="uid" placeholder="Your Username">
        <br>
        <input type="password" name="pwd" placeholder="Your Password">
        <br>
        <input type="password" name="pwdRepeat" placeholder="Repeat Password">
        <br>
        <button type="submit" name ="submit">Sign up</button>
    </form>

    <?php 
if (isset($_GET["error"])){
    if ($_GET["error"] == "emptyinput"){
        echo "<p>Fill in all fields!</p>";
    }
    else if ($_GET["error"] == "invaliduid"){
        echo "<p>Choose a proper username!</p>";
    }
    else if ($_GET["error"] == "invalidemail"){
        echo "<p>Choose a proper email!</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch"){
        echo "<p>Passwords doesn't match!</p>";
    }
    else if ($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong, try again!</p>";
    }
    else if ($_GET["error"] == "usernametaken"){
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"] == "none"){
        echo "<p>You have signed up!</p>";
    }
}
?>
</section>









<?php 
include_once 'footer.php'
?>