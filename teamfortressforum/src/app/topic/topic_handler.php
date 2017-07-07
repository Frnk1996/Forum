<?php
include '../database/database.php';



if(!dbConnect()) {
    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
    exit(0);
}


