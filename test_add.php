<?php
session_start();
if(isset($_POST['submitSave'])) {
	$users = simplexml_load_file('files/members.xml');
	$user = $users->addChild('user');
	$user->addChild('id', $_POST['id']);
	$user->addChild('firstname', $_POST['firstname']);
	$user->addChild('lastname', $_POST['lastname']);
  $user->addChild('address', $_POST['address']);


	file_put_contents('files/members.xml', $users->asXML());
	header('location: index.php');
  $dom = new DomDocument();
  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;
  $dom->loadXML($users->asXML());
  $dom->save('files/members.xml');
  $_SESSION['message'] = 'Member added successfully';
 
}  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/686ef8f824.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href = "editUser.css" rel="stylesheet" type = "text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
  
  <div class="container" id="info">
    <div class="title">Customer Details</div>

    <form method="POST">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Email</span>
          <input type="text" name="id">
        </div>
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" name="firstname">
        </div>
        <div class="input-box">
          <span class="details">Last name</span>
          <input type="text" name="lastname">
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" name="address">
        </div>
      </div>

      <input class="save" type="submit" value="Save" name="submitSave">
    </form>


  
  </div>
</body>
</html>