<?php
session_start();
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
    <title>Page11</title>
    <meta name="description" content="This is the file that contains the markup for Page11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        .margin-right-em {
            margin-right: 1em;
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
        <h1>ORDERS</h1>
    </div>

    <div class="container">
        <div class="col">
            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="Add_Order.php" class="btn btn-sm btn-outline-secondary" role="button">Add Order</a>
                                    </div>
                                </div>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="align-top">
                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                                    <input type="checkbox" class="custom-control-input" id="all-items">
                                                    <label class="custom-control-label" for="all-items"></label>
                                                </div>
                                            </th>
                                            <th>Order Number</th>
                                            <th class="max-width">First Name</th>
                                            <th class="max-width">Last Name</th>
                                            <th class="sortable">Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $file = simplexml_load_file('files/Orders.xml');

                                        foreach($file->order as $row) {
                                            ?>
                                            <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                    <input type="checkbox" class="custom-control-input" id="item-2">
                                                    <label class="custom-control-label" for="item-2"></label>
                                                </div>
                                            </td>
                                                <td class="text-nowrap align-middle"><?php echo $row->ordernumber; ?></td>
                                                <td class="text-nowrap align-middle"><?php echo $row->firstname; ?></td>
                                                <td class="text-nowrap align-middle"><?php echo $row->lastname; ?></td>
                                                <td class="text-nowrap align-middle"><?php echo $row->date; ?></td>
                                                <td class="text-center align-middle">
                                                <a href="Edit_Order.php?ordernumber=<?php echo $row->ordernumber;?>" class="btn btn-sm btn-outline-secondary margin-right-em" role="button">Edit</a>
                                                <a href="Delete_Order.php?ordernumber=<?php echo $row->ordernumber;?>" class="btn btn-sm btn-outline-secondary" type="button" data-toggle="modal" data-target="#user-form-modal">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <ul class="pagination mt-3 mb-0">
                                        <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                                        <li class="active page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item"><a href="#" class="page-link">›</a></li>
                                        <li class="page-item"><a href="#" class="page-link">»</a></li>
                                    </ul>
                                </div>
                            </div>
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