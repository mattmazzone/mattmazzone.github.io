<?php
$errors = array();
if(isset($_POST['login'])){
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['id']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $xml = file_get_contents('files/members.xml');

    //error array
    if(strpos($xml, "<id>$username</id>") !== false) {
        $errors[] = 'Username already exists';
    }
    if($username == ''){
        $errors[] = 'Username is blank';
    }
    if($email == ''){
        $errors[] = 'Email is blank';
    }
    if($password == '' || $c_password ==''){
        $errors[] = 'Passwords are blank';
    }
    if($password != $c_password){
        $errors[] = 'Passwords do not match';
    }
    if($my_checkbox = (empty($_POST['mycheckbox']))){
        $errors[] = 'You must accept terms and conditions';
    }
    if(count($errors) == 0){
        $users = simplexml_load_file('files/members.xml');
        $user = $users->addChild('user');
        $user->addChild('id', $_POST['id']);
        $user->addChild('email', $_POST['email']);
        $user->addChild('password', $_POST['password']);
        $user->addChild('firstname');
        $user->addChild('lastname');
        $user->addChild('address');
      
        file_put_contents('files/members.xml', $users->asXML());
        session_start();
        header('location: login.php');
     
        $dom = new DomDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($users->asXML());
        $dom->save('files/members.xml');
        $_SESSION['message'] = 'Member added successfully';
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* Float four columns side by side */
        
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }
        /* Remove extra left and right margins, due to padding */
        
        .row {
            margin: 0 -5px;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        /* Responsive columns */
        
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        .small-middle-container{
            margin: auto;
            width: 50%;
        }
    </style>


</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <script src="js/main.js"></script>





    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded py-3 py-lg-5 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ps-5 fw-bolder" href="index.php">
                <img src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png" alt="" height="30" class="d-inline-block align-text-top"> Eden
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bolder pe-4" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Aisles</a>

                        
                        <ul class="dropdown-menu" aria-labelledby="dropdown10">
                        <?php
                            $xml = simplexml_load_file("files/products.xml");
                            foreach ($xml->aisle as $aisle_nav) {

                                echo '<li><a class="dropdown-item" href="aisle.php?aisle=' . $aisle_nav->id .'">' . $aisle_nav->name . '</a></li>';
                                
                            }
                            ?>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder pe-4" href="allproducts.php">All Products</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                    <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">Items in Cart </span></span>
                             </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink" style="width: 250pt;">

                                    <li>
                                        <div class="container-fluid" style="width: 100%">
                                            <span class="badge rounded-pill bg-primary">3</span>
                                            <p class="text-end">Total: $2000</p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="card mb-3 border-0" style="max-width: 340px;">
                                            <div class="row g-0">
                                                <div class="col-md-4" style="fill: #6394f8;">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text text-end">Subtitle</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card mb-3 border-0" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text text-end">Subtitle</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card mb-3 border-0" style="max-width: 540px;">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text text-end">Subtitle</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col-md-12 text-center">
                                            <button type="button " class="btn btn-primary btn-block" style="width: 90%; background-color: #6394f8">Checkout</button>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link pe-4" href="login.php">
                            <i class="bi bi-person-circle" height="30" class="d-inline-block align-text-top"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle " viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                       </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid p-5 my-5 text-center">
        <h1>REGISTER</h1>
    </div>

    <div class="text-center">
        <p>Already have an account?
            <a href="login.php" id="">Login.</a>
        </p>
    </div>

    <div class="container-sm p-5 my-5 border bg-light middle-container">

        <!--  <h2 class="font-weight-bold">Personal Information</h2> -->

        <div class="row text-left small-middle-container">
            <!-- <div class="col "> -->
                <div>
                <form method ="post" action="" id="myForm" >
                    <?php
                    if(count($errors)>0){
                        echo '<div class="alert alert-danger" role="alert">';
                        foreach($errors as $e){
                            echo '<li>' . $e . '</li>';
                        }
                        echo '</div>';
                    }
                    ?>
                <label for="Username">*Username:</label><br>    
                <input type="text" class="form-control"id="username" name="id"/> 
                <label for="email">*Email:</label><br>    
                <input type="text" class="form-control" name="email"/>
                <label for="password">*Password:</label><br>    
                <input type="password" class="form-control" name="password"/>
                <label for="c_password">*Confirm Password:</label><br>    
                <input type="password" class="form-control" name="c_password"/>
                <br> <input type="checkbox" name="mycheckbox" value="1">
                <label for="tandc"> *By clicking, you agree to Terms and Conditions and Privacy Policy. </label>
                <br><br>
                <h6>*Required fields</h6> 
                
                <br> 
                <input type="submit" value="Create Account" name="login" class="btn btn-primary">
                <br>  <br> 
                <input type="button" onclick="myFunction()" value="Reset" class="btn btn-secondary">
                </form>

                </div>

                <script>
                function myFunction() {
                document.getElementById("myForm").reset();
                }
                </script>    

        </div>

        
    </div>

    <!--   space before footer -->
    <br>

    <!-- Footer -->
    <footer class="bg-light text-center ">
        <!-- Grid container -->
        <div class="container p-4">

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Eden is an online grocery shopping platform for customers that want the best prices without a compromise in product quality.
                </p>
            </section>
            <!-- Section: Text -->


            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-dark">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="text-dark">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->




                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            SOEN 287 - Online Grocery Store
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>