<?php 

session_start(); 
if(isset($_POST['submitSave'])) { 
	$orders = simplexml_load_file('files/Orders.xml'); 
	$order = $orders->addChild('order'); 
	$order->addChild('ordernumber', $_POST['ordernumber']); 
    $order->addChild('firstname', $_POST['firstname']); 
	$order->addChild('lastname', $_POST['lastname']); 
    $order->addChild('address', $_POST['address']); 
  $order->addChild('date', $_POST['date']); 
  $order->addChild('time', $_POST['time']); 
  $order->addChild('notes', $_POST['notes']); 
   
 
 
	file_put_contents('files/Orders.xml', $orders->asXML()); 
	header('location: Order_List.php'); 
  $dom = new DomDocument(); 
  $dom->preserveWhiteSpace = false; 
  $dom->formatOutput = true; 
  $dom->loadXML($users->asXML()); 
  $dom->save('files/Orders.xml'); 
  $_SESSION['message'] = 'Member added successfully'; 
  
} 

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        .margin-bottom-em {
            margin-bottom: 1em;
        }

        .label-border {
            border: 1px solid #ced4da;
        }

        .center {
            text-align: center;
        }

        .tall-txt-box {
            height: 200px;
        }

        .text-area {
            width: 100%;
            max-width: 500px;
        }

        .regular-boxes {
            width : 100%;
            max-width: 300px;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Eden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actions
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Order_List.php">Order List</a></li>
                            <li><a class="dropdown-item" href="backend_users.php">User List</a></li>
                            <li><a class="dropdown-item" href="backend_products.php">Product List</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="index.php">Home</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container py-4">

    <div class="container-fluid p-5 my-5 text-center" style="border-bottom: groove 1px">
        <h1>ADD ORDER</h1>
    </div>
    <div class="container">
        <div class="col">
            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body center">
                            <form method="POST">
                                <label for="ordernumber">Order Number</label><br>
                                <input type="text" name="ordernumber" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="firstname">First Name</label><br>
                                <input type="text" name="firstname" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="lastname">Last Name</label><br>
                                <input type="text" name="lastname" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="address">Address</label><br>
                                <input type="text" name="address" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="date">Date</label><br>
                                <input type="text" name="date" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="time">Pickup Time</label><br>
                                <input type="text" name="time"class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="notes">Notes</label><br>
                                <textarea name="notes" type="text" class="label-border margin-bottom-em text-area" rows="5"></textarea><br>
                                <input class="btn btn-md btn-primary" type="submit" name="submitSave"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>