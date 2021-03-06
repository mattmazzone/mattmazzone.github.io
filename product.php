<?php session_start(); ?>

<?php
$xml = simplexml_load_file("files/products.xml");

$aisle_id = $_GET['aisle'];
$product_id = $_GET['product'];


foreach ($xml->aisle as $aisle) {


    if($aisle->id == $_GET['aisle']){
		$id = $aisle->id;
        $name = $aisle->name;



        foreach($aisle->products->product as $product){
            if($product->id == $_GET['product']){
                $product_id = $product->id;
                $product_name = $product->name;
                $product_image = $product->image;
                $product_price = $product->price;
                $product_description = $product->description;
                $product_more_desctiption = $product->more_description;
                
            }
        }

		break;
	}
}



    
    


    
    



?>

<html lang="en">

<head>
    <title>Eden Grocery Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .card {
            border: none;
            overflow: hidden
        }
        
        .main_image {
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #eee;
            height: 400px;
            width: 100%;
            overflow: hidden
        }
        
        .content p {
            font-size: 12px
        }
        
        .right-side {
            position: relative
        }
        
        .margin-bot-2 {
            margin-bottom: 2em;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light rounded py-3 py-lg-5 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand ps-5 fw-bolder" href="index.php">
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
                        <?php
                            $xml = simplexml_load_file("files/products.xml");
                            foreach ($xml->aisle as $aisle_nav) {

                                echo '<li><a class="dropdown-item" href="aisle.php?aisle=' . $aisle_nav->id .'">' . $aisle_nav->name . '</a></li>';
                                
                            }
                            ?>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder pe-4" href="allproducts.php">All Products</a>
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
                        <a class="nav-link pe-4" href="login.php">
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




    <div class="container text-center px-2 my-5 ">
        <h1 class="align-middle ">FRESH PRODUCTS. FAST DELIVERY. COMPETITIVE PRICES.</h1>
        <svg xmlns="http://www.w3.org/2000/svg " width="40 " fill="currentColor " class="bi bi-three-dots " viewBox="0 0 16 16 ">
        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z " />
    </svg>
        <div class="container px-5 ">
            <p>We pride ourselves in provinding the best possible online grocery shopping experience possible. Even though our prices are already hard to beat, we will match any competing prices. With our own dedicated delivery service, we assure that orders
                always arrive on time. </p>
        </div>
    </div>


    <div class="container mt-5 mb-5 ">
        <div class="card ">
            <div class="row g-0 ">
                <div class="col-md-6 border-end ">
                    <div class="d-flex flex-column justify-content-center ">
                        <div class="main_image "> <img src="Images/<?php echo $aisle_id . '/' . $product_image ?> " id="main_product_image " width="350 "> </div>

                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="p-3 right-side ">
                        <div class="d-flex justify-content-between align-items-center ">
                            <?php echo '<h3>' . $product_name . '</h3>' ?>
                            
                        </div>

                        <p><em> <?php echo $product_description ?></em></p>
                        <div class="mt-2 pr-3 content margin-bot-2 ">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    More Description
                  </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-light">
                                            <?php echo $product_more_desctiption ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>$<?php echo $product_price?></h3>
                        <h4 id="ProductCakePrice"></h4>
                        <div class="buttons d-flex flex-row mt-5 gap-3 margin-bot-2 ">
                            <a href=" " class="btn btn-outline-primary ">Buy Now</a>
                            <a href=" " class="btn btn-primary ">Add to Basket</a>
                        </div>
                        <input type="number" step="1" max="10" value="0" min="0" name="quantity" placeholder="Quantity" class="quantity-field border-0 text-center border-0" id="QuantityIndicatorCake">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-light text-center ">
        <!-- Grid container -->
        <div class="container p-4 ">

            <!-- Section: Text -->
            <section class="mb-4 ">
                <p>
                    Eden is an online grocery shopping platform for customers that want the best prices without a compromise in product quality.
                </p>
            </section>
            <!-- Section: Text -->


            <!-- Section: Links -->
            <section class=" ">
                <!--Grid row-->
                <div class="row ">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
                        <h5 class="text-uppercase ">Links</h5>

                        <ul class="list-unstyled mb-0 ">
                            <li>
                                <a href="#! " class="text-dark ">Link 1</a>
                            </li>
                            <li>
                                <a href="#! " class="text-dark ">Link 2</a>
                            </li>
                            <li>
                                <a href="#! " class="text-dark ">Link 3</a>
                            </li>
                            <li>
                                <a href="#! " class="text-dark ">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->




                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2) ">
            SOEN 287 - Online Grocery Store
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script>
        const quantity = document.getElementById("QuantityIndicatorCake");
        const priceField = document.getElementById("ProductCakePrice");
        const totalnav = document.getElementById("total_cake");
        const qst = document.getElementById("qst_value");
        const gst = document.getElementById("gst_value");
        const total = document.getElementById("total_cart");

        let navPrice = localStorage.getItem("navPrice");
        let calculatedPriceCake = localStorage.getItem("calculatedPriceCake");
        let quantitySelectedCake = localStorage.getItem("quantitySelectedCake");
        let cakePrice = 11.99;

        let gst_percent = 0.05;
        let qst_percent = 0.10;

    

        qst.innerText = `$${navPrice * qst_percent}`;
        gst.innerText = `$${navPrice * gst_percent}`;
        
        

        
        
        

        if (calculatedPriceCake != null) {
            priceField.innerText = `Total Price: $${calculatedPriceCake}`;
            
        }

        if (quantitySelectedCake != null) {
            quantity.value = quantitySelectedCake;
        }

        if (navPrice != null) {
            totalnav.innerText = `$${navPrice}`;
            
        }

        quantity.addEventListener("change", function(event) {
            if (event.target.value == 0) {
                priceField.innerText = "";
                

               

            } else {
                let totalPrice = (cakePrice * event.target.value).toFixed(2);
                localStorage.setItem("calculatedPriceCake", totalPrice);
                localStorage.setItem("quantitySelectedCake", event.target.value);
                navPrice = totalPrice;
                localStorage.setItem("navPrice", navPrice);

                qst.innerText = `$${(navPrice * qst_percent).toFixed(2)}`;
                gst.innerText = `$${(navPrice * gst_percent).toFixed(2)}`;
                totalnav.innerText = `$${navPrice}`;

                priceField.innerText = `Total Price: $${totalPrice}`;
            }
        });
    </script>

</body>

</html>