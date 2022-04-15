<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>UserList</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        #add:hover {
            background-color: rgba(0,0,0,0.7);
        }
        .scrollable {
            height: 750px;
            overflow: scroll;
            overflow-x: hidden;
            margin-top: 10px;
        }
        ::-webkit-scrollbar {
            width: 15px;
        }
        ::-webkit-scrollbar {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb{
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background: rgba(0,0,0,0.5);
        }
        @media only screen and (max-width: 800px){
            #no-more-tables tbody, #no-more-tables tr, #no-more-tables td{
                display: block;
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-dables td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #ccc;
            }
            #no-more-tables td:before{
               content: attr(data-title);
               margin-right:5px;
               left: 6px;
               font-weight: bold;
            }
            #no-more-tables tr{
                border-bottom: 1px solid #ccc;
            }
            .scrollable {
                overflow: hidden;
                height: 100%;
            }
        }

        @media only screen and (max-width: 989px){
            button {
                margin-top:5px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded py-3 py-lg-5 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ps-5 fw-bolder" href="index.html">
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
                            <li><a class="dropdown-item" href="aisles/baking_aisle/baking_aisle.html">Baking Aisle</a></li>
                            <li><a class="dropdown-item" href="aisles/fruits_aisle/Fruit_Aisle.html">Fruit Aisle</a></li>
                            <li><a class="dropdown-item" href="aisles/beverages_aisle/beverage_aisle.html">Beverage Aisle</a></li>
                            <li><a class="dropdown-item" href="aisles/cleaning_aisle/cleaningAisle.html">Cleaning Product Aisle</a></li>
                            <li><a class="dropdown-item" href="aisles/veggies_aisle/veggies_aisle.html">Veggies Aisle</a></li>
                            <li><a class="dropdown-item" href="aisles/snacks_aisle/snack_aisle.html">Snack Aisle</a></li>
                            <li><a class="dropdown-item" href="#">Dairy Aisle</a></li>
                            <li><a class="dropdown-item" href="#">Boxed Dinner and Pasta Aisle</a></li>
                            <li><a class="dropdown-item" href="#">Personal Care Products Aisle</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder pe-4" href="#">All Products</a>
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
                        <a class="nav-link pe-4" href="login.html">
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
<div class="container">
    <h1 class="page-header text-center">Users</h1>
    <a href="test_add.php" class="btn btn-success" id="add"><span class="glyphicon glyphicon-plus"></span> Add User</a>
    <div class="row">
        
        <div class="scrollable table-responsive" id="no-more-tables">
            <?php 
                
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-success text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $file = simplexml_load_file('files/members.xml');
 
                    foreach($file->user as $row){
                        ?>
                        <tr>
                            <td data-title="Email:"><?php echo $row->id; ?></td>
                            <td data-title="First Name:"><?php echo $row->firstname; ?></td>
                            <td data-title="Last Name:"><?php echo $row->lastname; ?></td>
                            <td data-title="Address:"><?php echo $row->address; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row->id;?>"><button class="btn btn-sm btn-outline-secondary" type="button">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row->id;?>" onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-outline-secondary" type="button" >Delete</button></a>
                            </td>
                        </tr>
                        <?php
                    }
 
                    ?>
                </tbody>
            </table>
            <!-- <a href="#addnew" class="btn btn-primary" data-toggle="modal" style="background-color:green;color:white;"><span class="glyphicon glyphicon-plus"></span> New</a>--> 
    </div>
</div>
<?php //include('add_modal.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>