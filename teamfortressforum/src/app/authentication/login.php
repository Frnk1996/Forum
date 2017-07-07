<?php
include '../helpers/helper_functions.php';
include '../templates/header.php';
include '../templates/navbar.php';
?>


<!--login form-->
<section class="content">
    <div class="row">
        <div class="login col-md-4 col-md-offset-4">
            <h1 class="text-center">Login</h1>

            <form method="POST" action="login_handler.php">
                <!--username-->
                <div class="form-group">
                    <input class="form-control" placeholder="Username" type="text" name="username" required autofocus>
                </div>

                <!--password-->
                <div class="form-group">
                    <input class="form-control" placeholder="Password" type="password" name="password" required>
                </div>

                <!--login button-->
                <div class="form-group">
                    <input type="submit" class="form-control btn-warning loginbutton" value="log in">
                </div>


            </form>
        </div>
    </div>
</section>


<?php
include '../templates/footer.php';
?>