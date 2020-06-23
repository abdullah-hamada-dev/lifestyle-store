<?php require "includes/common.php"; 

    if (!isset($_SESSION['email'])){
            header("location: index.php");
     }

    require "includes/header.php"; 

    //initilize user id from session 
    $user_id = $_SESSION['user_id'];
     $sum = 0;
    $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));

  
    
?> 


<div class="container content">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <table class="table table-striped">
        <?php  if (mysqli_num_rows($result) == 0) {
             echo '<div class="jumbotron"><h2>You Haven\'t Added Anything Yet</h2>';
             echo '<h4>Click <a class="remove_item_link" href="products.php">Here </a>To visit products page </h4></div>';

         } else { ?>
             
            <thead>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name <th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while( $row = mysqli_fetch_array($result)){
                     $sum+= $row["Price"];
                     $id .= $row["id"] . ", ";
                  
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                    }
                    $id = rtrim($id, ", ");
                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                    ?>
            </tbody>
            <?php } ?>
        </table>
        </div>
    </div>
</div>
  
<?php require "includes/footer.php"; ?>
