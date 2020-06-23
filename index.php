<?php  require_once('includes/common.php');  

if (isset($_SESSION['email'])) {
    header('location: products.php');
    }
    
     require "includes/header.php";  ?> 

<div id="index-fix">
<div id="banner_image">
    <div class="container"><!--Start Container-->
        <div id="banner_content​">
            <h1>We sell lifestyle.</h1>
            <p>Flat 40% OFF on premium brands</p>
            <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
        </div>
    </div><!--End of container-->
</div>
</div>

<?php require "includes/footer.php"; ?>