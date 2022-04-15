<?php
session_start();
$users = simplexml_load_file('files/members.xml');
if(isset($_POST['submitSave'])) {

	foreach($users->user as $user){
		if($user->id == $_POST['id']){
			$user->firstname = $_POST['firstname'];
			$user->lastname = $_POST['lastname'];
			$user->address = $_POST['address'];
			break;
		}
	}
	file_put_contents('files/members.xml', $users->asXML());
	header('location: index.php');
	$_SESSION['message'] = 'Member changed successfully';
}

foreach($users->user as $user){
	if($user->id == $_GET['id']){
		$id = $user->id;
		$firstname = $user->firstname;
		$lastname = $user->lastname;
		$address = $user->address;
		break;
	}
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
          <input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly">
        </div>
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        <div class="input-box">
          <span class="details">Last name</span>
          <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
      </div>

      <input class="save" type="submit" value="Save" name="submitSave">
    </form>


  
  </div>
</body>
</html>
