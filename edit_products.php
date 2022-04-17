<?php
session_start();
$products = simplexml_load_file('files/products.xml');
if(isset($_POST['submitSave'])) {

	foreach($products->product as $product){
		if($product->id == $_POST['id']){
			$product->picture = $_POST['picture'];
			$product->productname = $_POST['productname'];
			$product->quantity = $_POST['quantity'];
			break;
		}
	}
	file_put_contents('files/products.xml', $products->asXML());
	header('location: index.php');
	$_SESSION['message'] = 'Product changed successfully';
}

foreach($products->product as $product){
	if($product->id == $_GET['id']){
		$id = $product->id;
		$picture = $product->picture;
		$productname = $product->productname;
		$quantity = $product->quantity;
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
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .container {
    max-width: 700px;
    width: 100%;
    background: rgba(128,128,128,0.2);
    padding: 25px 30px;
    border-radius: 5px;
    margin-top:100px;
    
}

.container .title {
    font-size: 25px;
    font-weight: 500;
    position:relative;
}

.container #title2 {
    font-size: 25px;
    font-weight: 500;
    position: relative;
    margin-top: 30px;
}

.container .title::before {
    content: '';
    position: absolute; 
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background: rgb(25, 135, 84);

}

.container form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}

form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px)
}

.user-details .input-box .details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}
.user-details .input-box input {
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box valid {
    border-color: rgb(25, 135, 84);
}

form .button input{
    height: 100%;
    width: 25%;
    color:white;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: rgb(25, 135, 84);
    margin-top: 50px;

}


.save{
    display:flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}



.save {
    background: green;
    padding: 5px 20px 5px 20px;
    transition: 0.3s;
    color: white;
    font-family: sans-serif;
    font-weight: 550;
    border-radius: 5px;
    margin:auto;
}

.cancel:hover {
    background: rgba(0,0,0,0.7);
}

.save:hover {
    background: rgba(0,0,0,0.7);
}


@media (max-width: 584px){
    .container {
        margin: 50px 25px 50px 25px;
        max-width: 100%;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: 100%;
    }

    .container form .user-details {
        max-height: 200px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width:0;
    }
}
      </style>
</head>
<body>
  
  <div class="container" id="info">
    <div class="title">Product Details</div>

    <form method="POST">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Product ID</span>
          <input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly">
        </div>
        <div class="input-box">
            <span class="details">New Picture</span>
            <input type="file" class="form-control" id="customFile" name="picture" value="<?php echo $picture; ?>">
            <span class="details">Current Picture</span>
            <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" value="<?php echo $picture; ?>" disabled>
        </div>
        <div class="input-box">
          <span class="details">Product Name</span>
          <input type="text" name="productname" value="<?php echo $productname; ?>">
        </div>
        <div class="input-box">
          <span class="details">Quantity</span>
          <input type="text" name="quantity" value="<?php echo $quantity; ?>">
        </div>
      </div>

      <input class="save" type="submit" value="Save" name="submitSave">
      
    </form>


  
  </div>
</body>
</html>
