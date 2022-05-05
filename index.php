<?php
include_once 'header.php';
?>

<div>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] .  "!</p>";
       
    } else {
        
    }
    ?>

    <h2>Welcome to my home page</h2>
    <p>This is some paragraph text that we have</p>

    <ul>
        <li>List item 1</li>
        <li>List item 2</li>
    </ul>

    <a href="www.google.ca">Link to Google</a>

    <?php
    include_once 'footer.php'
    ?>