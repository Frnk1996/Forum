<?php
include '../database/database.php';



if(!dbConnect()) {
    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
    exit(0);
}

if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];

    $userprofile = $db->prepare('SELECT * FROM `users` WHERE username = :username');
    $userprofile->execute([
        ':username' => $username
    ]);

    $userprofile_data = $userprofile->fetchAll();

    $userid = $userprofile_data[0][0];
    $profile_name = $userprofile_data[0][2];
    $profile_username = $userprofile_data[0][3];
    $profile_email = $userprofile_data[0][4];
    $profile_created_at = $userprofile_data[0][6];
}

