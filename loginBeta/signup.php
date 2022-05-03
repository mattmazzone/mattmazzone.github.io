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
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <br>
        <button type="submit" name ="submit">Sign up</button>
    </form>
</section>







<?php 
include_once 'footer.php'
?>