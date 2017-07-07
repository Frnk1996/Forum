<?php
include '../helpers/helper_functions.php';
include '../templates/header.php';
include '../templates/navbar.php';
include 'profile_handler.php';
?>


<!--profile information-->
    <section class="content">
        <div class="row">
            <div class="profile col-md-4 col-md-offset-4">
                <h1 class="text-center">Profiel</h1>
                <div class="row">

                    <!--profile picture-->
                    <div class="col-md-6">
                        <img src="<?= url('teamfortressforum/src/img/tf2logo.png')?>" class="img-fluid propic" alt="profilepicture">
                    </div>

                    <!--name, username, email, created at-->
                    <div class="col-md-6">
                        <p><strong>Name:</strong><br>       <?= $profile_name?></p>
                        <p><strong>Username:</strong><br>   <?= $profile_username?></p>
                        <p><strong>Email:</strong><br>      <?= $profile_email?></p>
                        <p><strong>Created at:</strong><br> <?= $profile_created_at?></p>
                    </div>
                </div>

                <a href="logout_handler.php" class="btn btn-warning loginbutton" role="button">Log out</a>

            </div>
        </div>
    </section>


<?php
include '../templates/footer.php';
?>