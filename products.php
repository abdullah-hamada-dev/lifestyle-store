<?php

   require_once("includes/common.php");
   require_once("includes/header.php");
   require_once("includes/check-if-added.php") ?>

        
<div class="container"> <!--container start-->
    <div class="jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
            have all in one place.</p>
    </div>
    <div id="fix-products">
        <div class="row text-center"> <!--Cameras Img row Start-->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img src="img/5.jpg" alt="">
                    <div class="caption">
                        <h3>Samsong EOS </h3>
                        <p>Price: 45000 Rs</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(1)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div> 
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/2.jpg" alt="">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price: 35500 Rs</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(2)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div> 
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/3.jpg" alt="">
                    <div class="caption">
                        <h3>Canon DSLR</h3>
                        <p>Price: 54200 Rs</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(3)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/4.jpg" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price: 25999 Rs</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(4)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
    </div><!--Camera img row end-->

    <div class="row text-center"><!--Watches img row start-->
        <div class="col-md-3 col-sm-6">
            <div class=" thumbnail">
                    <img  src="img/9.jpg" alt="">
                    <div class="caption">
                        <h3>Swatch #201</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(5)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div> 
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img src="img/10.jpg" alt="">
                    <div class="caption">
                        <h3>Rado #5489</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(6)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div> 
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/11.jpg" alt="">
                    <div class="caption">
                        <h3>Omega #7895</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(7)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img src="img/12.jpg" alt="">
                    <div class="caption">
                        <h3>Rolex #4587</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(8)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
    </div><!--watches img row end-->

    <div class="row text-center"><!--shirts img row start-->
        <div class="col-md-3 col-sm-6">
            <div class=" thumbnail">
                    <img  src="img/6.jpg" alt="">
                    <div class="caption">
                        <h3>U.S polo</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(9)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
            </div> 
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img style="height: 31.6%;" src="img/8.jpg" alt="">
                    <div class="caption">
                        <h3>Tommy</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(10)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div> 
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/13.jpg" alt="">
                    <div class="caption">
                        <h3>Levis</h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(11)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                    <img  src="img/14.jpg" alt="">
                    <div class="caption">
                        <h3><span> U.S polo</span></h3>
                        <p>Price</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                        // Check whether the item is added to cart or not.
                        if (check_if_added_to_cart(12)) {
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>
    </div><!--shirts img row end-->

</div>
</div><!--container end-->


<?php require_once("includes/footer.php"); ?>
