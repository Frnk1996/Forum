<?php
include '../helpers/helper_functions.php';
include '../templates/header.php';
include '../templates/navbar.php';
?>

<!--register form-->
<section class="content">
    <div class="row">
        <div class="register col-md-4 col-md-offset-4">

            <h1 class="text-center">Register</h1>
            <form method="POST" action="register_handler.php">

                <!--name-->
                <div class="form-group">
                    <input class="form-control" placeholder="Name" type="text" name="name" required autofocus>
                </div>

                <!--username-->
                <div class="form-group">
                    <input class="form-control" placeholder="Username" type="text" name="username" required>
                </div>

                <!--email-->
                <div class="form-group">
                    <input class="form-control" placeholder="Email" type="email" name="email" required  minlength="6">
                </div>

                <!--password-->
                <div class="form-group">
                    <input class="form-control" placeholder="Password" type="password" name="password1" required minlength="4">
                </div>

                <!--confirm password-->
                <div class="form-group">
                    <input class="form-control" placeholder="Confirm password" type="password" name="password2" required minlength="4">
                </div>

                <!--register button-->
                <div class="form-group">
                    <input type="submit" class="form-control btn-warning loginbutton" value="Submit">
                </div>

            </form>

        </div>
    </div>
</section>


<?php
include '../templates/footer.php';
?>