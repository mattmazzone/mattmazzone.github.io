<?php
include_once 'header.php';
?>

<div>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] .  "!</p>";
       
    } else {
        
    }
    ?>

<div class="container text-center px-2 my-5">
        <h1 class="align-middle">FRESH PRODUCTS. FAST DELIVERY. COMPETITIVE PRICES.</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
            </svg>
        <div class="container px-5">
            <p>We pride ourselves in provinding the best possible online grocery shopping experience possible. Even though our prices are already hard to beat, we will match any competing prices. With our own dedicated delivery service, we assure that orders
                always arrive on time. </p>
        </div>
    </div>

    <div class="container">
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img1.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img2.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img3.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img4.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img5.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img6.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img7.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img8.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img9.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img10.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img11.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img12.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img13.webp"></img>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <img width="100%" src="Images/frontpage/img14.webp"></img>
                </div>
            </div>
        </div>
    </div>

    <!-- Masonry scripts-->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

    <?php
    include_once 'footer.php'
    ?>