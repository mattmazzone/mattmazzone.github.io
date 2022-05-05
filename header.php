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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>
</head>


<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded py-3 py-lg-5 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ps-5 fw-bolder" href="index.php">
                <img src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png" alt="" height="30"
                    class="d-inline-block align-text-top"> Eden
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bolder pe-4" href="#" id="dropdown10"
                            data-bs-toggle="dropdown" aria-expanded="false">Aisles</a>


                        <ul class="dropdown-menu" aria-labelledby="dropdown10">
                            <!-- Add connection to sql products -->

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder pe-4" href="allproducts.php">All Products</a>
                    </li>
                    <li class="nav-item">



                        <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<a class='nav-link pe-4' href='profile.php'>
                        <i class='bi bi-person-circle' height='30' class='d-inline-block align-text-top'></i>
                        <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor'
                            class='bi bi-person-circle' viewBox='0 0 16 16'>
                            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                            <path fill-rule='evenodd'
                                d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                        </svg>
                    </a>";
                    echo "<li class='nav-item'><a class='nav-link fw-bolder pe-4' href='includes/logout.inc.php'>Log Out</a></li>";  
                    } else {
                        echo "<li class='nav-item'><a class='nav-link fw-bolder pe-4' href='login.php'>Log In</a></li>";
                    }
                    ?>



                    </li>
                </ul>
            </div>
        </div>
    </nav>