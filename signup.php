<?php    require_once("includes/common.php");

        // Check If The User Is Logged In Or No
        if (isset($_SESSION['email'])) {
            header('location: products.php');
            }
         require_once("includes/header.php"); ?>

        <div class="container content">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1> SIGN UP</h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="Name" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" >
                            <?php echo $_GET['name_error']; ?>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <?php echo $_GET['email_error']; ?>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="Password" required = "true" pattern=".{8,}">
                            <?php echo $_GET['password_error']; ?>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="contact" placeholder="Contact" required = "true" maxlength="10" size="10" >
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="City" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="Address" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <?php echo $_GET['success']; ?>
                    </form>
                </div>
            </div>
        </div>

<?php require_once("includes/footer.php"); ?>
