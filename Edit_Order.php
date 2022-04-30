<?php 
session_start(); 
$orders = simplexml_load_file('files/Orders.xml'); 
if(isset($_POST['submitSave'])) { 
 
	foreach($orders->order as $order){ 
		if($order->ordernumber == $_POST['ordernumber']){ 
			$order->firstname = $_POST['firstname']; 
			$order->lastname = $_POST['lastname'];
            $order->address = $_POST['address'];
            $order->date = $_POST['date'];
			$order->time = $_POST['time'];
            $order->notes = $_POST['notes']; 
			break; 
		} 
	} 
	file_put_contents('files/Orders.xml', $orders->asXML()); 
	header('location: Order_List.php'); 
	$_SESSION['message'] = 'Order changed successfully'; 
} 
 
foreach($orders->order as $order){ 
	if($order->ordernumber == $_GET['ordernumber']){ 
		$ordernumber = $order->ordernumber; 
		$firstname = $order->firstname; 
		$lastname = $order->lastname; 
		$address = $order->address; 
        $date = $order->date;
        $time = $order->time;
        $notes = $order->notes;
		break; 
	} 
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
        
        .disabled-input {
            color: #212529;
            background-color: #e9ecef; 
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
        <h1>EDIT ORDER</h1>
    </div>
    <div class="container">
        <div class="col">
            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body center">
                            <form method="POST">
                                <label for="ordernumber">Order Number</label><br>
                                <input type="text" id="ordernumber" name="ordernumber" value="<?php echo $ordernumber; ?>" class="label-border margin-bottom-em regular-boxes disabled-input" readonly="readonly"><br>
                                <label for="firstname">First Name</label><br>
                                <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="lastname">Last Name</label><br>
                                <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="address">Address</label><br>
                                <input type="text" id="address" name="address" value="<?php echo $address; ?>" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="date">Date</label><br>
                                <input type="text" id="date" name="date" value="<?php echo $date; ?>" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="time">Pickup Time</label><br>
                                <input type="text" id= "time" name="time" value="<?php echo $time; ?>" class="label-border margin-bottom-em regular-boxes"><br>
                                <label for="notes">Notes</label><br>
                                <textarea id="notes" name="notes" type="text" class="label-border margin-bottom-em text-area" rows="5"><?php echo $notes; ?></textarea><br>
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