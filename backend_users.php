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
        @media only screen and (max-width: 992px){
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
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
                            <td data-title="Username:"><?php echo $row->id; ?></td>
                            <td data-title="Email:"><?php echo $row->email; ?></td>
                            <td data-title="Password:"><?php echo $row->password; ?></td>
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
