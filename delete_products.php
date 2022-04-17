<?php
	session_start();
	$id = $_GET['id'];
 
	$products = simplexml_load_file('files/products_jer.xml');
 
	//we're are going to create iterator to assign to each user
	$index = 0;
	$i = 0;
 
	foreach($products->product as $product){
		if($product->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}
 
	unset($products->product[$index]);
	file_put_contents('files/products_jer.xml', $products->asXML());
 
	$_SESSION['message'] = 'Product deleted successfully';
	header('location: backend_products.php');
 
?>