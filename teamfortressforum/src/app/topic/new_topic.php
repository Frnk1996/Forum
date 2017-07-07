<?php
include '../helpers/helper_functions.php';
include '../templates/header.php';
include '../templates/navbar.php';
?>

    <!--new topic-->
    <section class="content">
        <div class="row">
            <div class="register col-md-4 col-md-offset-4">

                <h1 class="text-center">New topic</h1>
                <form method="POST" action="new_topic_handler.php">

                    <!--name-->
                    <div class="form-group">
                        <input class="form-control" placeholder="Topic title" type="text" name="topic_title" required autofocus>
                    </div>

                    <!--topic content-->
                    <div class="form-group">
                    <textarea class="form-control" rows="5" id="topic_content" name="topic_content" required></textarea>
                    </div>

                    <!--submit button-->
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