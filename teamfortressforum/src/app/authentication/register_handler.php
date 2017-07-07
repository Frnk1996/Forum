<?php
include ('../helpers/helper_functions.php');
include ('../database/database.php');


// controleren of dit script is opgestart vanuit ons formulier
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: '. url('teamfortressforum/src/index.php'));
    exit(0);
}


// data uit het formulier binnenhalen in php variablen

$name = $_POST['name'];

$username = $_POST['username'];

$email = $_POST['email'];

$password1 = sha1($_POST['password1']);

$password2 = sha1($_POST['password2']);


// Connectie met de database maken
dbConnect();


// Controle op juistheid van ingevulde gegevens en of username/password voorkomen in database
if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password1']) && isset($_POST['password2'])){
    if (!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password1']) && !empty($_POST['password2'])){
    }
    else{
        echo 'Vul alle velden in alstublieft';
        die;
    }
};


// formulierdata opslaan in database
if($password1==$password2) {
    dbQuery('INSERT INTO users(name, username, email, password) 
             VALUES (:name, :username, :email, :password1)',
        [
            ':name' => $name,
            ':username' => $username,
            ':email' => $email,
            ':password1' => $password1
        ]);

    header('Location: ' . url('teamfortressforum/src/app/authentication/login.php'));
    exit(0);

} else {
    echo 'shit gaat verkeerd';
}


// doorlinken naar de login page


?>