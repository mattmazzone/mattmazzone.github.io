<?php
include_once 'header.php';

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';


$productArray = allProductsPage($conn);



?>

<div class="container text-center px-2 my-5">
    <h1 class="align-middle">All Products</h1>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
        <path
            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
    </svg>
    <div class="container px-5">
        <p>
            All the products can be found in this section.
        </p>
    </div>
</div>

<div class="container" style="margin-bottom: 3em;">

    <div class="row">
        <?php


    foreach($productArray as $product){

    echo '<div class="column">' . 
            '<div class="card">' . 
                '<img class="card-img-top" src="Images/'. $product[2] . '/' . $product[6]. '" alt="Card image" style="width:100%">' .
                '<div class="card-body">' . '
                    <h4 class="card-title">' .  $product[1] . '</h4>' . 
                    '<p class="text-left">$' .   $product[3] . '</p>' . 
                    '<a  href="product.php?aisle=' .  $product[3] . '&product=' .  $product[0] .'" class="btn btn-primary">See Product</a>' .
                '</div>' . 
             '</div>' . 
         '</div>';

    }


?>

        <?php
    include_once 'footer.php'
    ?>