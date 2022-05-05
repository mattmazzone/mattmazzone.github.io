<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testing Login PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <div style="background-color: grey">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>

                <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<li><a href='profile.php'>Profile Page</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>

            </ul>
        </nav>
    </div>